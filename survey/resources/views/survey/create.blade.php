@extends('layouts.app')

@section('title','Survey')

@section('content')

<!-- Page Content -->
<div class="container mt-5 p-lg-5 bg-light">

@if (session('mssg'))
    <div class="alert alert-success">
        {{ session('mssg') }}
    </div>
@endif


    <form action="/create" method="post"><!--***** web上path action="/survey/create" *****--->
    @csrf
        <!--氏名-->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="name">氏名</label>
                @error('name')
                <span>{{ $message }}</span>
                @enderror
                <input type="text" class="form-control" name="name" placeholder="氏名" value="{{ old('name') }}">
            </div>
        </div>
        <!--/氏名-->

        <!--Eメール-->
        <!-- <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Eメール</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Eメール">
            </div>
        </div> -->
        <!--/Eメール-->

        <!--パスワード-->
        <!-- <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">パスワード</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="パスワード">
                <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
            </div>
        </div> -->
        <!--/パスワード-->

        <!--住所-->
        <!-- <div class="form-row">
            <div class="col-md-3 mb-3">
                <label for="inputAddress01">郵便番号</label>
                <input type="text" class="form-control" id="inputAddress01" placeholder="郵便番号">
            </div>
            <div class="col-md-3 mb-3">
                <label for="inputAddress02">都道府県</label>
                <select class="custom-select" id="inputAddress02">
                    <option disabled value="">選択...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="inputAddress03">住所</label>
                <input type="text" class="form-control" id="inputAddress03" placeholder="住所">
            </div>
        </div>  -->
        <!--/住所-->


        <!--年齢-->
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <!-- <div class="col-md-3 mb-3"> -->
                    <label for='age'>年齢</label>
                    @error('age')
                    <span>{{ $message }}</span>
                    @enderror
                        <select class="custom-select" name="age" >
                        <option selected disabled value="">選択...</option>
                        <option value="20歳未満">20歳未満</option>
                        <option value="20歳〜39歳">20歳〜39歳</option>
                        <option value="40歳〜59歳">40歳〜59歳</option>
                        <option value="60歳以上">60歳以上</option>
                    </select>
                <!-- </div> -->
             </div>
        </div>
        
        <!--性別-->
        <div class="form-group">
            <div class="row">
                <div class="col-sm-10">
                    <label for="gender">性別</label>
                    <!-- <legend class="col-form-label col-sm-2 pt-0">性別</legend> -->
                    @error('gender')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-sm-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="女性" id="customRadioInline1" name="gender" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">女性</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" value="男性" id="customRadioInline2" name="gender"class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">男性</label>
                    </div>
                </div>
            </div>
        </div>
        <!--/性別-->

        <!--物件-->
        <div class="form-group row">
            <div class="col-sm-10">
                 <!-- <div class="col-md-3 mb-3">希望物件種別</div> -->
                <label for="type">希望物件種別</label>
                @error('type')
                     <span>{{ $message }}</span>
                 @enderror
            </div> 
            <div class="col-sm-10">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="type[]" value="新築一戸建て">
                    <label class="custom-control-label" for="customCheck1">新築一戸建て</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="type[]" value="中古一戸建て">
                    <label class="custom-control-label" for="customCheck2">中古一戸建て</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="type[]" value="マンション">
                    <label class="custom-control-label" for="customCheck3">マンション</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck4" name="type[]" value="土地">
                    <label class="custom-control-label" for="customCheck4">土地</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="customCheck5" name="type[]" value="その他">
                    <label class="custom-control-label" for="customCheck5">その他</label>
                </div>
            </div>
        </div>
        <!--/物件-->
        <!--備考欄-->
        <div class="form-group mb-3">
            <label for="Textarea">ご要望・ご質問</label>
            @error('comment')
                <span>{{ $message }}</span>
            @enderror
            <textarea class="form-control" id="Textarea" rows="5" name="comment" placeholder="その他ご要望をご入力ください">{{ old('comment') }}</textarea>
        </div>
        <!--/備考欄-->

        <!--ボタンブロック-->
        <div class="form-group row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block">送信</button>
            </div>
        </div>
        <!--/ボタンブロック-->

    </form>

</div><!-- /container -->
@endsection

@section('footer')
    <div class="footer"><p>Copyright 2021 kayanuma.</p></div>
@endsection