@extends('layouts.app')

@section('title')
@endsection

@section('breadcrumbs')
@endsection

@section('content')
    <div class="content" style="position:relative;">

        <style>


            @keyframes scroll-title-intro
            {
                0%
                {
                    opacity:0;
                    text-shadow : 0px 0px 0 #CCCCCC, -0px -0px 0 #CCCCCC;
                    letter-spacing:-20px;
                }

                50%
                {
                    opacity : 0.25;
                    text-shadow    : 3px 3px 0 red, -3px -3px 0 cyan;
                }

                100%
                {
                    opacity : 1;
                    text-shadow : 1.5px 1.5px 0 red, -1.5px -1.5px 0 cyan;
                    letter-spacing : 70px;
                }
            }

            .content p
            {
                text-indent : 20px;
            }

            .content .tab-pane li
            {
                padding-left   : 20px;
                text-indent    : -20px;
                padding-bottom : 10px;
            }

            .col-md-2
            {
                margin-left  : 0px;
                padding-left : 0px;
            }

            .content
            {
                width   : 99vw;
                margin  : 0;
                padding : 0;
            }

            .image-slot
            {
                position              : relative;
                #left                  : -26.5%;
                width                 : 100%;
                height                : 300px;
                background-size       : cover;
                background-attachment : fixed;
                background-position   : center;
                background-repeat     : no-repeat;
                #box-shadow            : inset 0px 0px 20px 10px #080909;
            }

            ul.intro-links
            {
                position        : relative;
                text-align      : center;
                list-style-type : none;
                display         : inline-block;
                margin          : 0;
                margin-top      : 20px;
                margin-bottom   : 20px;
                padding         : 0;
                width           : 100%;
            }

            ul.intro-links li
            {
                position   : relative;
                display    : inline-block;
                text-align : center;
                width      : 15%;
            }

            .scroll-title
            {
                padding-left        : 60px;
                width               : 100%;
                text-align          : center;
                font-family         : 'Bungee Hairline', sans-serif;
                animation           : scroll-title-intro 3s ease;
                position            : absolute;
                animation-fill-mode : forwards;
                z-index             : 1;
                font-size  : 1100%;
                margin-top : 100px;
            }

            .text-slot
            {
                position         : relative;
                z-index          : 3;
                background-color : #1B1C1F;
                box-shadow       : 0px 0px 20px 10px #080909;
                padding-left     : 17%;
                padding-right    : 17%;
                padding-top:20px;
                padding-bottom:40px;
            }
        </style>


        <div class="image-slot" style="background-image:url('./img/home/rising-sun.jpg');height:500px;margin-top:0px;position:relative;z-index:0;">
            <div style="" class="scroll-title">
                VAELUX
            </div>
        </div>

        <div class="text-slot">
            <p>
                Welcome to Vaelux Gaming! If you've never heard of us, feel free to read this page before continuing through the site. If you already know where you're going, please use the links below.
            </p>
            <ul class="intro-links">
                <li><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Apply</a></li>
                <li><a href=""><i class="fa fa-question-circle" aria-hidden="true"></i> About Us</a></li>
                <li><a href=""><img src="./img/discord_small.png" width="20px" style="margin-top:-3px;"> Discord</a></li>
                <li><a href=""><i class="fa fa-tasks" aria-hidden="true"></i> Forum</a></li>
                <li><a href=""><i class="fa fa-book" aria-hidden="true"></i> Wiki</a></li>
            </ul>

            <hr>

            <p>
                Vaelux is an international, multi-gaming community focused on delivering a superlative gaming experience and enabling awesome friendships. Through professional community leadership, world-class technology, a relaxed and supportive atmosphere, and team-focused gameplay, we can make the time you spend both in and out of game highly enjoyable and rewarding.
            </p>
            <p>
                We're a "semi-casual" community in that we don't have strict skill or attendance requirements. However, we seek out goal-oriented, team-based gameplay whenever possible. Through tight community relationships and a philosophy of iterative improvement, we can overcome any challenge while having much more fun, much less burn-out, and much lower turnover. This also means that we guarantee that real life comes first. You'll never be yelled at or kicked for missing a raid or taking a vacation.
            </p>
        </div>

        <div class="image-slot" style="background-image:url('./img/home/stacking_by_detcord12b-d62s5t4.jpg');"></div>

        <div class="text-slot">
            <h2>Love of Games</h2>
            <hr>
            <p>
                We love playing games. Not grinding and farming for endless hours. Not logging in as a daily chore. Really <i>playing</i> them; experiencing the game both for its own sake and as a means to build friendships. If you ever find yourself booting a game up with us and not being excited, something is wrong and you should let us know. We all love games in our own way and we want you to share your interests with us. We're a community of teachers and students who want to grow by learning from your passion.
            </p>
            <p>
                Everyone likes succeeding in-game. We like it, too. But we refuse to sacrifice ourselves or our community for the sake of fleeting accomplishments. We don't demand rigorous schedules or perfect performance. We also don't throw a fit when we lose. We laugh it off and enjoy the ride with our friends. Next time, we'll be better and we'll win without having ruined the game for ourselves.
            </p>
        </div>

        <div class="image-slot" style="background-image:url('./img/home/Reclaimer_Image002.jpg');"></div>

        <div class="text-slot">
            <h2>Love of Friends</h2>
            <hr>
            <p>
                First and foremost, we're a community of friends who game, not a community of characters or gamers who happen to be friends. Games come and go. Our community won't. Joining Vaelux means committing to building meaningful relationships that exist outside of the immediate benefits within any given game. You may or may not play multiple games with us but you should never see your relationship within our community as purely transactional or merely as a vehicle to personal success.
            </p>
            <p>
                As friends, we're committed to helping each other. We don't care if you're the worst player on the server or the best. We care that you're willing to learn and, in turn, to teach. Even the worst player can grow to be highly competitive if they're willing to learn. And even the best player can drag a community down if they only think of themselves. Every member must strive to be generous with their expertise and time, helping others to progress through their greater gaming arcs.
            </p>
        </div>

        <div class="image-slot" style="background-image:url('./img/home/2917768-r6s_screenshot_kanal2k_gc_150805_10am_cet_1438625272.png');"></div>

        <div class="text-slot">
            <h2>Love of Knowledge</h2>
            <hr>
            <p>
                Vaelux is committed to collecting and sharing knowledge with the world. We believe in the mutual benefits of open information and transparent collaboration. By sharing our wealth with each other and with the world, we will enjoy a better gaming experience and empower others to both benefit similarly and to return the favor by sharing their knowledge.
            </p>
            <p>
                Everyone has something to contribute to the community. Maybe you're a nerd for stats or you love finding every easter egg. Maybe you're a knock-out artist or programmer. Maybe you just enjoy writing about your gaming adventures. Everyone has some way to enrich our community and the communities surrounding the games we love. We want to enable you to explore that talent so others can enjoy and learn from your content.
            </p>
        </div>

        <div class="text-slot">
            @foreach ($news_threads as $thread)
                <div style="margin-bottom:20px;">
                    {{ $thread->topic_title }}
                    <hr>
                    {{ $thread->topic_time }}
                    <hr>
                    {{ $thread->posts()->first()->post_text }}
                </div>
            @endforeach
        </div>

        <script>
            $(function ()
            {
                $('.navbar-nav li').removeClass('active');
                $('.navbar-nav .nav-home').addClass('active');

                var scroll_title = $(".scroll-title");

                $("#content-container").scroll(function ()
                {
                    scroll_title.css("margin-top", 100 + Math.round(($(this).scrollTop() * 0.75)));
                });
            });
        </script>
    </div>

@endsection
