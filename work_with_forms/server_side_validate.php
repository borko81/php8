<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container {
            max-width: 700px;
            margin: 50px auto;
        }
        form {
            border: 1px solid #1A33FF;
            background: #ecf5fc;
            padding: 40px 50px 45px;
        }
        .form-control:focus {
            border-color: #000;
        }
        .error {
            color: red;
            font-weight: 400;
            display: block;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <?php

        function checkInput($input) {
            $unput = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        }

        $nameError = "";
        $emailError = "";
        $genderError = "";

        if (isset($_POST['submit']) && (!empty($_POST["gender"]))) {
            $name = checkInput($_POST["name"]);
            $email = checkInput($_POST["email"]);
            $gender = checkInput($_POST["gender"]);
            
            if (empty($name)) {
                $nameError = "<div class='error'>Name can not be empty</div>";
            } else {
                echo $name . "<br />";
            }

            if (empty($email)) {
                $emailError = "<div class='error'>Email can not be empty</div>";
            }
        }
        

    ?>

    <div class="container">
    <form action="" method="POST" novalidate>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Name</label>
            <div class="col-sm-8">
                <input type="text" name="name" class="form-control">
                <?php echo $nameError; ?>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-4 col-form-label">Email</label>
            <div class="col-sm-8">
                <input type="email" name="email" class="form-control">
                <?php echo $emailError; ?>
            </div>
        </div>

        <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
            <div class="col-sm-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
                    <label class="custom-control-label" for="female">Female</label>
                </div>
            </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="col-sm-12 mt-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block form-control">Submit</button>
            </div>
        </div>      

    </form>
    </div>
</body>
</html>