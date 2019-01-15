<?php



 if(isset($_POST['signup-submit'])){
    require_once 'dbh.inc.php';

    $username= $_POST['uid'];
    $email= $_POST['mail'];
    $password= $_POST['pwd'];
    $passwordRepeat= $_POST['pwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../signup.php?error=emptyfield&uid=".$username."&email=".$email);
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]*$/', $username)){
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmaild&uid=".$username);
        exit();
    }elseif(!preg_match('/^[a-zA-Z0-9]*$/', $username)){
        header("Location: ../signup.php?error=invalidusername"."&email=".$email);
        exit();
    }elseif ($password !== $passwordRepeat){
        header("Location: ../signup.php?error=passcheck&uid=".$username."&email=".$email);
        exit();
    }else{

        $sql= 'SELECT uidUsers FROM users WHERE uidUsers= ?';
        $stmt= mysqli_stmt_init($conn);
        $check= mysqli_stmt_prepare($stmt, $sql);


        if($check){
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result= mysqli_stmt_get_result($stmt);
            $aut= true;


            while($row= mysqli_fetch_assoc($result)){
                $aut= false;
                header("Location: ../signup.php?error=takenusername"."&email=".$email);
            }
        }


        if($aut){
            $sql= "INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES(?, ?, ?)";

            $stmt= mysqli_stmt_init($conn);
            $check= mysqli_stmt_prepare($stmt, $sql);

            if($check){

                $hashedPwd= password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashedPwd);
                mysqli_stmt_execute($stmt);
                header("Location: ../signup.php?signup=succes");
            }else{
                echo "SQL Failed";
            }


        }
        mysqli_stmt($stmt);
        mysqli_close($conn);
    }


 }else{
     echo 'Adios';
     mysqli_close($conn);
 }