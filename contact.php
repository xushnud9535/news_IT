<?php include 'loyauts/header.php';
include 'app/cre_contact.php'; ?>
<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Bog'lanish</h2>
        <div class="form-group"><input class="form-control" type="ism" name="ism" placeholder="Ism"></div>
        <div class="form-group"><input class="form-control" type="tel" name="tel" placeholder="Telefon"></div>
        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Pochta"><small class="form-text text-danger">Please enter a correct email address.</small></div>
        <div class="form-group"><textarea class="form-control" name="xabar" placeholder="Xabar" rows="14"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">Jo'natish</button></div>
    </form>
</div>
<?php  include'loyauts/footer.php' ?>
