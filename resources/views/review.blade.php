@extends('layout')

@section('main_content')
    <h1>Форма добавления отзыва</h1>
    
    @if ($errors->any())
        <div class="alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif




    <form method="post" action="/review/check">
        @csrf
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br><br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br><br>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br><br>
        <button type="submit" class="btn-success">Отправить</button>
    </form>
    <br>
    <hr>
    <br>
    <h1>Все отзывы</h1>
    @foreach ($reviews as $el)
        <div class = "alert warning">
            <h3>{{ $el->subject }}</h3>
            <b>{{ $el->email }}</b>
            <p>{{ $el->message }}</p>
        </div>
        
    @endforeach

@endsection