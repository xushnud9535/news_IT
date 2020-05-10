<?php
    
    include 'db.php';
    
    if(!empty($_POST)){


        $ism =isset($_POST['ism']) ? $_POST['ism'] : '';
        $tel =isset($_POST['tel']) ? $_POST['tel'] : '';
        $email =isset($_POST['email']) ? $_POST['email'] : '';
        $xabar =isset($_POST['xabar']) ? $_POST['xabar'] : ''; 
        $insert = $connection->prepare("Insert into `aloqa`(`ism`,`tel`,`email`,`xabar`) values(?,?,?,?)");
        $insert->execute([$ism,$tel,$email,$xabar]);
        echo 'bazaga yuklanib boldi';
        header('Location:index.php');

    }
