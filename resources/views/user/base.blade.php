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
        <img class="logo_infro" src="{{ asset('images/logo_infro.png') }}" width="15%" alt=""/>
        <ul class="nav_ul">
            <li class="nav_li">
                <a href="/" class="nav_index">首页</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="/about" class="nav_about">关于悦世界</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="/game" class="nav_game">悦世界游戏</a>
                <div></div>
            </li>
            <li class="li_ep nav_join">加入悦世界
                <div class="li_list"><a href="/join">社会招聘</a></div>
                <div class="li_list"><a href="/join">校园招聘</a></div>
            </li>
            <li class="nav_li">
                <a href="/work" class="nav_work">商务合作</a>
                <div></div>
            </li>
            <li class="nav_li">
                <a href="/contact" class="nav_contact">联系我们</a>
                <div></div>
            </li>
        </ul>
    </div>
</div>

@yield('content')



<div class="footer">
    <div class="footer_con">
        <div class="foote_logo">
            <img src="{{ asset('images/logo.png') }}" alt=""/>
        </div>
        <div class="footer_font">
            <ul>
                <li>
                    <a href="#" target="_blank">关于悦世界 </a>
                    <span class="np">|</span>
                    <a href="" target="_blank"></a>服务条款
                    <span class="np">|</span>
                    <a href="#" target="_blank">商务合作</a>
                    <span class="np">|</span>
                    <a href="#" target="_blank">联系我们</a>
                </li>
                <li>
                    <a href="#" target="_blank">《网络游戏管理暂行办法》</a>&nbsp;
                    <a href="#" target="_blank"><img src="{{ asset('images/wen2.png') }}" alt=""/></a>
                    <a href="#" target="_blank">文网游备字[2016]M-RPG415号</a>
                </li>
                <li>广州悦世界信息科技有限公司 版权所有 粤网文 【2013】 0785-185号 粤ICP备13055200号-1</li>
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

