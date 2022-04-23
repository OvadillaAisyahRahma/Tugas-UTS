<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        include "koneksi.php";
        $id=$_GET['id'];
        $sql = "SELECT * FROM tbl_033 WHERE id_033=$id";
        $hasil = mysqli_query($koneksi, $sql);
        if (!$hasil){
            echo "Query Salah";
        }
        ?>
        <h1>Form edit data </h1>
        <?php
        while ($row = mysqli_fetch_array($hasil))
        {
        ?>
        <form method="post" action="update.php">
        <table border="0">
        <input type="hidden" name="id_033" value="<?php echo $row['id_033']?>">
        <tr>
            <td>nama_033: <input type="text" name="nama_033" value="<?php echo $row['nama_033']?>"></td>
        </tr>
        <tr>
            <td>email_033: <input type="text" name="email_033" value="<?php echo $row['email_033']?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Update</button> </td>
        </tr>
            </table>
        </form>
        <?php } ?>
    </body>
</html>