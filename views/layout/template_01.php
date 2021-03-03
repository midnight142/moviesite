<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <title>Document</title>
</head>
<style>
    .container-fluid {
        background-color: rgba(4, 6, 13, 0.8);
        width: 100%;
        height: 100vh;
    }

    .form-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .card-body .md-form form {
        text-align: left;
    }

    #reg a:hover {
        text-decoration: none;
    }

</style>
<body>

<div class="container-fluid">
    <div class="form-box col-xl-5 col-lg-6 col-sm-10 col-md-7">
        <?= $content ?>
    </div>
</div>
</body>
</html>