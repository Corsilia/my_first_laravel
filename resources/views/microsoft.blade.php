<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>假的</title>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('css/microsoft_index.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/microsoft_img/windows40x40.svg')}}" type="image/x-icon">
</head>
<body>
    <header>
        <nav>
            <input type="checkbox" id="list">
            <label for="list" tabindex="0"><div></div></label>
            <div class="links">
                <a href=""><div class="logo"></div></a>
                <a href=""><div class="link">Microsoft 365</div></a>
                <a href=""><div class="link">Teams</div></a>
                <a href=""><div class="link">Windows</div></a>
                <a href=""><div class="link">Surface</div></a>
                <input type="checkbox" id="more-btn">
                <label for="more-btn" tabindex="0">
                    <div class="link">
                        <span>更多</span>
                        <div class="more"></div>
                    </div>
                </label>
                <a href=""><div class="link">Xbox</div></a>
                <a href=""><div class="link">支援</div></a>
            </div>
            <div class="functions">
                <div class="all" tabindex="0">
                    <input type="checkbox" id="all-microsoft">
                    <label for="all-microsoft" tabindex="0">
                        <span>所有 Microsoft</span>
                        <div class="icon"></div>
                        <!-- <button type="button" class="mask"></button> -->
                    </label>
                    <div class="all-menu">
                        <ul>
                            <li>
                                <span>軟體</span>
                                <ul>
                                    <li><a href="">Windows 應用程式</a></li>
                                    <li><a href="">OneDrive</a></li>
                                    <li><a href="">Outlook</a></li>
                                    <li><a href="">Skype</a></li>
                                    <li><a href="">OneNote</a></li>
                                    <li><a href="">Microsoft Teams</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>個人電腦和設備</span>
                                <ul>
                                    <li><a href="">選購 Xbox</a></li>
                                    <li><a href="">電腦配件</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>娛樂</span>
                                <ul>
                                    <li><a href="">Xbox Game Pass Ultimate</a></li>
                                    <li><a href="">Xbox Live Gold</a></li>
                                    <li><a href="">Xbox 與遊戲</a></li>
                                    <li><a href="">電腦遊戲</a></li>
                                    <li><a href="">Windows 遊戲</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>商務適用</span>
                                <ul>
                                    <li><a href="">Microsoft Cloud</a></li>
                                    <li><a href="">Microsoft 安全性</a></li>
                                    <li><a href="">Azure</a></li>
                                    <li><a href="">Dynamics 365</a></li>
                                    <li><a href="">商務用 Microsoft 365</a></li>
                                    <li><a href="">Microsoft 產業</a></li>
                                    <li><a href="">Microsoft Power Platform</a></li>
                                    <li><a href="">Windows 365</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>開發人員與 IT</span>
                                <ul>
                                    <li><a href="">開發人員中心</a></li>
                                    <li><a href="">文件</a></li>
                                    <li><a href="">Microsoft Learn</a></li>
                                    <li><a href="">Microsoft 技術社群</a></li>
                                    <li><a href="">Azure Marketplace</a></li>
                                    <li><a href="">AppSource</a></li>
                                    <li><a href="">Visual Studio</a></li>
                                </ul>
                            </li>
                            <li>
                                <span>其他</span>
                                <ul>
                                    <li><a href="">Microsoft Rewards</a></li>
                                    <li><a href="">免費下載與安全性</a></li>
                                    <li><a href="">教育</a></li>
                                    <li><a href="">禮品卡</a></li>
                                    <li><a href="">Licensing</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="">
                                    <span>檢視網站地圖</span>
                                    <div class="icon-right"></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 不想改結構因為還要改css就先這樣了 -->
                <a href="">
                    <div class="function">
                        <span>搜尋</span>
                        <div class="icon search"></div>
                    </div>
                </a>
                <a href="">
                    <div class="function">
                        <span>購物車</span>
                        <div class="icon shopping"></div>
                    </div>
                </a>
                <a href="/">
                    <div class="function">
                        <span>登入</span>
                        <div class="icon login"></div>
                    </div>
                </a>
            </div>
            <div class="menu">
                <section>
                    <!-- 本來的links應該要是ul+li的型態，麻煩一點就是重複給這邊的清單弄，但是我想試試看額外弄就好 -->
                    <ul>
                        <li><a href="">Microsoft 365</a></li>
                        <li><a href="">Teams</a></li>
                        <li><a href="">Windows</a></li>
                        <li><a href="">Surface</a></li>
                        <li><a href="">Xbox</a></li>
                        <li><a href="">支援</a></li>
                    </ul>
                    <input type="checkbox" id="level1">
                    <label for="level1">
                        <span>軟體</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">Windows 應用程式</a></li>
                        <li><a href="">OneDrive</a></li>
                        <li><a href="">Outlook</a></li>
                        <li><a href="">Skype</a></li>
                        <li><a href="">OneNote</a></li>
                        <li><a href="">Microsoft Teams</a></li>
                    </ul>
                    <input type="checkbox" id="level2">
                    <label for="level2">
                        <span>個人電腦和設備</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">選購 Xbox</a></li>
                        <li><a href="">電腦配件</a></li>
                    </ul>
                    <input type="checkbox" id="level3">
                    <label for="level3">
                        <span>娛樂</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">Xbox Game Pass Ultimate</a></li>
                        <li><a href="">Xbox Live Gold</a></li>
                        <li><a href="">Xbox 與遊戲</a></li>
                        <li><a href="">電腦遊戲</a></li>
                        <li><a href="">Windows 遊戲</a></li>
                    </ul>
                    <input type="checkbox" id="level4">
                    <label for="level4">
                        <span>商務適用</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">Microsoft Cloud</a></li>
                        <li><a href="">Microsoft 安全性</a></li>
                        <li><a href="">Azure</a></li>
                        <li><a href="">Dynamics 365</a></li>
                        <li><a href="">商務用 Microsoft 365</a></li>
                        <li><a href="">Microsoft 產業</a></li>
                        <li><a href="">Microsoft Power Platform</a></li>
                        <li><a href="">Windows 365</a></li>
                    </ul>
                    <input type="checkbox" id="level5">
                    <label for="level5">
                        <span>開發人員與 IT</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">開發人員中心</a></li>
                        <li><a href="">文件</a></li>
                        <li><a href="">Microsoft Learn</a></li>
                        <li><a href="">Microsoft 技術社群</a></li>
                        <li><a href="">Azure Marketplace</a></li>
                        <li><a href="">AppSource</a></li>
                        <li><a href="">Visual Studio</a></li>
                    </ul>
                    <input type="checkbox" id="level6">
                    <label for="level6">
                        <span>其他</span>
                        <div class="down-icon"></div>
                    </label>
                    <ul>
                        <li><a href="">Microsoft Rewards</a></li>
                        <li><a href="">免費下載與安全</a>性</li>
                        <li><a href="">教育</a></li>
                        <li><a href="">禮品卡</a></li>
                        <li><a href="">Licensing</a></li>
                    </ul>
                    <ul>
                        <li><a href="">檢視網站地圖</a></li>
                    </ul>
                </section>
            </div>
        </nav>
    </header>
    <main>
        <section class="carousel">
            <div class="banner">
                <img src="{{asset('img/microsoft_img/Surface1920x600.jpg')}}" alt="" class="banner-xl">
                <img src="{{asset('img/microsoft_img/Surface1399x600.jpg')}}" alt="" class="banner-l">
                <img src="{{asset('img/microsoft_img/Surface1083x600.jpg')}}" alt="" class="banner-m">
                <img src="{{asset('img/microsoft_img/Surface859x540.jpg')}}" alt="" class="banner-s">
                <img src="{{asset('img/microsoft_img/Surface539x440.jpg')}}" alt="" class="banner-xs">
                <div>
                    <div class="text-case">
                        <div class="banner-text">
                            <span>新上市</span>
                            <h1>Surface Pro 9</h1>
                            <div>筆記型電腦效能和平板電腦彈性的顛覆性組合，全都在一台攜帶超方便的裝置，送禮自用兩相宜</div>
                            <a href="">選購 Surface Pro 9</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 放在banner外面 -->
            <div class="control">
                <div tabindex="0"><span class="goleft"></span></div>
                <div>
                    <span class="dot1"></span>
                    <span class="dot2"></span>
                </div>
                <div tabindex="0"><span class="goright"></span></div>
            </div>
        </section>
        <section class="chose-x3">
            <div>
                <div class="windows1">
                    <img src="{{asset('img/microsoft_img/windows40x40.svg')}}" alt="">
                    <span><a href="#">選擇您的 Microsoft 365</a></span>
                </div>
                <div class="tablet">
                    <img src="{{asset('img/microsoft_img/tablet40x40.svg')}}" alt="">
                    <span><a href="#">選購 Surface 裝置</a></span>
                </div>
                <div class="windows2">
                    <img src="{{asset('img/microsoft_img/windows40x40.svg')}}" alt="">
                    <span><a href="#">取得 Windows 11</a></span>
                </div>
            </div>
        </section>
        <section class="content">
            <div>
                <div class="cards">
                    <div class="card1">
                        <img src="{{asset('img/microsoft_img/Content1-Card1.webp')}}" alt="">
                        <span>新上市</span>
                        <h1>Surface Laptop 5</h1>
                        <p>配備細緻的風格和由第 12 代 Intel® Core™ i5/i7 處理器 (基於 Intel® Evo™ 平台) 支援的多工速度，這真是完美的禮物。</p>
                        <div>
                            <a href="">
                                <span>選購 Surface Laptop 5</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card2">
                        <img src="{{asset('img/microsoft_img/Content1-Card2.webp')}}" alt="">
                        <span></span>
                        <h1>Surface Laptop Studio</h1>
                        <p>在釋放想像力的同時散播歡樂。 這款最強大的 Surface Laptop 採用前拉式螢幕設計，帶來極致創意體驗。</p>
                        <div>
                            <a href="">
                                <span>立即選購</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card3">
                        <img src="{{asset('img/microsoft_img/Content1-Card3.jfif')}}" alt="">
                        <span></span>
                        <h1>Xbox Series X</h1>
                        <p>史上最快、最強大的 Xbox 做為禮物，帶來驚喜連連。</p>
                        <div>
                            <a href="">
                                <span>選購 Xbox Series X</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card4">
                        <img src="{{asset('img/microsoft_img/Content1-Card4.avif')}}" alt="">
                        <span></span>
                        <h1>Xbox Series S</h1>
                        <p>適逢佳節，用史上最小的 Xbox 所帶來的次世代效能，達到新境界。</p>
                        <div>
                            <a href="">
                                <span>選購 Xbox Series S</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="carousel">
            <div class="banner">
                <img src="{{asset('img/microsoft_img/xbox1.jfif')}}" alt="" class="banner-xl">
                <img src="{{asset('img/microsoft_img/xbox2.webp')}}" alt="" class="banner-l">
                <img src="{{asset('img/microsoft_img/xbox3.webp')}}" alt="" class="banner-m">
                <img src="{{asset('img/microsoft_img/xbox4.avif')}}" alt="" class="banner-s">
                <img src="{{asset('img/microsoft_img/xbox5.avif')}}" alt="" class="banner-xs">
                <div>
                    <div class="text-case">
                        <div class="banner-text">
                            <span></span>
                            <h1>PC Game Pass</h1>
                            <div>開箱 100 多款精彩遊戲和 EA Play，而且首月只需 NT$30。 此優惠僅適用於新訂閱者。</div>
                            <a href="">立即加入</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div>
                <h1>適用於商務</h1>
                <div class="cards">
                    <div class="card1">
                        <img src="{{asset('img/microsoft_img/Content2-Card1.jpg')}}" alt="">
                        <span>新上市</span>
                        <h1>Surface Pro 9</h1>
                        <p>您想要的平板電腦彈性和需要的筆記型電腦效能 — 全都在一台攜帶超方便的裝置。</p>
                        <div>
                            <a href="">
                                <span>深入了解</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card2">
                        <img src="{{asset('img/microsoft_img/Content2-Card2.webp')}}" alt="">
                        <span></span>
                        <h1>免費取得 Microsoft Teams</h1>
                        <p>線上會議、聊天和共用雲端儲存空間，盡在一處。</p>
                        <div>
                            <a href="">
                                <span>免費註冊</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card3">
                        <img src="{{asset('img/microsoft_img/Content2-Card3.webp')}}" alt="">
                        <span></span>
                        <h1>在混合式環境中蓬勃發展</h1>
                        <p>探索工具、資源和策略，協助您的員工在靈活辦公的新環境中取得成功。</p>
                        <div>
                            <a href="">
                                <span>深入了解</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                    <div class="card4">
                        <img src="{{asset('img/microsoft_img/Content2-Card4.webp')}}" alt="">
                        <span></span>
                        <h1>歡迎使用 Windows 365 雲端電腦</h1>
                        <p>從 Microsoft 雲端安全地將您的 Windows 體驗串流到任何裝置。</p>
                        <div>
                            <a href="">
                                <span>立即下載</span>
                                <div class="goright-icon"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div>
                <div>
                    <div class="focus">關注 Microsoft </div>
                    <div class="facebook">
                        <a href="#">
                            <img src="{{asset('img/microsoft_img/facebook.svg')}}" alt="">
                        </a>
                    </div>
                    <div class="youtube">
                        <a href="#">
                            <img src="{{asset('img/microsoft_img/youtube.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="gotop">
            <a>
                <span>回到頁首</span>
            </a>
        </section>
    </main>
    <footer>
        <div>
            <ul>
                <li>
                    <h1>最新動向</h1>
                    <ul>
                        <li><a href="">Microsoft 365</a></li>
                        <li><a href="">Surface Go</a></li>
                        <li><a href="">Surface Book 2</a></li>
                        <li><a href="">Surface Pro</a></li>
                        <li><a href="">Windows 11 應用程式</a></li>
                    </ul>
                </li>
                <li>
                    <h1>Microsoft Store</h1>
                    <ul>
                        <li><a href="">帳戶設定檔</a></li>
                        <li><a href="">下載中心</a></li>
                        <li><a href="">Microsoft Store 支援</a></li>
                        <li><a href="">退貨/退款</a></li>
                        <li><a href="">訂單追蹤</a></li>
                    </ul>
                </li>
                <li>
                    <h1>教育</h1>
                    <ul>
                        <li><a href="">Microsoft 教育</a></li>
                        <li><a href="">教育裝置</a></li>
                        <li><a href="">Microsoft Teams 教育版</a></li>
                        <li><a href="">Microsoft 365 教育版</a></li>
                        <li><a href="">Office 教育版</a></li>
                        <li><a href="">教育工作者訓練和發展</a></li>
                        <li><a href="">學生和家長優惠</a></li>
                        <li><a href="">Azure 學生版</a></li>
                    </ul>
                </li>
                <li>
                    <h1>商務</h1>
                    <ul>
                        <li><a href="">Microsoft Cloud</a></li>
                        <li><a href="">Microsoft 安全性</a></li>
                        <li><a href="">Azure</a></li>
                        <li><a href="">Dynamics 365</a></li>
                        <li><a href="">Microsoft 365</a></li>
                        <li><a href="">Microsoft Advertisin</a>g</li>
                        <li><a href="">Microsoft 產業</a></li>
                        <li><a href="">Microsoft Teams</a></li>
                    </ul>
                </li>
                <li>
                    <h1>開發人員與 IT</h1>
                    <ul>
                        <li><a href="">開發人員中心</a></li>
                        <li><a href="">文件</a></li>
                        <li><a href="">Microsoft Learn</a></li>
                        <li><a href="">Microsoft 技術社群</a></li>
                        <li><a href="">Azure Marketplace</a></li>
                        <li><a href="">AppSource</a></li>
                        <li><a href="">Microsoft Power Platform</a></li>
                        <li><a href="">Visual Studio</a></li>
                    </ul>
                </li>
                <li>
                    <h1>公司</h1>
                    <ul>
                        <li><a href="">人才招募</a></li>
                        <li><a href="">公司新聞</a></li>
                        <li><a href="">Microsoft 隱私權</a></li>
                        <li><a href="">投資者</a></li>
                        <li><a href="">永續性</a></li>
                    </ul>
                </li>
            </ul>
            <!-- 最最下面那一行 -->
            <section class="last">
                <div class="left">
                    <a href="#">
                        <div class="earth"></div>
                        <div class="text">中文(台灣)</div>
                    </a>
                </div>
                <div class="right">
                    <a href="#">連絡 Microsoft</a>
                    <a href="#">隱私權</a>
                    <a href="#">使用規定</a>
                    <a href="#">商標</a>
                    <a href="#">有關我們的廣告訊息</a>

                    <span>&copy; Microsoft 2022</span>
                </div>
            </section>
        </div>
    </footer>
</body>
</html>

