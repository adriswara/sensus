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
    <h3>Form Penambahan Kartu Keluarga</h3>
    <form method="POST" action="create_admin.php">
        <table>
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>form</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="form" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
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
    <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
</body>

</html>