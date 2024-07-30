<?php include "template/header.php" ?>

<?php 
if (!isset($_SESSION['login'])) {
    // echo $_SESSION['login'];
    echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISEMAR</title>
</head>
<!-- 
<?php 
//     session_start();
//     if(!isset($_SESSION['login'])) {
// 	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
// }
?> -->


<body>
    <h1>SISEMAR</h1>
    <h3>Form Penambahan Artikel</h3>
    <form method="POST" action="create_artikel.php">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul_artikel" required></td>
            </tr>
            <tr>
                <td>Topik</td>
                <td><input type="text" name="topik_artikel" required></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><input type="text" name="isi_artikel" required></td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_artikel.php">CANCEL</a></p>
</body>

</html>