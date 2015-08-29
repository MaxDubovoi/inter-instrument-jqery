<?
switch($_SESSION['section'])
{
    case 'aboutCompany':
        $left_menu = array('name'=>array('history','aim','vacancy','partner'),
                            'text'=>array('История','Миссия и цели','Вакансии','Партнеры') );
        break;
    case 'products':
        $left_menu = array('name'=>array('equipment','tool','snap-in'),
            'text'=>array('Оборудование','Инструмент','Оснастка') );
        break;
    case 'services':
        $left_menu = array('name'=>array('engineering','manufacture','maintenance'),
            'text'=>array('Проектирование','Изготовление','Сопровождение') );
        break;
    case 'production':
        $left_menu = array('name'=>array('technology','production','service'),
            'text'=>array('Технологии','Производство','Сервис') );
        break;
    case 'contacts':
        $left_menu = null;
        break;


}
?>
<div class="fixed-content left-side">
    <div class="navigation-page">
        <?for($i=0;$i < count($left_menu['name']);$i++)
            {
        if ($_SESSION['page'] == $left_menu['name'][$i]):

            echo ("<a class='link side-bar-active' ><span>".$left_menu['text'][$i]."</span><i class='icon-arr'></i></a>");
       else:
           echo (
               "<a class='link' href='/index.php?page=".$left_menu['name'][$i]."'>
                    <span>".$left_menu['text'][$i]."</span><i class='icon-arr'></i>
                    </a>");
        endif;

            }
        ?>
    </div>
    <div class="address">
        <p>49019, г. Днепропетровск,<br>
            ул. Ударников, 30 <br>
            Факс: +38 (056)374-99-14 <br>
            Тел.: +38 (056) 374-99-10, <br>
            +38 (056) 374-99-11,<br>
            +38 (056) 374-99-12.  </p>
        <a href="/index.php?page=contacts"><i class="icon address-arrow"></i></a>
    </div>
</div>