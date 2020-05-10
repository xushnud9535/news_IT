<?php
    
    include '../app/db.php';
    
    if(!empty($_POST) && !empty($_FILES)){


        $title =isset($_POST['title']) ? $_POST['title'] : '';
        $img = $_FILES['img'];
        $path='images';
        $name=uniqid();
        $full_path=$path.'/'.$name.'.jpg';
        move_uploaded_file($img['tmp_name'],$full_path);
        $short =isset($_POST['short']) ? $_POST['short'] : '';
        $content =isset($_POST['content']) ? $_POST['content'] : '';
        $category =isset($_POST['category']) ? $_POST['category'] : ''; 
        $insert = $connection->prepare("Insert into `news`(`title`,`img`,`short`,`content`,category) values(?,?,?,?,?)");
        $insert->execute([$title,$full_path,$short,$content,$category]);
        echo 'bazaga yuklanib boldi';
        header('Location:../index.php');

    }else{
        echo 'yuklanmadi';
    }
