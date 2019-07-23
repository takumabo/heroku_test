<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>自己紹介サイト</title>
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
<link rel="stylesheet" href="css/style_v.css" media="screen" />
</head>
<body>
<!-- ヘッダー部分 -->
<header>
  <div class="header hidden" id="header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><h1>Introduce</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span id="top-btn" class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="display: inline-block;"><h3>About</h3></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="display: inline-block;"><h3>Works</h3></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="display: inline-block;"><h3>Profile</h3></a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</header>
<!-- ヘッダー部分終わり -->

<!-- トップスライダー部分 -->
<div class="bd-example top-slider">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide0.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide4.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <div class="top-color">
    <div class="top-word">
    <h1>KEEP MY MIND</h1>
    <h2>実現まで諦めない</h2>
    </div>
  </div>
<!-- トップスライダー部分終わり -->

<!-- オススメ部分 -->
<div class="container">
    <div class="reco-top eee">
      <h1> The best points </h1>
      <h2>オススメスキルとマインド</h2>
    </div>

</div>
<!-- オススメ部分終わり -->

<!-- 仕事部分 -->
<div class="container">
    <div class="reco-top">
      <h1> Works </h1>
      <h2>技術紹介と作品一覧</h2>
    </div>
</div>
<div class="card-deck">
  <div class="card">
    <div class="imgWrap">
      <div class="imgEff">
        <img src="img/top1.jpeg" class="card-img-top scale-img" alt="...">
      </div>
  </div>
    <div class="card-body" style="background-color:#222;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="imgWrap">
      <div class="imgEff">
        <img src="img/top1.jpeg" class="card-img-top scale-img" alt="...">
      </div>
  </div>
    <div class="card-body" style="background-color:#222;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <div class="imgWrap">
      <div class="imgEff">
        <img src="img/top1.jpeg" class="card-img-top scale-img" alt="...">
      </div>
    </div>
    <div class="card-body" style="background-color:#222;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<!-- 仕事部分終わり -->

<!-- プロファイル部分 -->
<div class="container">
    <div class="reco-top">
      <h1> Profile </h1>
      <h2>私の経歴を紹介</h2>
    </div>

     <div id="timeline">
    <ul id="dates">
      <li><a href="#1994" class="selected">1994</a></li>
      <li><a href="#2003">2003</a></li>
      <li><a href="#2006">2006</a></li>
      <li><a href="#2009">2009</a></li>
      <li><a href="#2012">2012</a></li>
      <li><a href="#2014">2014</a></li>
      <li><a href="#2016">2016</a></li>
      <li><a href="#2019">2019</a></li>
    </ul>
    <ul id="issues">
      <li id="1994" class="selected">
        <img src="img/pro1.jpg" width="280" height="200" />
        <h1>1994</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2003">
        <img src="img/pro2.jpg" width="280" height="200" />
        <h1>2003</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2006">
        <img src="img/pro3.jpg" width="280" height="200" />
        <h1>2006</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2009">
        <img src="img/pro4.jpg" width="280" height="200" />
        <h1>2009</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2012">
        <img src="img/pro5.jpg" width="280" height="200" />
        <h1>2012</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2014">
        <img src="img/pro6.jpg" width="280" height="200" />
        <h1>2014</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2016">
        <img src="img/pro7.jpg" width="280" height="200" />
        <h1>2016</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
      <li id="2019">
        <img src="img/pro8.jpg" width="280" height="200" />
        <h1>2019</h1>
        <p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
      </li>
    </ul>
    <div id="grad_top"></div>
    <div id="grad_bottom"></div>
    <a href="#" id="next">+</a>
    <a href="#" id="prev">-</a>
  </div>
</div>
<!-- プロファイル部分終わり -->

<!-- よくある質問部分 -->
<div class="container">
    <div class="reco-top">
      <h1> 私によくあるQ & A </h1>
    </div>
</div>
<!-- よくある質問部分終わり -->

<!-- コンタクト部分 -->
<div class="container">
    <div class="reco-top">
      <h1> Contact form </h1>
    </div>

    <form>
       <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-1 col-form-label">Email</label>
        <div class="col-sm-11">
          <input type="email" class="form-control" id="colFormLabel" placeholder="xxxxxxx@ooooo">
        </div>
      </div>
      <div class="mb-3">
        <label for="validationTextarea">Textarea</label>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
        <div class="invalid-feedback">
          Please enter a message in the textarea.
        </div>
      </div>
      <div class="send">
      <button id="btn" class="btn-primary" type="submit">Send Your Info</button>
      </div>
    </form>
</div>
<!-- コンタクト部分終わり -->

<!-- フッター部分 -->
<footer>
  <p>(c) TAKUMA BO </p>
</footer>
<!-- フッター部分終わり -->

<!-- スクリプト部分 -->
<script type="text/javascript" src="js/app.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> 
  <script type="text/javascript" src="js/slick.min.js"></script>
  <script type="text/javascript" src="js/slick.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="js/jquery.timelinr-0.9.7.js"></script>
  <script>
    $(function(){
      $().timelinr({
        orientation:  'vertical',
        issuesSpeed:  300,
        datesSpeed:   100,
        arrowKeys:    'true',
        startAt:      3
      })
    });
  </script>
<!-- スクリプト終わり -->
</body>
</html>