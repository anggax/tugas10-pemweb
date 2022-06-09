<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Pengaturan Style Body-->
    <style>
        body {
            padding-top: 5%;
            padding-left: 28%;
        }
    </style>
</head>

<body>
    <!--Pengaturan Tampilan dan Inputisasi Form-->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-primary text-center mt-0">
                    <h3>SIGN UP FORM</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="inputSign.php">
                        <!--Class Inputan Nama-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" name="name" id="name" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Alamat-->
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input required type="text" name="address" id="address" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Email-->
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required type="text" name="email" id="email" class="form-control class= ">
                            </div>
                        </div> <br>
                        <!--Class Inputan Homepage-->
                        <div class="form-group row">
                            <label for="homepage" class="col-sm-2 col-form-label">Homepage</label>
                            <div class="col-sm-10">
                                <input type="text" name="homepage" id="homepage" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Username-->
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input required type="text" name="username" id="username" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Password-->
                        <div class="form-group row">
                            <label for="exampleInputPassword1" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input required type="password" name="password" id="password" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Tombol Simpan-->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary" style="width: 612px">Sign UP Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>