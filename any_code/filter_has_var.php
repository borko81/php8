<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>



    <div class="container">
        <div id="result"></div>
        <form method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="check">Upper case</label>
            <input type="checkbox" value="1" name="check" id="check">
            <button name="submit_me" id="but">Submit</button>
        </form>
    </div>

<script>
    $(document).ready(function () {
        $("#but").click(function () {
            $.ajax({
                url: "helper.php",
                type: "POST",
                data: {
                    "name": $("#name").val()
                },
                cache:false,
                success: function(response) {
                    $("#result").html(response)
               }
            })
            return false;
        });
    })
</script>
</body>
</html>