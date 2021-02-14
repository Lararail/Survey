@extends('layouts.app')

@section('title','Show')

@section('content')
            {{--@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
 
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif--}}
<div class="form-row">
    <div class="container mt-5 p-lg-5 bg-light detail-height">
        <h1 class="title">詳細</h1>
        <p class="name">名前 - {{ $survey -> name }}</p><hr>
        <p class="age">年齢 - {{ $survey -> age }}</p><hr>
        <p class="gender">性別 - {{ $survey -> gender }}</p><hr>
        <p class="type">希望物件種別</p>
        <ul>
             @foreach($survey->type as $type)
                <li>{{ $type }}</li>
             @endforeach
        </ul>
        <hr>
        <p class="comment">ご要望・ご質問 - {{ $survey -> comment }} </p><hr>
        
        <a href="{{ url('/show') }}" class="back"><- アンケート一覧に戻る</a>
    </div>
</div>

    

@endsection

@section('footer')
    <div class="footer"><p>Copyright 2021 kayanuma.</p></div>
@endsection
