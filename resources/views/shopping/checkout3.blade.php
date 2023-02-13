@extends('shopping.template')
    @section('pageTitle')
    購物車-確認資訊
    @endsection
    @section('css')
    <!-- 共用的header與footer的css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/header_and_footer.css')}}">
    <!-- My Css -->
    <link rel="stylesheet" href="{{asset('css/bs_css/checkout3.css')}}">
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
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="process_project">
                        <div class="round_project">4</div>
                        <span>完成訂購</span>
                    </div>
                </div>
                <div class="sand_information_group">
                    <h2>寄送資料</h2>
                    <div class="sand_information">
                        <div class="sand_row">
                            <label for="name_information" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="name_information" placeholder="王小明">
                        </div>
                        <div class="sand_row">
                            <label for="phone_number_information" class="form-label">電話</label>
                            <input type="text" class="form-control" id="phone_number_information" placeholder="0912345678">
                        </div>
                        <div class="sand_row">
                            <label for="email_information" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email_information" placeholder="abc123@gmail.com">
                        </div>
                        <div class="sand_row">
                            <label for="citi_information" class="form-label">城市</label>
                            <div class="citi_and_postal">
                                <input type="text" class="form-control" id="citi_information" placeholder="城市">
                                <input type="text" class="form-control" id="postal_code_information" placeholder="郵遞區號">
                            </div>
                            <input type="text" class="form-control" id="address_code_information" placeholder="地址">
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
                <a href="/checkout2">
                    <button type="button" class="btn btn-outline-primary py-sm-2 px-sm-5">上一步</button>
                </a>
                <a href="/checkout4">
                    <button type="button" class="btn btn-primary py-sm-2 px-sm-5">前往付款</button>
                </a>
            </div>
        </section>
    @endsection
