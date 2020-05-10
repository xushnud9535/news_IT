<?php
    include 'app/search.php';
?>

<?php include 'loyauts/header.php' ?>
<h4>Qidiruv natijalari</h4>

<?php if (!isset($key)): ?>
    <div class="alert alert-danger text-center">
        Siz kalit yozmadingiz!
    </div>
<?php elseif (count($items) == 0): ?>
    <div class="alert alert-danger text-center">
        Natija topilmadi!
    </div>
<?php else: ?>
    <?php foreach ($items as $item): ?>
        <h3><?= $item['title'] ?></h3>
        <p><?= $item['short'] ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<html>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
</html><?php include 'loyauts/footer.php' ?>