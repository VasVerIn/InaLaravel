<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КОННЫЙ КЛУБ МАКЕТ</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
<body>    
        <header class="header">
        <div class="container">
            <div class="header_wrap">
                <div class="Logo">
                    <a href="home">Конный клуб МАКЕТ</a>
                </div>
                <div class="icon"><i class="fa-solid fa-horse-head"></i></div>
                <nav class="navigation">
                    <ul class="navigation_list">
                        <li class="navigation_list_item">
                        <a href="home">Главная</a>
                        </li>
                        <li class="navigation_list_item">
                            <a href="about">О нас</a>
                            </li>
                            <li class="navigation_list_item">
                                <a href="treners">Для Вас</a>
                                </li>
                            <li class="navigation_list_item">
                            <a href="tarifs">Тарифы</a>
                            </li>
                            <li class="navigation_list_item">
                            <a href="enter">Вход</a>
                            </li>
                                    
                                    <div class="dropdown">
                                        <button class="dropbtn">
                                                <i class="fa-fa-caret-down"></i>
                                            </button>
                                            <div class="dropdown-content"> 
                                                <a href="#offer_title">Директор</a>
                                                <a href="#offer_title">Тренер</a>
                                                <a href="#offer_title">Конюшня</a>
                                            </div>                                                                   
                    </ul>
                </nav> 
            </div>
        </div>
    </header>
    
        @yield('main_content')


        <footer class="footer">
            <div class="container">
                <div class="footer_wrap">
                        <div class="footer_wrap-adress">
                            <p>Наш адрес: 220000 г.п.Колодищи, ул.Красивая, 77</p>
                            <p>E-mail:crypto@cryptocurrency.by</p>
                        </div>
                        <div class="footer_social">
                            <i class="fa-brands fa-telegram"></i>
                            <i class="fa-brands fa-viber"></i>
                            <i class="fa-brands fa-skype"></i>        
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-vk"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-square-youtube"></i>
                       </div>
                       <div class="footer_wrap-telephone">
                        <p>Наши телефоны:</p>
                        <p>+375440000000(А1)</p>
                        <p>+375250000000(МТС)</p>
                        <p>+375240000000(Life)</p>
                    </div>
                </div>            
            </div>
        </footer>       
</body>
</html>