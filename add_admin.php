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
    <title> SIPEKA</title>
</head>
<!-- 
<?php
//     session_start();
//     if(!isset($_SESSION['login'])) {
// 	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
// }
?> -->


<body>
    <h1>SIPEKA</h1>
    <h3>Form Penambahan Admin</h3>
    <form method="POST" action="create_admin.php">
        <table>
            <tr>
                <td>username</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="username" value=""
                        required></td>
            </tr>
            <tr>
                <!-- <td>Isi</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required></td> -->
                <br>
                <td>
                    <p><label>Password</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="password" value=""
                        required></td>
                <br>
            </tr>
            <tr>
                <td>Admin Type</td>
                <td>
                    <select name="admin_type">
                        <option value="0">Admin Sensus
                        </option>
                        <option value="1">Admin Situs
                        </option>
                        <option value="2">Super Admin
                        </option>
                    </select>
                </td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
</body>

</html>