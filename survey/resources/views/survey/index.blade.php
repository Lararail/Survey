@extends('layouts.app')

@section('title','Show')

@section('content')
          

<div class="container mt-5 p-lg-5 bg-light">


    <h1 class="title">アンケート一覧</h1>
    @foreach($surveys as $survey)
        <div class="list">
            <h4 class="d-inline txt1"><a href="{{ url('/show',$survey->id) }}">{{ $survey->name }}</a></h4>
            <p class="d-inline">- {{ $survey->created_at->format('Y年m月d日') }}</p>
            <button type="button" class="btn btn-outline-primary btn-left btn1"><a href="{{ url('/show',$survey->id) }}">詳細</a></button>
        </div>
        <hr>
    @endforeach
    {{ $surveys->appends(['sort'=>$sort])->links() }}  
    </div>
    
@endsection


@section('footer')
    <div class="footer"><p>Copyright 2021 kayanuma.</p></div>
@endsection
