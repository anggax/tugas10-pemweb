<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
<?php
    //memulai sesi pengecekan apakah user sudah login
    session_start();
    if($_SESSION['status']="login"){
        echo '
            <div class="card">
            <div class=" form-group row">
            <div class="card-body">
                <div class="alert alert-primary text-center mt-0">
                    <h3>Welcome Back, Lads!</h3>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Hai ';
?>
                    <!--Mencetak username pengguna dengan pemanggilan sesi-->
                    <?php
                    echo $_SESSION['username'];
                    ?>

                    <?php echo '</h5>
                    <br>';?>
                    <?php
                        //set waktu terkini saat user melakukan login
                        date_default_timezone_set("Asia/Jakarta");
                        echo 'You are logged in at ';
                        echo "\t".date("l,m-F-Y, g:i:s A");
                        echo '<br>';
                        echo '<br>';

                        echo '
                            <a href="guestbook.php" class="btn btn-primary">Guestbook</a>
                        </div>
                    </div>
                    </div>
                    </div>      
     
    ';}?>   
</body>
</html>