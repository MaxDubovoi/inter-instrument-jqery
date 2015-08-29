<?
session_start();


?>
<div class="content">
    <a class="logo-link" href=""><img src="images/logo.png" alt=""></a>
 <img class='central-photo' src='images/photo-<?echo $_SESSION['section']?>.jpg' alt=''>
</div>
<div class="fixed-content navigation-holder">
    <div class="navigation-site">
        <?php if ($_SESSION['section'] == "aboutCompany"): ?>
            <span class="gradient" >О компании</span>
        <?php else: ?>
            <a href="/">О компании</a>
        <?php endif; ?>

        <?php if ($_SESSION['section'] == "products"): ?>
            <span  class="gradient">Продукция</span>
        <?php else: ?>
            <a  class="gradient" href="/index.php?page=equipment">Продукция</a>
        <?php endif; ?>

        <?php if ($_SESSION['section'] == "services"): ?>
            <span class="gradient">Услуги</span>
        <?php else: ?>
            <a class="gradient"  href="/index.php?page=engineering">Услуги</a>
        <?php endif; ?>

        <?php if ($_SESSION['section'] == "production"): ?>
            <span class="gradient">Производство</span>
        <?php else: ?>
            <a class="gradient"  href="/index.php?page=technology">Производство</a>
        <?php endif; ?>

        <?php if ($_SESSION['section'] == "contacts"): ?>
            <span class="gradient">Контакты</span>
        <?php else: ?>
            <a class="gradient"  href="/index.php?page=contacts">Контакты</a>
        <?php endif; ?>
    </div>
</div>