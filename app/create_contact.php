<?php
  
    include 'db.php';

    $query=$connection
            ->query("SELECT `id`,`ism`,`tel`, `email`,`xabar` FROM `aloqa`");
    $items  = $query->fetchAll();