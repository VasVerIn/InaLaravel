@extends('layout')

@section('main_content')
    <section class="registration">
            <div class="container">
                <div class="wrap">
                    <div class="login-wrap">
                        <div class="login-html">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Войти</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Зарегистрироваться</label>
                            <div class="login-form">
                                <div class="sign-in-htm">
                                    <div class="group">
                                        <label for="user" class="label">ИМЯ</label>
                                        <input id="user" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">ПАРОЛЬ</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input id="check" type="checkbox" class="check" checked>
                                        <label for="check"><span class="icon"></span>Запомнить меня на этом устройстве</label>
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Войти">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Забыли пароль?</a>
                                    </div>
                                </div>
                                <div class="sign-up-htm">
                                    <div class="group">
                                        <label for="user" class="label">ИМЯ</label>
                                        <input id="user" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">ПАРОЛЬ</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Повторите пароль</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Email адрес</label>
                                        <input id="pass" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Зарегистрироваться">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label for="tab-1">Уже зарегистрированы?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
    </section>
@endsection    