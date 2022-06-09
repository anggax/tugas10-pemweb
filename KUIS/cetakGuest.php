<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>
<body>
    <center><h1>CETAK DATA PENGGUNA - GUESTBOOK</h1></center><br>
    <a href="guestbook.php"></a><br><br>
    <style>
        body {
            background-color: #242424;
        }
        h1 {
            font-family: trueno; font-size: 28px; color: #92f026;
        }

    </style>

    <!--Pembuatan Tabel Data-->
    <table width="100%" cellpadding="4" cellspacing="0" border="1">
        <tr style="background-color: #b066ff; font-family: sans-serif; font-size: 14px;">
            <th >No</th>
            <th>Posted</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        <!--Memasukkan koneksi dan select data pada tabel-->
        <?php
            include 'dbconnect.php';
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM guestbook");
            while ($cont= mysqli_fetch_array($data)) {      
        ?>
            <!--Pengaturan dan penyimpanan data pada variabel penampung data pada tabel-->
            <tr style="font-family: sans-serif; font-size: 14px; color: white;">
                <td><?php echo $no++; ?></td>
                <td width="300" align="center"><?php echo $cont['posted']; ?></td>
                <td width="300" align="center"><?php echo $cont['name']; ?></td>
                <td width="300" align="center"><?php echo $cont['email']; ?></td>
                <td width="300" align="center"><?php echo $cont['address']; ?></td>
                <td width="300" align="center"><?php echo $cont['city']; ?></td>
                <td width="300" align="center"><?php echo $cont['message']; ?></td>
                <td>
                    <button class="button" style="background-color: #92f026; width: 64px; font-weight: bold; border-radius: 4px;">
                    <a style="text-decoration: none; color: black;" href="edit.php?id=<?php echo $cont['id']; ?>">Edit</a>
                    </button> <br>
                    <button class="button" style="background-color: #92f026; width: 64px; font-weight: bold; border-radius: 4px;">
                    <a style="text-decoration: none; color: black;" href="hapus.php?id=<?php echo $cont['id']; ?>">Delete</a>
                    </button>
                </td>
            </tr>
            <?php
            }
            ?>
    </table>
    <br>
        <!--Button Keluar-->
        <button class="button" style="background-color: #92f026; width: 80px; height: 32px; font-weight: bold; border-radius: 6px;">
            <a style="text-decoration: none;" text-align="justify" href="logout.php">LOGOUT</a>
        </button>
</body>
</html>