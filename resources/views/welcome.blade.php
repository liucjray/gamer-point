<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>yeahWorld</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('css/public.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
</head>
<body>
<div class="nav">
    <div class="nav_con">
        <img class="logo" src="{{ asset('images/logo.png') }}" width="10%" alt=""/>
        <img class="logo_infro" src="{{ asset('images/logo_infro.png') }}" width="15%" alt=""/>
        <ul class="nav_ul">
            <li class="nav_li"><a href="#" class="active_hover">首页</a>
                <div></div>
            </li>
            <li class="nav_li"><a href="#">关于悦世界</a>
                <div></div>
            </li>
            <li class="nav_li"><a href="#">悦世界游戏</a>
                <div></div>
            </li>
            <li class="li_ep">加入悦世界
                <div class="li_list"><a href="#">社会招聘</a></div>
                <div class="li_list"><a href="#">校园招聘</a></div>
            </li>
            <li class="nav_li"><a href="#">商务合作</a>
                <div></div>
            </li>
            <li class="nav_li"><a href="#">联系我们</a>
                <div></div>
            </li>
        </ul>
    </div>
</div>
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
                <div class="lun_nav_title">悦世界游戏</div>
                <div class="lun_nav_infro">致力打造<br>多样化、创作性游戏</div>
            </li>
        </a>
        <a class="a2" href="#">
            <li>
                <div class="lun_nav_title">商务合作</div>
                <div class="lun_nav_infro">真诚 合作 共赢<br>期待与您建立全面的商务关系</div>
            </li>
        </a>
        <a class="a3" href="#">
            <li>
                <div class="lun_nav_title">悦世界招聘</div>
                <div class="lun_nav_infro">悦世界精英训练营，<br>打造最TOP的你！</div>
            </li>
        </a>
    </ul>
</div>
<div class="recommend">
    <div class="r_title">热门推荐</div>
    <div class="r_infro">RECOMMEND GAME</div>
    <div class="r_pic">
        <div class="feng_pic">
            <div class="r_c_cover">
                <div class="r_c_c_title_one">《风暴幻想》<br/>风暴来袭 集结救世</div>
                <span class="r_c_line_one"></span>
                <div class="r_c_c_font_one">千人屠龙战一触即发</div>
                <div class="r_c_c_btn_one">
                    <a href="http://www.htmlsucai.com" target="_blank">
                        <img src="{{ asset('images/right.png') }}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="find_pic">
            <div class="r_c_cover">
                <div class="r_c_c_title">《寻找前世之旅》<br/>同名电视剧正版授权</div>
                <span class="r_c_line"></span>
                <div class="r_c_c_font">剧情还原再现经典</div>
                <div class="r_c_c_btn">
                    <a href="http://www.htmlsucai.com" target="_blank">
                        <img src="{{ asset('images/right.png') }}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="glod_pic">
            <div class="r_c_cover">
                <div class="r_c_c_title">《妖神传说》<br/>为爱入魔妖神出世</div>
                <span class="r_c_line"></span>
                <div class="r_c_c_font">全新坐骑惊艳登场</div>
                <div class="r_c_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img
                            src="{{ asset('images/right.png') }}"/></a></div>
            </div>
        </div>
        <div class="warm_pic">
            <div class="r_c_cover">
                <div class="r_c_c_title">《征战十三州》<br/>九月新版本手游发布</div>
                <span class="r_c_line"></span>
                <div class="r_c_c_font">裂图封王 君临十三州</div>
                <div class="r_c_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img
                            src="{{ asset('images/right.png') }}"/></a></div>
            </div>
        </div>
        <div class="light_pic">
            <div class="r_c_cover">
                <div class="r_c_c_title">《神域之光》<br/>触摸会呼吸的魔幻世界</div>
                <span class="r_c_line"></span>
                <div class="r_c_c_font">新资料片震撼开启</div>
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
    <div class="r_title">品牌视频</div>
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
            <div class="b_c_infro_t">风暴幻想</div>
            <div class="b_c_infro_con">《风暴英雄》游戏选用清晰独特的幻想题材，在延续经典的PVP、PVE玩法的基础上，加入革新的战斗模式，激爽畅快的竞技快感，让人欲罢不能。</div>
            <div class="b_c_btn">
                <a href="#" target="_blank">
                    <img src="{{ asset('images/btn.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="b_content_infro">
            <div class="b_c_infro_t b_c_t2">妖神传说</div>
            <div class="b_c_infro_con b_c_t2">
                《妖神传说》是悦世界清新唯美Q版MMO新作，以东方仙侠为背景，拥有跌岩起伏的剧情，绚丽的职业特色技能，独特创新的游戏成长系统，丰富多彩的任务以及各具特色的游戏玩法，带你体验一段激情四溢的仙侠战斗之旅。
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
<div class="contact_us">
    <div class="contact_con">
        <div class="con_list c_c_one">
            <div class="con_list_title">联系我们</div>
            <div class="c_l_wx">
                <img src="{{ asset('images/wx.png') }}" alt=""/>
                <div class="wx_font">关注官方微信<br>获得更多资讯</div>
                <img class="wx_img" src="{{ asset('images/ewm1.jpg') }}" alt=""/>
            </div>
            <div class="c_l_wx c_l_wb">
                <img src="{{ asset('images/wb.png') }}" alt=""/>
                <div class="wx_font">关注官方微博<br>获得更多资讯</div>
            </div>
        </div>
        <div class="con_list c_c_two">
            <div class="c_c_t_con">
                <img src="{{ asset('images/mail.png') }}" alt=""/>
                <div class="c_mail">E-mail：advice@yeahworld.com</div>
            </div>
            <div class="c_c_t_con c_c_address">
                <img src="{{ asset('images/address.png') }}" alt=""/>
                <div class="c_mail">地址：广东省广州市海珠区新港东路琶洲新村</div>
            </div>
        </div>
        <div class="con_list c_c_three">
            <a href="#">
                <ul>
                    <li class="three_special_li">business</li>
                    <li>CPS、CPA and other cooperation in China</li>
                    <li>Media cooperation</li>
                    <li>Global market business</li>
                </ul>
            </a>
        </div>
    </div>
</div>
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
</body>
</html>
<script>
    $(function () {
        function play() {
            this.a = -1;
            this.url = ["{{ asset('images/banner1.jpg') }}", "{{ asset('images/banner2.jpg') }}", "{{ asset('images/banner3.jpg') }}", "{{ asset('images/banner4.jpg') }}"];
            this.aurl = ["http://fantasy.yeahworld.com/", "http://zzssz.yeahworld.com/", "http://g.iqiyi.com/xzqszl", "join.html"];
        };
        play.prototype = {
            Lun: function () {
                $(".lunbanner .lunbo_a").attr("href", Play.aurl[Play.a]);
                $(".lunbanner .lunbo").css({"background": "url(" + Play.url[Play.a] + ") no-repeat center"}, "backgroundSize", "auto 100%");
                if (Play.a > 2) {
                    Play.a = -1;
                }
                Play.a++;
                $(".lun_list ul li").removeClass("foucus_list");
                $(".lun_list ul li").eq(Play.a - 1).addClass("foucus_list");

                // console.log(Play.a);
            },
            Inval: function () {
                setInterval(Play.Lun(), 2000);
            },
            Click: function () {
                $(".lun_list ul li").click(function () {
                    console.log($(this).index());
                    $(".lun_list ul li").removeClass("foucus_list");
                    $(".lun_list ul li").eq($(this).index()).addClass("foucus_list");
                    Play.a = $(this).index();
                    $(".lunbo").css({"background": "url(" + Play.url[Play.a] + ") no-repeat center"}, "backgroundSize", "100%");
                    $(".lunbanner .lunbo_a").attr("href", Play.aurl[Play.a]);

                });
            },
            NavHover: function () {
                $(".nav_li").hover(function () {
                    $(this).find('div').stop().animate({"width": "100%"}, 300);
                }, function () {
                    $(this).find('div').stop().animate({"width": "0px"}, 200);
                });
            },
            Video: function (a, b) {
                $(a).click(function () {
                    console.log($(this).find("video"));
                    $(b).fadeIn();
                    $(this).parent().parent().find("video")[0].play();
                });
            }
        }
        var Play = new play()
        Play.Lun();
        Play.Inval();
        setInterval(Play.Inval, 5000);
        Play.Click();
        Play.NavHover();
        Play.Video(".video_play2", ".play_video2");
        Play.Video(".video_play", ".play_video");
    })
</script>
