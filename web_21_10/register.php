<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        form {
            border-radius: 8px;
            width: 50vw;
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            display: block;
            margin: auto;
        }
        @media (max-width: 768px) {
            form {
                width: 90vw;
            }
        }
    </style>
</head>
<body class="bg-light">
    <form action="./test.php" method="POST" class="p-5 mt-5 bg-dark">
        <h3 class="text-center text-success mb-4">Registration Form</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="text" class="form-control" id="floatinginput username" name="name" require>
                    <label for="floatinginput username">Username</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="text" class="form-control" id="floatingInput email" name="email" require>
                    <label for="floatingInput email">Email address</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="text" class="form-control" id="floatinginput fullName" name="FullName" require>
                    <label for="floatinginput fullname">Full Name</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="gender" class="form-control" id="floatingInput gender" name="gender" require>
                    <label for="floatingInput gender">Gender</label>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="radio" class="form-control" id="floatingPassword password" name="options" require>
                    <label for="floatingPassword password">Choose one</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="options" id="floatingPassword password" >
                    <label class="form-check-label" for="floatingPassword password">
                        Default checked radio
                    </label>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-floating m-3">
                    <input type="text" class="form-control" id="floatingPassword confirmPassword" name="question" require>
                    <label for="floatingPassword password">Are you applied for GATE 2023?</label>
                </div>
            </div>
            <div class="col-md-6">
                <button type="reset" class="btn btn-danger w-50 d-block m-auto mt-3">Reset</button>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success w-50 d-block m-auto mt-3">Register</button>
            </div>
        </div>
    </form>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>