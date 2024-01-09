@extends('layout')

@section('main_content')
    <section class="offer">
            <div class="container">
                <div class="offer_wrap">
                    <div class="offer_wrap-img">
                        <img src="img/mona-eendra-sQwzWh0r94A-unsplash.jpg" alt="">
                    </div>
                    <div class="offer_wrap-text">
                        <h2 class="title" id="offer_title">Cпециальное предложение!</h2>
                    <div class="offer_wrap-description">
                        <p>При покупке годового абонемента:</p>
                        <p>Одно бесплатное занятие в месяц в течение года</p>
                    </div>
                    <a href="enter">Зарегистрироваться и получить бонус</a>
                    </div>                
                </div>
            </div>
    </section>

    <section class="grid_tarifs">
            <div class="grid-item">
                <div class="image">
                    <img src="img/jeff-dewitt-XLspHWmZz_c-unsplash.jpg" alt=""/> 
                </div>
                <div class="info">
                    <h2>СТАНДАРТНЫЙ</h2>
                    <div class="info-text">
                        <p>Платите за один месяц! </p>
                        <p>Стоимость 240 рублей</p>
                        <p>Восемь занятий в месяц</p>
                        <p>Время занятия 1 час</p>
                        <p>График по вашему выбору</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>      
            <div class="grid-item">
                <div class="image">
                    <img src="img/globe-city-guide-aw2X23xE_Xs-unsplash.jpg" alt=""/> 
                </div>
                <div class="info">
                    <h2>БАЗОВЫЙ</h2>
                    <div class="info-text">
                        <P>Платите за полгода!</P>
                        <p>Стоимость 1200 рублей</p>
                        <p>50 занятий</p>
                        <p>Время занятия 1 час</p>
                        <p>График по вашему выбору</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="image">
                    <img src="img/mikayla-storms-9h_bJdGqzCk-unsplash.jpg" alt=""/> 
                </div>
                <div class="info">
                    <h2>БЕЗЛИМИТНЫЙ</h2>
                    <div class="info-text">
                        <p>Стоимость 3000 рублей</p>
                        <p>Любое количество тренировок в течение года</p>
                        <p>В любое время</p>
                        <p>Персональный тренер</p>
                    </div>
                    <div class="button-wrap">
                        <a class="atuin-btn" href="#link">ПОДРОБНЕЕ</a>
                    </div>
                </div>
            </div>           
    </section>
@endsection    