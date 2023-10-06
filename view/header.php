<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>


    .error {
        color: red;
    }

    .box {
        /*border: 5px solid;*/
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px;
    }
</style>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TodoTask</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-4">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./register.php">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

