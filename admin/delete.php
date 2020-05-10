<?php
    include '../app/db.php';
             
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $delete=$connection->prepare("delete from `news` where id=$id");
            $delete->execute([$id]);
            header('Location:index.php');
        }
?>
