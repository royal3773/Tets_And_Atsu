<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="{{ mix('/js/app.js') }}"></script>
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/top.css') }}" rel="stylesheet">
  <style>

  </style>
</head>

<ul class="nav nav-pills nav-justified">
  <li class="nav-item border border-secondary">
    <a class="nav-link" aria-current="page" href="#">TOP Page</a>
  </li>
  <li class="nav-item border border-secondary">
    <a class="nav-link" href="#">Chess Page</a>
  </li>
  <li class="nav-item border border-secondary">
    <a class="nav-link" href="#">Information</a>
  </li>
  <li class="nav-item dropdown border border-secondary">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Introduction</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">ATSUSHI FURUKAWA</a></li>
      <li><a class="dropdown-item" href="#">TETSUYA MATSUMOTO</a></li>
    </ul>
  </li>
</ul>
<!-- <body class="container-fluid">
        <ul class="mt-2">
          <li><a href="">トップページ</a></li>
          <li><a href="">チェス紹介ページ</a></li>
          <li><a href="">お問い合わせ</a></li>
          <li><a href="">個人ページ(TETSUYA)</a></li>
          <li><a href="">個人ページ(ATSUSHI)</a></li>
        </ul>
</div> -->

<div class="top">
<div class="img_block">
<img src="{{ asset('image/chess_top.jpg') }}">
</div>
<h1>chess is simple best</h1>
</div>

<div class="contents">

  <div class="item1">
        <h3 class=""><span>チェスの歴史について</span></h3>
         <p class="itemtext"><span>texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</span></p>
    <div class="image1">
      <img src="{{ asset('image\knight.jpg') }}" alt="騎士の写真">
    </div>
   </div>
  <div class="item2">
        <h3 class=""><span>チェスの歴史について</span></h3>
         <p class="itemtext"><span>texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</span></p>
    <div class="image2">
      <img src="{{ asset('image\knight.jpg') }}" alt="騎士の写真">
    </div>
   </div>
  <div class="item3">
        <h3 class=""><span>チェスの歴史について</span></h3>
         <p class="itemtext"><span>texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext</span></p>
    <div class="image3">
      <img src="{{ asset('image\knight.jpg') }}" alt="騎士の写真">
    </div>
   </div>


</body>
</html>