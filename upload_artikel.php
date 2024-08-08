<?php  

if (isset($_POST['upload'])) {
    include "connection.php";

    $folder = 'img/';
    if (move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])) {
        
        $photo = $_FILES['new_photo']['name'];
        $query="UPDATE artikel SET display_artikel='$photo' WHERE id_artikel='$_POST[id_artikel]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['display_artikel'] !== 'default.png') unlink($folder . $_POST['display_artikel']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('read_artikel.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.location.replace('display_artikel.php?id=$_POST[id_artikel]');</script>";
            }
            
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('display_artikel.php?id=$_POST[id_artikel]');</script>";
        
}
?>