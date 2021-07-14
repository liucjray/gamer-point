@extends('user.base')
@section('title', 'contact')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <div class="about_us">
        <div class="about_con">
            <div class="leftyh"><img src="{{ asset('images/leftyh.png') }}"/></div>
            <div class="rightyh"><img src="{{ asset('images/rightyh.png') }}"/></div>
            <div class="about_con_title">公司介紹</div>
            <div class="about_con_infro">ABOUT US</div>
            <div class="about_font"><p>
                    廣州遊點信息科技有限公司成立於2013年，是一家以網絡遊戲為發展起點，集研發、運營為一體的綜合性互動娛樂企業。公司成立之初便專注於手機遊戲研發，致力於打造高端精品手機遊戲，是國內規模較大的手游研發公司之一。 </p>
                <br/>
                <p>
                    經過數年的沉澱與發展，我們自主研發了《神域之光》《龍族傳說》《風暴幻想》等幾款備受玩家喜歡的熱門手游，其中涉及神話、仙俠、魔幻、Q版、歷史等各類題材，並與國外數百家知名企業建立了良好的合作夥伴關係，遊戲用戶遍及中國大陸及海外地區。 </p>
                <br/>
                <p>“We develop games that amuse
                    pelope!”除了上線遊戲外，我們的研發團隊仍在努力嘗試不同類型不同風格的項目，致力於打造多樣化和創作性的遊戲來滿足玩家需求，用我們的行動來刷新我們在行業的奇蹟。 </p>
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
                        <span style="color: #35AFFC;">細節與執行</span>
                        <div class="c_p_font">
                            1、以小見大，於細微處見真章，不放棄每一處細節的關注，是我們追求極致的態度<br><br>
                            2、執行力是實習創新的第一步，是我們實現超越和前進的滾動軸
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/culture2.png') }}"/><br>
                        <span style="color: #B64B4C;">創新與學習</span>
                        <div class="c_p_font">
                            1、不破而不立，敢於突破、敢於嘗試、不懼失敗，是我們能夠給予玩家的驚喜<br><br>
                            2、不斷學習，保持進取心，是我們保證產品質量的加油劑
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('images/culture3.png') }}"/><br>
                        <span style="color: #7BB96E;">敬業與合作</span>
                        <div class="c_p_font">
                            1、先敬業而後得成，熱愛自己的工作，是我們能做出優秀產品的前提基礎<br><br>
                            2、具備大局觀念，懂得彼此分享，設立共同職業目標，是我們具備效率的有力保證
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="life">
        <div class="life_con">
            <div class="about_con_title">遊點生活</div>
            <div class="about_con_infro">YRARWOELDLIFE</div>
            <div class="lift_pic">
                <ul>
                    <li>
                        <p>01</p>
                        <img src="{{ asset('images/lifepic.png') }}"/>
                        <div class="l_p_title">五險一金</div>
                        <div class="l_p_font">行業領先的薪酬待遇及補貼，完善的<span>五險一金</span>制度</div>
                    </li>
                    <li>
                        <p>02</p>
                        <img class="li_pic2" src="{{ asset('images/lifepic2.png') }}"/>
                        <div class="l_p_title">一日三餐</div>
                        <div class="l_p_font">免費提供<span>一日三餐和水果</span>，媽媽再也不用擔心我吃不飽</div>
                    </li>
                    <li>
                        <p>03</p>
                        <img class="li_pic2 li_pic3" src="{{ asset('images/lifepic3.png') }}"/>
                        <div class="l_p_title">藥箱常備</div>
                        <div class="l_p_font">藥箱常備，年度體檢，健康是最大的本錢</div>
                    </li>
                    <li>
                        <p>04</p>
                        <img class="li_pic2" src="{{ asset('images/lifepic4.png') }}"/>
                        <div class="l_p_title">帶薪年假</div>
                        <div class="l_p_font">帶薪年假、病假人性化製度等著你</div>
                    </li>
                    <li>
                        <p>05</p>
                        <img class="li_pic3 li_pic4" src="{{ asset('images/lifepic5.png') }}"/>
                        <div class="l_p_title">節日禮物</div>
                        <div class="l_p_font"><span>節日禮物、生日驚喜</span>，在公司也能過的甜蜜蜜</div>
                    </li>
                    <li>
                        <p>06</p>
                        <img class="li_pic6" src="{{ asset('images/lifepic6.png') }}"/>
                        <div class="l_p_title">檔案挂靠</div>
                        <div class="l_p_font">考慮周全的戶口和檔案挂靠，應屆煩惱都是浮雲</div>
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
