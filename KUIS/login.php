<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 12%;
            padding-left: 37%;
        }
    </style>
</head>

<body>
    <!--Pengaturan Tampilan dan Inputisasi Form-->
    <div class="card col-md-6">
        <div class="alert alert-primary text-center mt-0">
            <h4>FORM LOGIN</h4>
        </div>
        <div class="card-body">
            <!--Pengecekan Validasi Login-->
            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<center>Login gagal! username dan password salah!</center>";
                    echo "<br>";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login dulu";
                }
            }
            ?>

            <!--Pengaturan Kolom Username dan Password-->
            <form method="post" action="logincek.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input required type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Masukan Username">
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input required type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
                </div><br>

                <!--Pengaturan Button Login-->
                <button type="submit" name="masuk" class="btn btn-primary" style="width: 394px;">Login Now</button>
            </form>
        </div>
    </div>
</body>

</html>