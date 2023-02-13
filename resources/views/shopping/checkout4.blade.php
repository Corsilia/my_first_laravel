@extends('shopping.template')
    @section('pageTitle')
    購物車-訂單完成
    @endsection
    @section('css')
    <!-- 共用的header與footer的css -->
    <link rel="stylesheet" href="{{asset('css/header_and_footer.css')}}">
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('css/checkout4.css')}}">
    @endsection
    @section('main')
        <section>
            <h1>購物車</h1>
            <div class="content">
                <div class="process">
                    <div class="process_project">
                        <div class="round_project">1</div>
                        <span>確認購物車</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">2</div>
                        <span>付款與運送方式</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">3</div>
                        <span>填寫資料</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">4</div>
                        <span>完成訂購</span>
                    </div>
                </div>
                <!-- 放新程式碼 -->
                <h1>訂單成立</h1>
                <div class="list">
                    <h2>訂單明細</h2>
                    <div class="list_project">
                        <div class="project_information">
                            <img src="{{asset('img/bs_img/EEguU02.jpg')}}" alt="">
                            <div class="produce">
                                <span class="produce_name">Chicken momo</span>
                                <span class="produce_number">#41551</span>
                            </div>
                        </div >
                        <div class="input_box">
                            <div class="produce_quantity">
                                x1
                            </div>
                            <div class="produce_price">
                                $10.50
                            </div>
                        </div>
                    </div>
                    <div class="list_project">
                        <div class="project_information">
                            <img src="{{asset('img/bs_img/Uv2Yqzo.jpg')}}" alt="">
                            <div class="produce">
                                <span class="produce_name">Spicy Mexican potatoes</span>
                                <span class="produce_number">#66999</span>
                            </div>
                        </div >
                        <div class="input_box">
                            <div class="produce_quantity">
                                x1
                            </div>
                            <div class="produce_price">
                                $10.50
                            </div>
                        </div>
                    </div>
                    <div class="list_project">
                        <div class="project_information">
                            <img src="{{asset('img/bs_img/xbTAITF.jpg')}}" alt="">
                            <div class="produce">
                                <span class="produce_name">Breakfast</span>
                                <span class="produce_number">#86577</span>
                            </div>
                        </div >
                        <div class="input_box">
                            <div class="produce_quantity">
                                x1
                            </div>
                            <div class="produce_price">
                                $10.50
                            </div>
                        </div>
                    </div>
                </div>
                <div class="transport_information">
                    <h2>寄送資料</h2>
                    <div class="information_row">
                        <h3>姓名</h3>
                        <span>王小明</span>
                    </div>
                    <div class="information_row">
                        <h3>電話</h3>
                        <span>0912345678</span>
                    </div>
                    <div class="information_row">
                        <h3>Email</h3>
                        <span>abc123@gmail.com</span>
                    </div>
                    <div class="information_row">
                        <h3>地址</h3>
                        <span>409 台中市小鎮村英雄路1號</span>
                    </div>
                </div>
                <div class="price_box">
                    <div class="quanity">
                        <span class="text">數量:</span>
                        <span class="price">3</span>
                    </div>
                    <div class="subtotal">
                        <span class="text">小計:</span>
                        <span class="price">$24.90</span>
                    </div>
                    <div class="freight">
                        <span class="text">運費:</span>
                        <span class="price">$24.90</span>
                    </div>
                    <div class="total">
                        <span class="text">總計:</span>
                        <span class="price">$24.90</span>
                    </div>
                </div>
            </div>
            <div class="control">
                <a href="/shopping">
                    <button type="button" class="btn btn-primary py-sm-2 px-sm-5">返回首頁</button>
                </a>
            </div>
        </section>
    @endsection

