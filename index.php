<?php
    include 'app/home_news.php';
?>
<?php include 'loyauts/header.php'; ?>

<!--  CONTENT BEGIN -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dasturlash tillari reytinglari haqida</h5>
                    <p>Hozirgi kunda dasturlash tillari juda ko'p.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hakkerlar</h5>
                    <p>Hakkerlar ikki turga ajraladi oq va qora.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="images/6.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dasturchi muhiti</h5>
                    <p>dasturlash muhiti qanchalik yaxshi bolsa dasturchiga bu yana ilxom baxsh etadi.</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- SLIDER END -->
        <!-- CONTENT BEGIN -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">NEWS</h3>
            </div>
            <?php foreach($items as $item): ?>
            
                <div class="col-lg-3 col-xs-12 col-sm-6 col-md-4">
                <div class="card">
                    <img src="<?='admin/'.$item['img']?>" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><?=$item['title']?></h5>
                        <p class="card-text"><?=$item['short']?></p>
                        <div class="text-right">
                            <?=date_format(date_create($item['created_at']), '<b>H:i</b> d/m/Y')?>
                          <p class="card-text"><?=$item['category']?></p>  
                        </div>
                        <a href="batafsil.php?id=<?=$item['id']?>" class="btn btn-primary">Batafsil</a>
                    </div>
                </div>
            </div>
          
            <?php endforeach; ?>
        </div>
    <section class="features-icons bg-light text-center">
        <div class="container">
        <div class="col-lg-12">
                <h3 class="mt-4 mb-4 text-center text-uppercase text-primary">MAQOLALAR</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-screen-desktop m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>To'liq moslashuvchan</h3>
                        <p class="lead mb-0">Ushbu mavzu, o'lchamidan qat'iy nazar har qanday qurilmada ajoyib ko'rinadi!<br></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-layers m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Ixtiyoriy turdagi</h3>
                        <p class="lead mb-0"></p>
                    </div>
                    <p class="lead mb-0">- Landing pages;<br>- Sotuv saytlari;<br>- Katalog saytlar;<br>- Korporativ web saytlar;<br>- va boshqa turdagi saytlar.<br></p>
                </div>
                <div class="col-lg-4" style="margin: 2;">
                    <div class="mx-auto features-icons-item mb-5 mb-lg-0 mb-lg-3">
                        <div class="d-flex features-icons-icon"><i class="icon-check m-auto text-primary" data-bs-hover-animate="pulse"></i></div>
                        <h3>Foydalanishga qulay</h3>
                        <p class="lead mb-0">Tajribasi yo'q insonlar ham oson moslashib, tushunib keta oladigan darajadagi qulaylik!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5"><strong>Odamlar nima deyishmoqda ...</strong></h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-1.jpg">
                        <h5>Asal</h5>
                        <p class="font-weight-light mb-0">"Bu juda ajoyib! Rahmat bolalar!"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-2.jpg">
                        <h5>Bekzod</h5>
                        <p class="font-weight-light mb-0">"Sizning saytlaringiz ajoyib. Men undan juda ko'p tadbirkorlarga o'z bizneslarini boshlashlarini maslahat berardim! "</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mx-auto testimonial-item mb-5 mb-lg-0"><img class="rounded-circle img-fluid mb-3" src="assets/img/testimonials-3.jpg">
                        <h5>Zarina</h5>
                        <p class="font-weight-light mb-0">"Ushbu manbalarni bizga taqdim etganingiz uchun katta rahmat!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- CONTENT END -->
<?php include 'loyauts/footer.php' ?>