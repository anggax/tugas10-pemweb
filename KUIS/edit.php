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
    <!--Pengaturan Tampilan dan Inputisasi pada Form-->
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-primary text-center mt-0">
                    <h3>EDIT GUEST BOOK</h3>
                </div>

                <div class="card-body">
                    <!--Memasukkan koneksi dan select data pada tabel-->
                    <?php
                        include 'dbconnect.php';
                        $vid = $_GET['id'];
                        $data = mysqli_query($conn,"SELECT * FROM guestbook WHERE id ='$vid'");
                        while($cont = mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="cekEdit.php">
                        <!--Class Inputan Nama-->
                        <div class="form-group row">
                            <label for="posted" class="col-sm-2 col-form-label">Posted</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" id="id" value="<?php echo $cont['id'];?>">
                                <input type="date" name="posted" id="posted" value="<?php echo $cont['posted'];?>" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Nama-->
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" value="<?php echo $cont['name'];?>" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Email-->
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" value="<?php echo $cont['email'];?>" class="form-control class= ">
                            </div>
                        </div> <br>
                         <!--Class Inputan Alamat-->
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" id="address" value="<?php echo $cont['address'];?>" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan City-->
                        <div class="form-group row">
                            <label for="city" class="col-sm-2 col-form-label">Kota</label>
                            <div class="col-sm-10">
                                <input type="text" name="city" id="city" value="<?php echo $cont['city'];?>" class="form-control class=">
                            </div>
                        </div> <br>
                        <!--Class Inputan Message-->
                        <div class="form-group row">
                            <label for="message" class="col-sm-2 col-form-label">Pesan</label>
                            <div class="col-sm-10">
                                <textarea type="text" name="message" id="message" value="<?php echo $cont['message'];?>" class="form-control class="> </textarea>
                            </div>
                        </div> <br>
                        <!--Class Tombol Simpan-->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary" style="width: 612px">Submit</button>
                            </div>
                        </div>

                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>