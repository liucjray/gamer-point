@extends('user.base')
@section('title', 'game')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/game.css') }}">
    <div class="game_banner"></div>
    <div class="brang_video">
        <div class="b_content">
            <div class="b_content_infro"></div>
            <div class="b_content_infro">
                <div class="b_c_infro_t">风暴幻想</div>
                <div class="b_c_infro_con">《风暴英雄》游戏选用清晰独特的幻想题材，在延续经典的PVP、PVE玩法的基础上，加入革新的战斗模式，激爽畅快的竞技快感，让人欲罢不能。</div>
                <div class="b_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"></a></div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t b_c_t2">妖神传说</div>
                <div class="b_c_infro_con b_c_t2">《妖神传说》是悦世界清新唯美Q版MMO新作，以东方仙侠为背景，拥有跌岩起伏的剧情，绚丽的职业特色技能，独特创新的游戏成长系统，丰富多彩的任务以及各具特色的游戏玩法，带你体验一段激情四溢的仙侠战斗之旅。</div>
                <div class="b_c_btn b_c_t2"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"></a></div>
            </div>
            <div class="b_content_infro"></div>
            <div class="b_content_infro"></div>
            <div class="b_content_infro">
                <div class="b_c_infro_t">寻找前世之旅</div>
                <div class="b_c_infro_con">《寻找前世之旅》为动漫及网剧IP原创手游，是一款世界观宏大的穿越题材手游，除此之外还加入众多奇趣幻想的要素，血族，天帝等中西要素完美交融。缔造专属现代都市之人的趣味冒险。画面精美清晰，带有卡通清新风格以穿越为题材，游戏的剧情内容丰富，世界观架构宏大，人物造型也十分精致。转轮回，前生今世纠缠不休；曲折历程，追寻迷惘之中的模糊记忆；真相显现，穿越时空的冒险旅程。</div>
                <div class="b_c_btn"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"></a></div>
            </div>
            <div class="b_content_infro">
                <div class="b_c_infro_t b_c_t2">征战十三州</div>
                <div class="b_c_infro_con b_c_t2">《征战十三州》是一款排兵布阵为题材的回合制策略手游，将经典的策略玩法和大型网游的角色扮演完美结合，搭配独特的兵将招募系统、站纹进阶系统、列阵战斗系统，让玩家在征服乱世的同时可以享受战术运用带来的快感。游戏将玩家代入硝烟四起的战争时代，在征战十三州这个 群雄逐鹿的世界里扮演一名城池君主，担负起拯救乱世苍生、统一天下的大任，屯粮养兵。保卫城池、征战四方，让天下万民臣服于你！</div>
                <div class="b_c_btn b_c_t2"><a href="http://www.htmlsucai.com" target="_blank"><img src="{{ asset('images/btn.png')}}"></a></div>
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
