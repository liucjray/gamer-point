<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>yeahWorld</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
<div class="nav">
    <div class="nav_con">
        <img class="logo" src="{{ asset('images/logo.png') }}" width="10%" alt=""/>
{{--        <img class="logo_infro" src="{{ asset('images/logo_infro.png') }}" width="15%" alt=""/>--}}
        <ul class="nav_ul">
            <li class="nav_li">
                <a href="/" class="nav_index">遊點首頁</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="/game" class="nav_game">遊點遊戲</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="#" class="">儲值購點</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="#" class="">遊戲轉點</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="#" class="">禮包中心</a>
                <div></div>
            </li>
{{--            <li class="nav_li">--}}
{{--                <a href="/about" class="nav_about">關於遊點</a>--}}
{{--                <div></div>--}}
{{--            </li>--}}
{{--            <li class="nav_li">--}}
{{--                <a href="/work" class="nav_work">商務合作</a>--}}
{{--                <div></div>--}}
{{--            </li>--}}
{{--            <li class="nav_li">--}}
{{--                <a href="/contact" class="nav_contact">聯繫我們</a>--}}
{{--                <div></div>--}}
{{--            </li>--}}
            <li class="li_ep nav_contact">聯繫我們
                <div class="li_list"><a href="/contact">聯繫我們</a></div>
                <div class="li_list"><a href="/about">關於遊點</a></div>
                <div class="li_list"><a href="/work">商務合作</a></div>
                <div class="li_list"><a href="#">線上客服</a></div>
            </li>
            <li class="li_ep nav_join">會員服務
                <div class="li_list"><a href="/join">會員資料</a></div>
                <div class="li_list"><a href="/join">服務開通</a></div>
                <div class="li_list"><a href="/join">查詢紀錄</a></div>
                <div class="li_list"><a href="/join">會員須知</a></div>
            </li>
        </ul>
    </div>
</div>

@yield('content')



<div class="footer">
    <div class="footer_con">
{{--        <div class="foote_logo">--}}
{{--            <img src="{{ asset('images/logo.png') }}" alt=""/>--}}
{{--        </div>--}}
        <div class="footer_font">
            <ul>
                <li>
                    <a href="#" target="_blank">關於遊點</a>
                    <span class="np">|</span>
                    <a href="" target="_blank"></a>服務條款
                    <span class="np">|</span>
                    <a href="#" target="_blank">商務合作</a>
                    <span class="np">|</span>
                    <a href="#" target="_blank">聯繫我們</a>
                </li>
                <li>
                    <a href="#" target="_blank">《網絡遊戲管理暫行辦法》</a>&nbsp;
                    <a href="#" target="_blank"><img src="{{ asset('images/wen2.png') }}" alt=""/></a>
                    <a href="#" target="_blank">文網游備字[2016]M-RPG415號</a>
                </li>
                <li>廣州遊點信息科技有限公司 版權所有 粵網文 【2013】 0785-185號 粵ICP備13055200號-1</li>
            </ul>
        </div>
    </div>
</div>
<script>
    function setNavActive(title){
        $(".active_hover").removeClass('active_hover');
        $(".nav_" + title).addClass('active_hover');
    }
    $(function () {
        let title = "@yield('title')";
        setNavActive(title);
    })
</script>
@yield('jsScript')
</body>
</html>

