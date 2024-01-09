@extends('layout')

@section('main_content')
    <section class="abought">
            <div class="container">
                <div class="abought_wrap">                
                    <div class="abought_wrap-img"> 
                        <img src="img/helena-lopes-lIeqGEdvex0-unsplash.jpg">
                    </div>
                 <div>
                    <div class="abought_wrap-text"> 
                        <h2 class="title" id="abought_title">о нас</h2>
                     <div class="abought_wrap-discription">
                        <p>
                            Приятная атмосфера, выбор лошадей, опытные тренеры.
                        </p>
                         <p>
                            Не знаешь, чем заполнить свободное время? Проведи его с пользой, отдохни телом и душой!
                        </p>
                        <p>
                            В нашем клубе каждый найдет для себя то, что ищет. Общение, успокоение, приятное времяпрепровождение...
                        </p>
                     </div>
            <a href="#">Посмотри фильм о клубе</a>
        </div>
    </section> 
    <section class="about">
        <div class="container">
            <div class="about_wrap">
                <div class="about_wrap-video">
                    <iframe
                        width="560" height="315"
                        src="https://www.youtube.com/embed/SD8gd841ElQ"
                        title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
                <div class="about_wrap-text">
                    <h3 class="title" id="about_title"> Конный клуб МАКЕТ еще и заводчик</h3>
                    <div class="about_wrap-description">
                    <p>За прошлый год родилось шесть жеребят</p>
                    <p>Конный клуб МАКЕТ занимается обучением не только всадников, но и лошадей</p>
                    <p>Покупайте у нас обученных лошадей</p>
                    </div>
                    <a href="#">Узнать подробнее</a>
                </div>                
            </div>
        </div>
    </section>   
@endsection    