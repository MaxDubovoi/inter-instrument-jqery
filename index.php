<?php

    session_start();
    if(!isset($_GET['page']))
    {
        $_SESSION['page']='history';
    }
    else{
        $_SESSION['page']=addslashes(strip_tags(trim($_GET['page'])));
    }
switch ($_SESSION['page']){
    case 'history':
    case 'aim':
    case 'vacancy':
    case 'partner':
        $title = 'О компании';
        $meta_d = 'О компании';
        $meta_kw = 'О компании';
        $_SESSION['section']='aboutCompany';
    break;
    case 'equipment':
    case 'snap-in':
    case 'tool':
        $title = 'Продукция';
        $meta_d = 'Продукция';
        $meta_kw = 'Продукция';
        $_SESSION['section']='products';
    break;
    case 'engineering':
    case 'maintenance':
    case 'manufacture':
        $title = 'Услуги';
        $meta_d = 'Услуги';
        $meta_kw = 'Услуги';
        $_SESSION['section']='services';
        break;
    case 'production':
    case 'service':
    case 'technology':
        $title = 'Производство';
        $meta_d = 'Производство';
        $meta_kw = 'Производство';
        $_SESSION['section']='production';
        break;
    case 'contacts':
        $title = 'Контакты';
        $meta_d = 'Контакты';
        $meta_kw = 'Контакты';
        $_SESSION['section']='contacts';
        break;

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>Inter-instrument</title>
    <meta name="title" content="<? echo $title?>"/>
    <meta name="keywords" content="<? echo $meta_kw?>"/>
    <meta name="description" content="<? echo $meta_d?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:description" content=""/>
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <link rel="shortcut icon" href="http://intool.php/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="http://intool.php/favicon.ico" type="image/x-icon" />

    <!--[if lt IE 9]>
    <script src="js/libs/ie-html5tags.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if gte IE 9]>
    <style type="text/css">
    .gradient {
    filter: none;
    }
    </style>
    <![endif]-->
    <!--[if IE]>
    <style>
        @font-face {
            /* Book */
            font-family: 'MyriadPro';
            src: url('fonts/MyriadProRegular.eot?#iefix') format('☺');
            font-weight:  400;
            font-style:   normal;
            font-variant: normal;
            font-stretch: normal;
        }
    </style>
    <![endif]-->


    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />
    <link rel="stylesheet" href="css/main.css" type="text/css" media="screen, projection"/>

    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <script src="js/libs/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="js/libs/modernizr-2.6.2.min.js" type="text/javascript"></script>

    <script src="js/stickyMenu.js" type="text/javascript"></script>

</head>

<body>
<!-- BEGIN wrapper-->
<div class="wrapper">
    <div class="fixed-holder">
        <?php
        include('views/elements/_left-side.php');
        include('views/elements/_right-side.php');
        ?>
    </div>
    <div class="min-width">
        <div class="central">

            <?php
                include('views/elements/_header.php');
            ?>
        </div>
        <div class="site-content">
            <div>
                <?php
                    include('views/'.$_SESSION['section'].'/'.$_SESSION['page'].'.html');
                ?>
            </div>
        </div>
    </div>

</div>
<!-- END wrapper-->

<!-- BEGIN popups -->
<div class="popup_holder">
    <div class="dtable">
        <div class="dtcell">
            <div class="popup"> <!-- <div class="popup popup_name">
                        body of popup
                        usage:
                        buttons for open popup add attr: data-popup='popup_name' -->
            </div>
        </div>
        <i class="back" id="back"></i>
    </div>
</div>

<!-- END popups -->

</body>
</html>
