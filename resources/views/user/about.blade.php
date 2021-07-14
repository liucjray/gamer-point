@extends('user.base')
@section('title', 'about')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <div class="about_us">
        <div class="about_con">
            <div class="leftyh"><img src="{{ asset('images/leftyh.png') }}"/></div>
            <div class="rightyh"><img src="{{ asset('images/rightyh.png') }}"/></div>
            <div class="about_con_title">公司介绍</div>
            <div class="about_con_infro">ABOUT US</div>
            <div class="about_font"><p>
                    广州悦世界信息科技有限公司成立于2013年，是一家以网络游戏为发展起点，集研发、运营为一体的综合性互动娱乐企业。公司成立之初便专注于手机游戏研发，致力于打造高端精品手机游戏，是国内规模较大的手游研发公司之一。</p>
                <br/>
                <p>
                    经过数年的沉淀与发展，我们自主研发了《神域之光》《龙族传说》《风暴幻想》等几款备受玩家喜欢的热门手游，其中涉及神话、仙侠、魔幻、Q版、历史等各类题材，并与国外数百家知名企业建立了良好的合作伙伴关系，游戏用户遍及中国大陆及海外地区。</p>
                <br/>
                <p>“We develop games that amuse
                    pelope!”除了上线游戏外，我们的研发团队仍在努力尝试不同类型不同风格的项目，致力于打造多样化和创作性的游戏来满足玩家需求，用我们的行动来刷新我们在行业的奇迹。</p>
            </div>
            <div class="lunbo">
                <div class="lun_list">
                    <ul>
                        <li class="foucus_list"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="culture">
        <div class="culture_con">
            <div class="about_con_title">公司文化</div>
            <div class="about_con_infro">CULTURE</div>
            <div class="culture_pic">
                <ul>
                    <li>
                        <img src="{{ asset('images/culture1.png') }}"/><br>
                        <span style="color: #35AFFC;">细节与执行</span>
                        <div class="c_p_font">
                            1、以小见大，于细微处见真章，不放弃每一处细节的关注，是我们追求极致的态度<br><br>
                            2、执行力是实习创新的第一步，是我们实现超越和前进的滚动轴
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/culture2.png') }}"/><br>
                        <span style="color: #B64B4C;">创新与学习</span>
                        <div class="c_p_font">
                            1、不破而不立，敢于突破、敢于尝试、不惧失败，是我们能够给予玩家的惊喜<br><br>
                            2、不断学习，保持进取心，是我们保证产品质量的加油剂
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/culture3.png') }}"/><br>
                        <span style="color: #7BB96E;">敬业与合作</span>
                        <div class="c_p_font">
                            1、先敬业而后得成，热爱自己的工作，是我们能做出优秀产品的前提基础<br><br>
                            2、具备大局观念，懂得彼此分享，设立共同职业目标，是我们具备效率的有力保证
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="life">
        <div class="life_con">
            <div class="about_con_title">悦世界生活</div>
            <div class="about_con_infro">YRARWOELDLIFE</div>
            <div class="lift_pic">
                <ul>
                    <li>
                        <p>01</p>
                        <img src="{{ asset('images/lifepic.png') }}"/>
                        <div class="l_p_title">五险一金</div>
                        <div class="l_p_font">行业领先的薪酬待遇及补贴，完善的<span>五险一金</span>制度</div>
                    </li>
                    <li>
                        <p>02</p>
                        <img class="li_pic2" src="{{ asset('images/lifepic2.png') }}"/>
                        <div class="l_p_title">一日三餐</div>
                        <div class="l_p_font">免费提供<span>一日三餐和水果</span>，妈妈再也不用担心我吃不饱</div>
                    </li>
                    <li>
                        <p>03</p>
                        <img class="li_pic2 li_pic3" src="{{ asset('images/lifepic3.png') }}"/>
                        <div class="l_p_title">药箱常备</div>
                        <div class="l_p_font">药箱常备，年度体检，健康是最大的本钱</div>
                    </li>
                    <li>
                        <p>04</p>
                        <img class="li_pic2" src="{{ asset('images/lifepic4.png') }}"/>
                        <div class="l_p_title">带薪年假</div>
                        <div class="l_p_font">带薪年假、病假人性化制度等着你</div>
                    </li>
                    <li>
                        <p>05</p>
                        <img class="li_pic3 li_pic4" src="{{ asset('images/lifepic5.png') }}"/>
                        <div class="l_p_title">节日礼物</div>
                        <div class="l_p_font"><span>节日礼物、生日惊喜</span>，在公司也能过的甜蜜蜜</div>
                    </li>
                    <li>
                        <p>06</p>
                        <img class="li_pic6" src="{{ asset('images/lifepic6.png') }}"/>
                        <div class="l_p_title">档案挂靠</div>
                        <div class="l_p_font">考虑周全的户口和档案挂靠，应届烦恼都是浮云</div>
                    </li>
                </ul>
            </div>
            <div class="life_gs_pic">
                <div class="life_left"><img src="{{ asset('images/lifeleft.png') }}"/></div>
                <div class="life_right"><img src="{{ asset('images/liferight.png') }}"/></div>
                <div class="life_gs_pic_con">
                    <img class="pic_con1" src="{{ asset('images/compic1.png') }}">
                    <img class="pic_con2" src="{{ asset('images/compic2.png') }}">
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
                this.url = ["lunbo1.jpg","lunbo2.jpg","lunbo3.jpg"];
            };
            play.prototype = {
                Lun:function() {
                    $(".lunbo").css({"background":"url(images/"+Play.url[Play.a]+") no-repeat center"},"backgroundSize","auto 100%");
                    if(Play.a > 1) {
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
                        console.log($(this).index());
                        $(".lun_list ul li").removeClass("foucus_list");
                        $(".lun_list ul li").eq($(this).index()).addClass("foucus_list");
                        Play.a = $(this).index();
                        $(".lunbo").css({"background":"url(images/"+Play.url[Play.a]+") no-repeat center"},"backgroundSize","100%");

                    });
                },
                NavHover:function() {
                    $(".nav_li").hover(function() {
                        $(this).find('div').stop().animate({"width":"100%"},300);
                    },function() {
                        $(this).find('div').stop().animate({"width":"0px"},200);
                    });
                },
                Huan:function(a,b) {
                    $(a).stop().slideUp();
                    $(b).stop().slideDown();
                },
                Life:function() {
                    var a = 1;
                    $(".life_left,.life_right").click(function() {
                        if(a) {
                            Play.Huan(".pic_con1",".pic_con2");
                            a = 0;
                        }else {
                            Play.Huan(".pic_con2",".pic_con1");
                            a = 1;
                        }
                    });
                }
            }
            var Play = new play()
            Play.Lun();
            Play.Inval();
            setInterval(Play.Inval,4000);
            Play.Click();
            Play.NavHover();
            Play.Life();
        })
    </script>
@endsection
