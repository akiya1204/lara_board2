<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('/js/shopping.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>SNS</title>
    
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/shopping.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm menu"  id="menu">
            <div class="container">
                <a class="navbar-brand" href="{{ route('top') }}">
                     SNS
                </a>

                <div class="collapse navbar-collapse menu_list" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item menu_list">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('list') }}">{{ __('shop') }}</a>
                                <div class="menu_contents">
                                    <ul class="menu_contents_title">
                                        <li>ゲーム本体</li>
                                    </ul>
                                    <ul class="menu_contents_list">
                                        <li><a href="{{ route('detail', ['id' => 2]) }}">Wii</a></li>
                                        <li><a href="{{ route('detail', ['id' => 1]) }}">PS4</a></li>
                                        <li><a href="{{ route('detail', ['id' => 4]) }}">xbox</a></li>
                                    </ul>
                                    <ul class="menu_contents_list">
                                        <li><a href="{{ route('detail', ['id' => 2]) }}"><img src="{{ asset('/img/wii.jpg') }}" alt=""></a></li>
                                        <li><a href="{{ route('detail', ['id' => 1]) }}"><img src="{{ asset('/img/ps4.jpg') }}" alt=""></a></li>
                                        <li><a href="{{ route('detail', ['id' => 4]) }}"><img src="{{ asset('/img/xbox.jpg') }}" alt=""></a></li>
                                    </ul>
                                    <ul class="menu_contents_title">
                                        <li>ゲームソフト</li>
                                    </ul>
                                    <ul class="menu_contents_list">
                                        <li><a href="{{ route('detail', ['id' => 8]) }}">マインクラフト</a></li>
                                        <li><a href="{{ route('detail', ['id' => 5]) }}">ストリートファイター</a></li>
                                        <li><a href="{{ route('detail', ['id' => 6]) }}">RAINBOWSIX SIEGE</a></li>
                                        <li><a href="{{ route('detail', ['id' => 21]) }}">NBA 2K20</a></li>
                                    </ul>
                                    <ul class="menu_contents_title">
                                        <li>周辺機器</li>
                                    </ul>
                                    <ul class="menu_contents_list">
                                        <li><a href="{{ route('detail', ['id' => 9]) }}">PS4コントローラー</a></li>
                                        <li><a href="{{ route('detail', ['id' => 10]) }}">Wiiコントローラー</a></li>
                                        <li><a href="{{ route('detail', ['id' => 11]) }}">switchコントローラー</a></li>
                                        <li><a href="{{ route('detail', ['id' => 12]) }}">Xboxコントローラー</a></li>
                                    </ul>
                                    <div class="menu_contents_next">
                                        <a href="{{ route('list') }}">もっと見る</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('cart') }}">{{ __('cart') }}</a>
                            </li>
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('contact.index') }}">{{ __('contact') }}</a>
                            </li>
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('mypage') }}</a>
                            </li>
                            <li class="nav-item menu_list">
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('/js/shopping.js') }}"></script>
    <script src="{{ asset('/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>

    <script>
    jQuery(function($){
    $.extend(true, $.magnificPopup.defaults, {
        tClose: '閉じる', 
        tLoading: 'ロード中...', 
        gallery: {
        tPrev: '前へ (左矢印キー)', 
        tNext: '次へ (右矢印キー)', 
        tCounter: '%curr% / %total%' 
        }
    });
    
    $('#yt_link').magnificPopup({
        delegate: 'a',
        type: 'iframe',
        iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
        '<div class="mfp-close"></div>'+
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
        '<div class="mfp-title">Some caption</div>'+
        '</div>'
        },
        gallery: {
        enabled:true
        },
        callbacks: {
        markupParse: function(template, values, item) {
            values.title = item.el.attr('title');
        }
        },
        disableOn: function() {
        if( $(window).width() < 480 ) {
            return false;
        } 
        return true;
        }
    });
    });
    
    </script>
</body>
</html>