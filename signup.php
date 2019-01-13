<?php require_once "header.php"?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1 class="h1-signup">SignUp</h1>
            <form action="includes/signup.inc.php" method="post">

                <label for="uid" class="label">Username</label>
                <input type="text" name="uid" placeholder="Username" class="input" id="uid">

                <label for="mail" class="label">Email</label>
                <input type="text" name="mail" placeholder="Email" class="input" id="mail">


                <label for="pwd" class="label">Password</label>
                <input type="password" name="pwd" placeholder="Password" class="input" id="pwd">

                <label for="pwd-repeat" class="label">Repeat-Password</label>
                <input type="password" name="pwd-repeat" placeholder="Repeat password" class="input" id="pwd-repeat">




                <button type="submit" name="signup-submit" class="button is-dark">Signup</button>
            </form>
        </section>
    </div>
</main>

<?php require_once "footer.php"?>
