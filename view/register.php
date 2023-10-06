<?php
include ("./view/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 formcontainer ">
            <h1 class="d-flex justify-content-center mt-5">SIGNUP FORM</h1>

            <form method="post" action="./register.php" class="border rounded p-4 border-primary login-form">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $_POST['username'] ?? ''; ?>"
                           placeholder="Enter name">
                    <span class="error"> <?php echo $usernameErr ?? ""; ?> </span>


                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email"  value="<?php echo $_POST['email'] ?? ''; ?>"  placeholder="Enter email">
                    <span class="error"><?php echo $emailErr ?? ''; ?></span>


                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo $_POST['password'] ?? ''; ?>"
                           placeholder="Enter password">
                    <span class="error"><?php echo $passwordErr ?? ''; ?> </span>


                </div>

                <button type="submit" id="signup-btn" name="signup-submit"
                        class="btn btn-primary d-flex justify-content-center">Sign Up
                </button>
            </form>
            <div class="d-flex justify-content-center">
                Already have an account ?? <a href="/login.php"> Login</a>

            </div>
        </div>
    </div>
</div>



<?php

include ("./view/footer.php");
?>
