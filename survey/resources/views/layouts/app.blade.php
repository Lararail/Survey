<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yeild('title')</title>

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!--Font Awesome5-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  
    <!--自作CSS -->
    <style type="text/css">
        /* A Modern CSS Reset */
        *,*::before,*::after{box-sizing:border-box;}
        body,h1,h2,h3,h4,p,figure,blockquote,dl,dd{margin:0;}
        ul[role="list"],ol[role="list"]{list-style:none;}
        li{list-style:none;}
        html:focus-within{scroll-behavior:smooth;}
        body{min-height:100vh;text-rendering:optimizeSpeed;line-height:1.5;}
        a{text-decoration: none;}
        img,picture{max-width:100%;display:block;}
        input,button,textarea,select{font:inherit;}
        @media(prefers-reduced-motion:reduce){html:focus-within{scroll-behavior:auto;}
        *,*::before,*::after{animation-duration:.01ms; !important;animation-iteration-count:1 !important;transition-duration:.01ms; !important;scroll-behavior:auto !important;}}
        span{
            color:red;
        }
        .wrapper{
            position:relative;
            min-height:100vh;
        }
        form{
            padding:20px;
        }
        footer{
            background-color:#ddd;
            padding:20px;
            position:absolute;
            bottom:0;
            width:100%;
        }
        .footer p{
            font-size:15px;
            color:gray;
            text-align:center;
        }
        .title{
            text-align:center;
            font-size:26px;
            padding:20px;
            color:gray;
        }
        .detail-height p{
            padding:1px;
        }
        .btn1 {
        float:right;
        }
        .txt1{
            font-size:16px;
        }
    </style>
</head>
<body>

<div class="wrapper">
<!-- Navigation -->
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
  <a href="{{ url('/create') }}">株式会社エクスクルーズ様　アンケート</a>
  </span>
</nav>


@yield('content')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>


<footer>
   @yield('footer')
</footer>
</div>
</body>
</html>
