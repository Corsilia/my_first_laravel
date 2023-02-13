@extends('shopping.template')
    @section('pageTitle')
    購物車-寄送與付款
    @endsection
    @section('css')
    <!-- 共用的header與footer的css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/header_and_footer.css')}}">
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/checkout2.css')}}">
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
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">3</div>
                        <span>填寫資料</span>
                        <div class="progress_line">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">4</div>
                        <span>完成訂購</span>
                    </div>
                </div>
                <!-- 放新程式碼 -->
                <div class="pay_way_group">
                    <h2>付款方式</h2>
                    <div class="pay_ways">
                        <div class="pay_way">
                            <input type="radio" id="credit_card" name="pay">
                            <label for="credit_card">信用卡付款</label>
                        </div>
                        <div class="pay_way">
                            <input type="radio" id="atm" name="pay">
                            <label for="atm">網路 ATM</label>
                        </div>
                        <div class="pay_way">
                            <input type="radio" id="supermarket" name="pay">
                            <label for="supermarket">超商代碼</label>
                        </div>
                    </div>
                </div>
                <div class="transport_way_group">
                    <h2>運送方式</h2>
                    <div class="transport_ways">
                        <div class="transport_way">
                            <input type="radio" id="black_cat">
                            <label for="black_cat">黑貓宅配</label>
                        </div>
                        <div class="transport_way">
                            <input type="radio" id="market_to_market">
                            <label for="market_to_market">超商店到店</label>
                        </div>
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
                <a href="/checkout1">
                    <button type="button" class="btn btn-outline-primary py-sm-2 px-sm-5">上一步</button>
                </a>
                <a href="/checkout3">
                    <button type="button" class="btn btn-primary py-sm-2 px-sm-5">下一步</button>
                </a>
            </div>
        </section>
    @endsection
