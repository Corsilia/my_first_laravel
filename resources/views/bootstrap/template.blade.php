<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>

        @yield('pageTitle')

    </title>

    {{-- 共通css --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap-4.6.2-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{asset('css/bscdn.css')}}">
    <link rel="shortcut icon" href="{{asset('img/images/fovicon.ico')}}" type="image/x-icon">

    {{-- 各頁面專屬css --}}
</head>

<body>
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#"><img src="{{asset('img/images/a2.png')}}" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/bs_about">關於墨班<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">最新消息</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            貓貓專區
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">貓貓飼料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">貓貓罐頭</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">貓貓保健</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">貓貓零食</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">貓貓用品</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            狗狗專區
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">狗狗飼料</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">狗狗罐頭</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">狗狗保健</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">狗狗零食</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">狗狗用品</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">寵物學堂</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">關於我們</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mx-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    <button class="" type="button">
                        <i class="far fa-solid fa-heart"></i>
                    </button>
                    <button class="" type="button">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="" type="button">
                        <i class="far fa-user"></i>
                    </button>
                </form>
            </div>
        </nav>
    </section>
    <main>
        @yield('pageMain')
    </main>
    <hr>
    <div class="hend"><img src="{{asset('img/images/aaa.png')}}" alt=""></div>
    <section id="contact">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-2">
                    <h4>關於莫班</h4>
                    <p>最早由一群愛貓人士所創立，為的是流浪動物有個溫飽及棲身之所，後來經由許多愛爸愛媽支持，逐漸能夠公益化</p>
                </div>
                <div class="col-sm-2">
                    <h4>購買相關</h4>
                    <a href="#">會員專區</a><br>
                    <a href="#">訂單查詢</a><br>
                    <a href="#">實體店面</a><br>
                </div>
                <div class="col-sm-2">
                    <h4>問與答</h4>
                    <a href="#">訂購專區</a><br>
                    <a href="#">付款專區</a><br>
                    <a href="#">貨運專區</a><br>
                    <a href="#">退換專區</a><br>
                </div>
                <div class="col-sm-3">
                    <h4>訂閱電子報</h4>
                    <form action="" method="post">
                        <div class="inpu"><input type="text" size="20"><br><button type="submit"
                                class="btn btn-danger">訂閱</button></div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <h4>聯絡我們</h4>
                    <i class="fab fa-facebook-square fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                    <i class="fas fa-envelope fa-2x"></i>
                    <i class="fab fa-line fa-2x"></i>
                    <p>營業時間：周一至周五上午9點至下午5點整<br>
                        電話：04-2255666777<br>
                        Email:moben@gmail</p>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <h5>莫班寵物工坊 地址：台中市西屯區五百零二號 須付費電話：04-2255666777 </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    momobenben &copy; , ALL RIGHT RESERED.
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    {{-- 頁面共通Js --}}
    <script src="{{asset('jquery.min.js')}}"></script>
    <script src="{{asset('css/bootstrap-4.6.2-dist/js/bootstrap.bundle.js')}}"></script>
    {{-- 各頁面專用Js --}}
</body>

</html>
</body>

</html>
