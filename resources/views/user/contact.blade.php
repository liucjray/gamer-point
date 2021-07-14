@extends('user.base')
@section('title', 'contact')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <div class="contact">
        <div class="contact_con">
            <div class="c_c_title">联系我们</div>
            <div class="c_c_pic">
                <img src="./images/contactpic.png"/>
            </div>
            <div class="c_c_font1">
                <ul>
                    <li>地址：广州海珠区新港东路琶洲新村11号楼24层</li>
                    <li>社招邮箱：hr@yeahworld.com</li>
                    <li>校招邮箱：xiaozhao@yeahworld.com</li>
                    <li>乘车路线：地铁站-四号线万胜围站（D出口）</li>
                    <li>公交站-万胜围站</li>
                </ul>
            </div>
            <div class="c_c_font2">
                <div class="c_c_ewm">
                    招聘官方微信
                    <img src="./images/ewm1.jpg" width="100%" />
                </div>
            </div>
        </div>
    </div>
@endsection


@section('jsScript')
    <script>
        $(function() {
            function play() {
            };
            play.prototype = {
                NavHover:function() {
                    $(".nav_li").hover(function() {
                        $(this).find('div').stop().animate({"width":"100%"},300);
                    },function() {
                        $(this).find('div').stop().animate({"width":"0px"},200);
                    });
                }
            }
            var Play = new play()
            Play.NavHover();
        })
    </script>
@endsection
