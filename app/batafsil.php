<?php
    include 'db.php';

    $id = $_GET['id'];
    
    $query1 = $connection
              ->query('UPDATE `news` SET `kordi`=`kordi`+1 WHERE `id`='.$id);
    
    $query = $connection
        ->query("SELECT `id`,`title`,`img`,`content`,`created_at`,`kordi`,category FROM `news` WHERE `id`=".$id);
    $news = $query->fetch();
    
?>