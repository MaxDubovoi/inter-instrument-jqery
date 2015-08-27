<?
session_start();


?>
<div class="content">
    <a class="logo-link" href=""><img src="images/logo.png" alt=""></a>
 <img class='central-photo' src='images/photo-<?echo $_SESSION['section']?>.jpg' alt=''>
</div>
<div class="fixed-content navigation-holder">
    <div class="navigation-site">
        <a href="/">О компании</a>
        <a href="/index.php?page=equipment">Продукция</a>
        <a href="/index.php?page=engineering">Услуги</a>
        <a href="/index.php?page=technology">Производство</a>
        <a href="/index.php?page=contacts">Контакты</a>
    </div>
</div>
