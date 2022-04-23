<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Data</h1> 
        <a href="form.php">Tambah Data </a>
        <table width="80%" border="1">
            <tr>
                <td>id_033</td>
                <td>nama_033</td>
                <td>email_033</td>
                <td>action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_033";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_033'];?></td>
                    <td><?=$row['nama_033'];?></td>
                    <td><?=$row['email_033'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_033']?>">Edit | <a href="delete.php?id=<?=$row['id_033']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>