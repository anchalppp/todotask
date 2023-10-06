<?php

include ("./view/header.php");

?>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 formcontainer">
            <h1 class="d-flex justify-content-center mt-5">LOGIN FORM</h1>
            <form method="post" action="./login.php">
<!--                <div class="mb-3">-->
<!--                    <label for="username" class="form-label">Username</label>-->
<!--                    <input type="text" class="form-control" id="username" name="username" value="--><?php //echo $_POST['username'] ?? ''; ?><!--" placeholder="Enter name" >-->
<!---->
<!--                </div>-->

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>"  placeholder="Your email...">
                    <span class="error"> <?php echo $emaiErr ?? ''; ?>  </span>

                </div>
                <div class="mb-3">
                    <label for="login_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_POST['password'] ?? ''; ?>" placeholder="Your password">
                    <span class="error"> <?php echo $passwordErr ?? ''; ?>  </span>
                </div>
                <button type="submit" name="login-btn" id="login-btn" class="btn btn-primary" value="login-btn">Login</button>
            </form>

            <div class="d-flex justify-content-end">
                <a href="">Forget Password</a>
            </div>
            <div class="d-flex justify-content-center">
                Don't have an account ?? <a href="./register.php"> Sign Up</a>
            </div>
        </div>
    </div>
</div>


<?php

include ("./view/footer.php");

?>
