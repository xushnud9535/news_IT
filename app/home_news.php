<?php
  
   include 'db.php';


   $query=$connection
           ->query("SELECT `id`,`title`,`img`, `short`,`created_at`,`kordi`,`category` FROM `news` order by `id` desc LIMIT 4");
   $items  = $query->fetchAll();