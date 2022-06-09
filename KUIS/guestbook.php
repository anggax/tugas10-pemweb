<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 5%;
            padding-left: 28%;
        }
    </style>
</head>

<body>
    <!--Pengaturan Tampilan dam Inputisasi pada Form-->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-primary text-center mt-0">
                    <h3>GUEST BOOK</h3>
                </div>
                <div class="card-body">
                    <form method="post" action="inputGuest.php">
                        <!--Class Inputan Posted-->
                        <div class="form-group row">
                            <label for="posted" class="col-sm-2 col-form-label">Posted</label>
                            <div class="col-sm-10">
                                <input required type="date" name="posted" id="posted" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Nama-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input required type="text" name="name" id="name" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Email-->
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input required type="text" name="email" id="email" class="form-control class= ">
                            </div>
                        </div> <br>
                         <!--Class Inputan Alamat-->
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input required type="text" name="address" id="address" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan City-->
                        <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <input required type="text" name="city" id="city" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Message-->
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea required type="text" name="message" id="message" class="form-control class="> </textarea>
                            </div>
                        </div> <br>
                        <!--Class Tombol Simpan-->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary" style="width: 612px">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>