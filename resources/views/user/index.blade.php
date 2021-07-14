@extends('user.base')
@section('title', 'index')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <div class="lunbanner">
        <a class="lunbo_a" href="#">
            <div class="lunbo">
            </div>
        </a>
        <div class="lun_list">
            <ul>
                <li class="foucus_list"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="lun_nav">
        <ul>
            <a class="a1" href="#">
                <li>
                    <div class="lun_nav_title">遊點遊戲</div>
                    <div class="lun_nav_infro">致力打造<br>多樣化、創作性遊戲</div>
                </li>
            </a>
            <a class="a2" href="#">
                <li>
                    <div class="lun_nav_title">商務合作</div>
                    <div class="lun_nav_infro">真誠 合作 共贏<br>期待與您建立全面的商務關係</div>
                </li>
            </a>
            <a class="a3" href="#">
                <li>
                    <div class="lun_nav_title">遊點招聘</div>
                    <div class="lun_nav_infro">遊點精英訓練營，<br>打造最TOP的你！ </div>
                </li>
            </a>
        </ul>
    </div>
    <div class="recommend">
        <div class="r_title">熱門推薦</div>
        <div class="r_infro">RECOMMEND GAME</div>
        <div class="r_pic">
            <div class="feng_pic">
                <div class="r_c_cover">
                    <div class="r_c_c_title_one">《風暴幻想》<br/>風暴來襲 集結救世</div>
                    <span class="r_c_line_one"></span>
                    <div class="r_c_c_font_one">千人屠龍戰一觸即發</div>
                    <div class="r_c_c_btn_one">
                        <a href="http://www.htmlsucai.com" target="_blank">
                            <img src="{{ asset('images/right.png') }}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="find_pic">
                <div class="r_c_cover">
                    <div class="r_c_c_title">《尋找前世之旅》<br/>同名電視劇正版授權</div>
                    <span class="r_c_line"></span>
                    <div class="r_c_c_font">劇情還原再現經典</div>
                    <div class="r_c_c_btn">
                        <a href="http://www.htmlsucai.com" target="_blank">
                            <img src="{{ asset('images/right.png') }}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="glod_pic">
                <div class="r_c_cover">
                    <div class="r_c_c_title">《妖神傳說》<br/>為愛入魔妖神出世</div>
                    <span class="r_c_line"></span>
                    <div class="r_c_c_font">全新坐騎驚艷登場</div>
                    <div class="r_c_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img
                                src="{{ asset('images/right.png') }}"/></a></div>
                </div>
            </div>
            <div class="warm_pic">
                <div class="r_c_cover">
                    <div class="r_c_c_title">《征戰十三州》<br/>九月新版本手游發布</div>
                    <span class="r_c_line"></span>
                    <div class="r_c_c_font">裂圖封王 君臨十三州</div>
                    <div class="r_c_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img
                                src="{{ asset('images/right.png') }}"/></a></div>
                </div>
            </div>
            <div class="light_pic">
                <div class="r_c_cover">
                    <div class="r_c_c_title">《神域之光》<br/>觸摸會呼吸的魔幻世界</div>
                    <span class="r_c_line"></span>
                    <div class="r_c_c_font">新資料片震撼開啟</div>
                    <div class="r_c_c_btn">
                        <a href="#" target="_blank">
                            <img src="{{ asset('images/right.png') }}"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brang_video">
        <div class="r_title">品牌視頻</div>
        <div class="r_infro">BRANG VIDEO</div>
        <div class="b_content">
            <div class="b_content_infro">
                <div class="b_con_cover">
                    <div class="video_play2">
                        <img src="{{ asset('images/play.png') }}" alt=""/>
                    </div>
                </div>
                <div class="play_video2">
                    <video src="{{ asset('images/movie2.mp4') }}" width="100%" height="100%" controls></video>
                </div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t">風暴幻想</div>
                <div class="b_c_infro_con">《風暴英雄》遊戲選用清晰獨特的幻想題材，在延續經典的PVP、PVE玩法的基礎上，加入革新的戰鬥模式，激爽暢快的競技快感，讓人欲罷不能。 </div>
                <div class="b_c_btn">
                    <a href="#" target="_blank">
                        <img src="{{ asset('images/btn.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t b_c_t2">妖神傳說</div>
                <div class="b_c_infro_con b_c_t2">
                    《妖神傳說》是遊點清新唯美Q版MMO新作，以東方仙俠為背景，擁有跌岩起伏的劇情，絢麗的職業特色技能，獨特創新的遊戲成長系統，豐富多彩的任務以及各具特色的遊戲玩法，帶你體驗一段激情四溢的仙俠戰鬥之旅。
                </div>
                <div class="b_c_btn b_c_t2">
                    <a href="http://www.htmlsucai.com" target="_blank">
                        <img src="{{ asset('images/btn.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="b_content_infro">
                <div class="b_con_cover">
                    <div class="video_play">
                        <img src="{{ asset('images/play.png') }}" alt="">
                    </div>
                </div>
                <div class="play_video">
                    <video src="{{ asset('images/movie2.mp4') }}" width="100%" height="100%" controls></video>
                </div>
            </div>
        </div>
    </div>
    @include('user.contactUs')
@endsection




@section('jsScript')
    <script>
    $(function() {
        function play() {
            this.a = -1;
            this.url = ["banner1.jpg","banner2.jpg","banner3.jpg","banner4.jpg"];
            this.aurl = ["#","#","#","#"];
        };
        play.prototype = {
            Lun:function() {
                $(".lunbanner .lunbo_a").attr("href",Play.aurl[Play.a]);
                $(".lunbanner .lunbo").css({"background":"url(images/"+Play.url[Play.a]+") no-repeat center"},"backgroundSize","auto 100%");
                if(Play.a > 2) {
                    Play.a = -1;
                }
                Play.a++;
                $(".lun_list ul li").removeClass("foucus_list");
                $(".lun_list ul li").eq(Play.a-1).addClass("foucus_list");

                // console.log(Play.a);
            },
            Inval:function() {
                setInterval(Play.Lun(),2000);
            },
            Click:function() {
                $(".lun_list ul li").click(function() {
                    // console.log($(this).index());
                    $(".lun_list ul li").removeClass("foucus_list");
                    $(".lun_list ul li").eq($(this).index()).addClass("foucus_list");
                    Play.a = $(this).index();
                    $(".lunbo").css({"background":"url(images/"+Play.url[Play.a]+") no-repeat center"},"backgroundSize","100%");
                    $(".lunbanner .lunbo_a").attr("href",Play.aurl[Play.a]);

                });
            },
            NavHover:function() {
                $(".nav_li").hover(function() {
                    $(this).find('div').stop().animate({"width":"100%"},300);
                },function() {
                    $(this).find('div').stop().animate({"width":"0px"},200);
                });
            },
            Video:function(a,b) {
                $(a).click(function() {
                    console.log($(this).find("video"));
                    $(b).fadeIn();
                    $(this).parent().parent().find("video")[0].play();
                });
            }
        }
        var Play = new play()
        Play.Lun();
        Play.Inval();
        setInterval(Play.Inval,5000);
        Play.Click();
        Play.NavHover();
        Play.Video(".video_play2",".play_video2");
        Play.Video(".video_play",".play_video");
    })
</script>
@endsection
