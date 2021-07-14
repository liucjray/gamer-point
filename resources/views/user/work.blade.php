@extends('user.base')
@section('title', 'work')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/work.css') }}">
    <div class="work_banner"></div>
    <div class="work_conntent">
        <div class="w_c_con">
            <ul>
                <li>
                    <div class="work_title">
                        <font class="work_chinese">国内联运、CPS/CPA合作</font>
                        <font class="work_english">CPS、CPA and other cooperation in China</font>
                    </div>
                    <div class="work_qq">2853078226</div>
                    <img src="./images/qqchat.png"/>
                </li>
                <li>
                    <div class="work_title">
                        <font class="work_chinese">媒体合作</font>
                        <font class="work_english">Media cooperation</font>
                    </div>
                    <div class="work_qq">2853078226</div>
                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2853078226&site=qq&menu=yes"><img src="./images/qqchat.png"/></a>
                </li>
                <li>
                    <div class="work_title">
                        <font class="work_chinese">产品海外代理</font>
                        <font class="work_english">Global market business</font>
                    </div>
                    <div class="work_qq">2853078226</div>
                    <img src="./images/qqchat.png"/>
                </li>
            </ul>
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
                },
                active:function() {
                    $(".lang font").click(function() {
                        $(".lang font").removeClass("lang_active");
                        $(this).addClass("lang_active");
                        if($(this).index() == 0) {
                            $(".work_chinese").hide();
                            $(".work_english").show();
                        }else {
                            $(".work_chinese").show();
                            $(".work_english").hide();
                        }
                    });
                },
                local:function() {
                    var language = window.location.href;
                    if(language.substr(-3) == "?en") {
                        $(".lang font").removeClass("lang_active");
                        $(".en").addClass("lang_active");
                        $(".work_chinese").hide();
                        $(".work_english").show();
                    }
                }
            }
            var Play = new play()
            Play.NavHover();
            Play.active();
            Play.local();
        })
    </script>
@endsection
