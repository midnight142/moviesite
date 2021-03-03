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
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="css/comment.css">
    <title>Document</title>
</head>
<body>
<div class="header">
    <nav class="navbar">
        <div class="container mega-menu">
            <a href="?controller=home" class="nav-brand"><img src="images/logo.png" alt="" width="150px"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>
<nav class="navbar navbar-expand-md menu">
    <div class="container">
        <div class="collapse navbar-collapse" id="collapse_target">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="?controller=home" class="nav-link">Trang Chủ</a>
                </li>
                <li class="nav-item">
                    <a href="?controller=list&action=category&id=1" class="nav-link">Phim Hành Động</a>
                </li>
                <li class="nav-item">
                    <a href="?controller=list&action=kind&id=2" class="nav-link">Phim Chiếu Rạp</a>
                </li>
                </li><li class="nav-item">
                    <a href="?controller=list&action=kind&id=1" class="nav-link">Phim Lẻ</a>
                </li>
                <li class="nav-item">
                    <a href="?controller=list&action=category&id=8" class="nav-link">Phim Tài Liệu</a>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?= $content ?>
    </div>
</div>
<div class="footer">
    <p>Copyright © 2020</p>
    <p>Coder: Nguyễn Mạnh Hùng <i class="fa fa-facebook-f"></i>Hưng Huỳnh <i class="fa fa-facebook-f"></i><p>
</div>
</body>
</html>