<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach hoc sinh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/css/assets/bootstrap.min.css">
    <!-- Font awsome CSS -->
    <link rel="stylesheet" href="style/css/assets/font-awesome.min.css">
    <link rel="stylesheet" href="style/css/assets/flaticon.css">
    <link rel="stylesheet" href="style/css/assets/magnific-popup.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="style/css/assets/owl.carousel.css">
    <link rel="stylesheet" href="style/css/assets/owl.theme.css">
    <link rel="stylesheet" href="style/css/assets/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="style/css/assets/slick.css">
    <link rel="stylesheet" href="style/css/assets/preloader.css"/>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="style/css/assets/revolution/layers.css">
    <link rel="stylesheet" href="style/css/assets/revolution/navigation.css">
    <link rel="stylesheet" href="style/css/assets/revolution/settings.css">
    <!-- Mean Menu-->
    <link rel="stylesheet" href="style/css/assets/meanmenu.css">
    <!-- main style-->
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="style/css/responsive.css">
    <link rel="stylesheet" href="style/css/demo.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    body {
        background-color: lightskyblue;
    }
    .table {
        background-color: white;
    }
</style>
<body>
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="index.php"><img src="style/images/logo.png" alt="logo"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

<!--                    <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>-->
                    <li class="nav-item"><a href="index.php?page=list-point" class="nav-link">LIST POINT</a>
                    </li>


                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div class="mr-auto search_area ">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                        <div id="search">
                            <button type="button" class="close">×</button>
                            <form>
                                <input type="search" value="" placeholder="Search here...."  required/>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav><!-- END NAVBAR -->
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0" method="post" action="index.php?page=search">
            <input class="form-control mr-sm-2" type="search" placeholder="enter name student" aria-label="Search" name="search">
            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<h2 style="text-align: center;color: black">Danh Sách Học Sinh</h2>
<a href="index.php?page=add-student" class="btn btn-primary btn-xs pull-right">Thêm học sinh</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <td scope="col">STT</td>
            <td scope="col">Mã Lớp</td>
<!--            <td>Id</td>-->
            <td scope="col">Tên Học Sinh</td>
            <td scope="col">Giới tính</td>
            <td scope="col">Ngày Sinh</td>
            <td scope="col">Địa Chỉ</td>
            <td scope="col">Action</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach($students as $key=>$value): ?>
            <tr>
                <td><?php echo ++$key;?></td>
                <td><?php echo $value->getIdClass();?></td>
<!--                <td>--><?php //echo $value->getId();?><!--</td>-->
                <td><?php echo $value->getName();?></a></td>
                <td><?php echo $value->getGender();?></td>
                <td><?php echo $value->getDate();?></td>
                <td><?php echo $value->getAddress();?></td>
                <td><a class="btn btn-success" href="index.php?page=list-point">Nhập Điểm</a></td>
                <td><a class="btn btn-danger" onclick="return confirm('ban co muon xoa k?')" href="index.php?page=delete-student&id=<?php echo $value->getId();?>">Delete</a></td>
                <td><a class="btn btn-success" href="index.php?page=edit-student&id=<?php echo $value->getId(); ?>">Edit</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
