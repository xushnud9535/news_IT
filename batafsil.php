<?php
    include 'app/batafsil.php';
?>
<?php include 'loyauts/header.php' ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Batafsil...</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        <div class="container">
           
             <!--Navbar tamom -->
             <!--Card boshlash -->
             <div>
                 <h2 class="mt-3 mb-4">Yangiliklar</h2>
             </div>
             
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title mb-4"><?php echo $news['title']; ?></h5>
                    <img src="<?php echo 'admin/'.$news['img'];?>" class="card-img-top mb-4" alt="..." style="width:800px;">
                    <div class="text-left mb-4">
                            <?=date_format(date_create($news['created_at']), '<b>H:i</b> d/m/Y')?>
                    </div>
                    <p class="card-text"><?php echo $news['content'] ?></p>
                </div>
            </div>

        </div>    
    </body>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
    </html>
    <?php include 'loyauts/footer.php' ?>