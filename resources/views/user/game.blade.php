@extends('user.base')
@section('title', 'game')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <div class="game_banner"></div>
    <div class="brang_video">
        <div class="b_content">
            <div class="b_content_infro"></div>
            <div class="b_content_infro">
                <div class="b_c_infro_t">風暴幻想</div>
                <div class="b_c_infro_con">《風暴英雄》遊戲選用清晰獨特的幻想題材，在延續經典的PVP、PVE玩法的基礎上，加入革新的戰鬥模式，激爽暢快的競技快感，讓人欲罷不能。 </div>
                <div class="b_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"> </a></div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t b_c_t2">妖神傳說</div>
                <div class="b_c_infro_con b_c_t2">《妖神傳說》是遊點清新唯美Q版MMO新作，以東方仙俠為背景，擁有跌岩起伏的劇情，絢麗的職業特色技能，獨特創新的遊戲成長系統，豐富多彩的任務以及各具特色的遊戲玩法，帶你體驗一段激情四溢的仙俠戰鬥之旅。 </div>
                <div class="b_c_btn b_c_t2"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}" ></a></div>
            </div>
            <div class="b_content_infro"></div>
            <div class="b_content_infro"></div>
            <div class="b_content_infro">
                <div class="b_c_infro_t">尋找前世之旅</div>
                <div class="b_c_infro_con">《尋找前世之旅》為動漫及網劇IP原創手游，是一款世界觀宏大的穿越題材手游，除此之外還加入眾多奇趣幻想的要素，血族，天帝等中西要素完美交融。締造專屬現代都市之人的趣味冒險。畫面精美清晰，帶有卡通清新風格以穿越為題材，遊戲的劇情內容豐富，世界觀架構宏大，人物造型也十分精緻。轉輪迴，前生今世糾纏不休；曲折歷程，追尋迷惘之中的模糊記憶；真相顯現，穿越時空的冒險旅程。 </div>
                <div class="b_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"> </a></div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t b_c_t2">征戰十三州</div>
                <div class="b_c_infro_con b_c_t2">《征戰十三州》是一款排兵布陣為題材的回合製策略手游，將經典的策略玩法和大型網游的角色扮演完美結合，搭配獨特的兵將招募系統、站紋進階系統、列陣戰鬥系統，讓玩家在征服亂世的同時可以享受戰術運用帶來的快感。遊戲將玩家代入硝煙四起的戰爭時代，在征戰十三州這個 群雄逐鹿的世界裡扮演一名城池君主，擔負起拯救亂世蒼生、統一天下的大任，屯糧養兵。保衛城池、征戰四方，讓天下萬民臣服於你！ </div>
                <div class="b_c_btn b_c_t2"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}" ></a></div>
            </div>
            <div class="b_content_infro"></div>
        </div>
    </div>
    @include('user.contactUs')

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
