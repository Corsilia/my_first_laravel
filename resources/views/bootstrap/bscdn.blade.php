@extends('bootstrap.template')

    @section('pageTitle')
        莫班寵物
    @endsection

    @section('pageMain')
        <section id="content">
            <div class="container-fluid">
                <div class="row">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{asset('img/images/b1.jpg')}}" class="d-block w-100" alt="img01">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>事項宣導</h5>
                                    <p>領養代替購買，貓貓是世界上最可愛的動物，請好好照顧他們</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/images/b2.jpg')}}" class="d-block w-100" alt="img04">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>好康消息</h5>
                                    <p>現在也能領養到石虎風味的貓貓了</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/images/b3.jpg')}}" class="d-block w-100" alt="img06">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>最新活動</h5>
                                    <p>即日起將黑貓帶來洗澡就能洗成白貓</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{asset('img/images/b4.jpg')}}" class="d-block w-100" alt="b4">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>購買商品</h5>
                                    <p>買？不買？小孩才做選擇</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div>
                    <button type="button" class="btn btn-success dog"><img src="{{asset('img/images/dog.png')}}" alt="">狗狗專區&nbsp;</button>
                    <button type="button" class="btn btn-info">&nbsp;貓貓專區<img src="{{asset('img/images/cat.png')}}" alt=""></button>
                </div>
                <hr>
                <div class="but5">
                    <button type="button" class="btn"><img src="{{asset('img/images/blow.png')}}" alt="">
                        <p>飼料</p>
                    </button>
                    <button type="button" class="btn"><img src="{{asset('img/images/can.png')}}" alt="">
                        <p>罐頭</p>
                    </button>
                    <button type="button" class="btn"><img src="{{asset('img/images/pa.png')}}" alt="">
                        <p>保健</p>
                    </button>
                    <button type="button" class="btn"><img src="{{asset('img/images/food.png')}}" alt="">
                        <p>零食</p>
                    </button>
                    <button type="button" class="btn"><img src="{{asset('img/images/house.png')}}" alt="">
                        <p>生活用品</p>
                    </button>
                </div>
                <hr>
                <div class="shop">
                    <h3>新品上市</h3>
                    <img src="{{asset('img/images/b.jpg')}}" alt="">
                    <p></p>
                    <h3>飼料介紹</h3>
                    <img src="{{asset('img/images/c.jpg')}}" alt="">
                    <p></p>
                    <h3>品質把關</h3>
                    <img src="{{asset('img/images/d.jpg')}}" alt="">
                </div>
                <hr>
                <div class="video-background">
                    <h3>健康的貓貓食物</h3>
                    <video width="100%" src="{{asset('img/images/catfood.mp4')}}" muted autoplay loop playsinline controls></video>
                </div>
                <hr>
            </div>
        </section>
        <section id="guess">
            <div class="container text-center">
                <div class="row">
                    <div class="col-xl-12">
                        <h2>熱門商品</h2>
                    </div>
                </div>
                <div class="row">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s1.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>有點好吃貓貓飼料</p>
                                            <p>NT$500</p>
                                            <button type="button" class="btn btn-info">贊助我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s2.webp')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>應該好吃貓貓飼料</p>
                                            <p>NT$560</p>
                                            <button type="button" class="btn btn-success">金援我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s3.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>似乎好吃貓貓飼料</p>
                                            <p>NT$600</p>
                                            <button type="button" class="btn btn-warning">支持我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s4.webp')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>覺得好吃貓貓飼料</p>
                                            <p>NT$800</p>
                                            <button type="button" class="btn btn-primary">幫助我們</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s5.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>有點好吃狗狗飼料</p>
                                            <p>NT$700</p>
                                            <button type="button" class="btn btn-info">贊助我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s6.webp')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>不錯好吃狗狗飼料</p>
                                            <p>NT$500</p>
                                            <button type="button" class="btn btn-success">金援我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s7.png')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>可以好吃狗狗飼料</p>
                                            <p>NT$900</p>
                                            <button type="button" class="btn btn-warning">支持我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s8.webp')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>絕對好吃狗狗飼料</p>
                                            <p>NT$860</p>
                                            <button type="button" class="btn btn-primary">幫助我們</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s9.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>衝吧！貓貓玩具</p>
                                            <p>NT$200</p>
                                            <button type="button" class="btn btn-info">贊助我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s10.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>上吧！逗貓貓棒</p>
                                            <p>NT$100</p>
                                            <button type="button" class="btn btn-success">金援我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s11.jpg')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>咬吧！狗狗玩具</p>
                                            <p>NT$200</p>
                                            <button type="button" class="btn btn-warning">支持我們</button>
                                        </div>
                                    </div>
                                    <div class="card col-md-3">
                                        <img src="{{asset('img/images/s12.webp')}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <p>摧毀吧！狗狗玩具</p>
                                            <p>NT$300</p>
                                            <button type="button" class="btn btn-primary">幫助我們</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    @endsection
