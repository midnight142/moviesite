<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" href="css/panel.css">
</head>
<script>
    $(document).ready(function() {
        $('.edit').click(function() {
            $('#myModal').modal('show');
            let info = $(this).parent().parent().children('#m-hidden');
            console.log(info.children('#m-name_en').val());
            $('#m1-id').val($(this).parent().parent().children('#m-id').text());
            $('#m1-name').val($(this).parent().parent().children('#m-name').text());
            $('#m1-director').val($(this).parent().parent().children('#m-director').text());
            $('#m1-time').val($(this).parent().parent().children('#m-time').text());
            $('#m1-year').val($(this).parent().parent().children('#m-year').text());
            $('#m1-name_en').val(info.children('#m-name_en').val());
            $('#m1-link').val(info.children('#m-link').val());
            $('#m1-quality').val(info.children('#m-quality').val());
            $('#m1-category').val(info.children('#m-category').val());
            $('#m1-type').val(info.children('#m-type').val());
            $('#m1-country').val(info.children('#m-country').val());
            $('#m1-desc').val(info.children('#m-desc').val());
        });

        $('.del').click(function() {
            $('#myModal2').modal('show');
            $('#msg').text("Xóa Phim " + $(this).parent().parent().children('#m-name').text());
            $('#f-id').val($(this).parent().parent().children('#m-id').text());
        });
    });
</script>
<body>
<div class="container">
    <div class="header-panel">
        Dashboard
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?controller=home">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <?php
                if (isLoggin()) {
                    ?>
                        <div class="admin-user">Hi! Admin / <a href="?controller=account&action=logout">Logout</a></div>
                    <?php
                }
            ?>

        </ol>

    </nav>
    <?= $content ?>
</div>
</body>
</html>