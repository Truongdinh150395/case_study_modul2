<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Điểm</title>
</head>
<style>
    body {
        background-color: lightskyblue;
    }
    /*.table{*/
    /*    background-color: white;*/
    /*}*/
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body style="background-color: lightskyblue">
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="index.php"><img src="style/images/logo.png" alt="logo"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

                    <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>
                    </li>


                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </nav><!-- END NAVBAR -->
    </div>
</div>

<h3 style="text-align: center"> Danh Sách Điểm</h3>
<a href="index.php?page=add-point" class="btn btn-primary btn-xs pull-right">Thêm điểm học sinh</a>

    <table class="table" style="background-color: whitesmoke">
        <thead class="thead-dark">
        <tr>
            <td scope="col">STT</td>
            <td scope="col">ID_student</td>
            <td scope="col">Math</td>
            <td scope="col">Literature</td>
            <td scope="col">English</td>
        </tr>
        </thead>
<?php foreach($points as $key=>$value):?>
        <tr>
            <td><?php echo ++$key;?></td>
            <td><?php echo $value->getStudentId();?></td>
            <td><?php echo $value->getMath();?></td>
            <td><?php echo $value->getLiterature();?></td>
            <td><?php echo $value->getEnglish();?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
