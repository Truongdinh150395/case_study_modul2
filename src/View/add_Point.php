<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Điểm Học Sinh</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .table {
        width: 500px;

    }
    #tb {
        width: 400px;
    }
</style>
<body style="background-color:aliceblue">
<div class="edu_nav">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="index.php"><img src="style/images/logo.png" alt="logo"></a>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav nav lavalamp ml-auto menu">

                    <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>
                    <li class="nav-item"><a href="index.php?page?list-point" class="nav-link">LIST POINT</a>
                    </li>
                </ul>
            </div>
            <div class="mr-auto search_area ">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><i class="search_btn flaticon-magnifier"></i>
                        <div id="search">
                            <button type="button" class="close">×</button>

                        </div>
                    </li>
                </ul>
            </div>
        </nav><!-- END NAVBAR -->
    </div>
</div>

<?php

include_once "DBConnect.php";
$db = new \QLD\Model\DBConnect();
$conn = $db->connect();
$sql = "SELECT * FROM `Students`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<h3 style="text-align: center">Nhập Điểm Học Sinh</h3>
    <table align="center" id="tb" class="table" style="width: 400px;align-items: center">
        <form   method="post">
    <tr>
        <td>
            <label >Mã HS</label>

            <select class="form-control" name="studentCode" >
                <?php foreach ($resul as $key => $value):?>
                    <option><?php echo $value["id_student"];?></option>
                <?php endforeach; ?>
            </select>
        </td>
        <td>
            <label >Môn Toán</label>

            <input type="text" name="toan"  placeholder="Enter toan">
        </td>
        <td>
            <label >Môn Văn</label>

            <input type="text" name="van"  placeholder="Enter van">
        </td>
        <td>
            <label >Môn Anh</label>

            <input type="text"  name="anh"  placeholder="Enter anh">
        </td>
    </tr>
            <tr>
                <td>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </td>
            </tr>

        </form>

    </table>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
