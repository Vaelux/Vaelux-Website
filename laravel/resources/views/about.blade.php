@extends('layouts.app')

@section('title')
- About
@endsection

@section('breadcrumbs')
    <div id="#breadcrumbs-wrapper">
        &nbsp;> About
    </div>
@endsection

@section('content')

    <div class="content">

        <style>
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

            .indent-section
            {
                padding-left  : 20px;
                margin-bottom : 30px;
            }

            .fa.bg-big
            {
                color       : rgb(45, 45, 45);
                position    : absolute;
                margin-top  : -20px;
                font-size   : 200px;
                margin-left : 60%;
                transform   : rotate(30deg);
                z-index     : 0;
            }

            .panel-default
            {
                overflow:hidden;
            }

            .panel-default .panel-heading
            {
                background-image : none;
            }

            .panel-default .panel-heading a,
            .panel-default .panel-heading a:hover
            {
                text-decoration: none;
            }

            .panel-title
            {
                font-size: 110%;
                font-weight:normal;
                font-family:'Orbitron', Sans-serif;
            }

            .panel-collapse.collapse
            {
                border-top: 1px solid rgb(166, 166, 166);
            }

            .panel-collapse .panel-body
            {
                padding-left:10px;
                padding-right:10px;
            }
        </style>

        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="col-md-3">
                        <ul class="nav nav-tabs nav-stacked" style="position:fixed;">
                            <li class="active"><a href="#charter" data-toggle="tab"><i class="fa fa-bookmark" aria-hidden="true"></i>&nbsp;&nbsp;Charter</a></li>
                            <li><a href="#law" data-toggle="tab"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;&nbsp;Law</a></li>
                            <li><a href="#structure" data-toggle="tab"><i class="fa fa-bank" aria-hidden="true"></i>&nbsp;&nbsp;Structure</a></li>
                            <li><a href="#leadership" data-toggle="tab"><i class="fa fa-shield" aria-hidden="true"></i>&nbsp;&nbsp;Leadership</a></li>
                            <li><a href="#faq" data-toggle="tab"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;&nbsp;FAQ</a></li>
                            <li><a href="#credits" data-toggle="tab"><i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;&nbsp;Credits</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content col-md-9">
                        <div class="tab-pane active" id="charter">

                            <h1>Charter</h1>

                            <hr>

                            <p>
                                This document outlines our community's guiding principles and overarching objectives. All decisions made for and by the community and its members should seek to further the ideals of this document.
                            </p>

                            <p>
                                All prospective and current members should feel as though they agree with the ideas herein. If you do not feel that way, our community probably isn't the correct one for you.
                            </p>

                            <br>
                            <br>
                            <br>

                            <h2>Purpose</h2>

                            <hr>

                            <p>
                                Vaelux exists to fulfill two main purposes. These should be the guiding light for every member when they make a decision:
                            </p>
                            <ol>
                                <li>
                                    Provide a superlative gaming experience for members based on tight social engagement, team-driven and goal-oriented gameplay, and a high degree of ownership over the community.
                                </li>
                                <li>
                                    Be a positive force within every game we touch. Help to foster a constructive atmosphere with non-members, where everyone can enjoy their time in-game to the fullest. Be generous with our time and expertise to expand and enrich the games we enjoy such that everyone may benefit.
                                </li>
                            </ol>

                            <br>
                            <br>
                            <br>

                            <h2>Core Values</h2>
                            <hr>

                            <br>

                            <h3><i class="fa fa-gamepad" aria-hidden="true"></i> Love of Games</h3>

                            <div style="padding:20px;padding-top:0;margin-bottom:20px;">

                                <i class="fa fa-gamepad bg-big" aria-hidden="true"></i>

                                <p style="position:relative;z-index:1;">
                                    Everyone in our community shares an interest in playing games and in having fun doing so. Every time you boot up a game with us, you should do so with the intention of having an enjoyable experience. You should also do your best to share what you love about games with the rest of our community. Through this, we can learn and grow as a collective of friends founded on great gaming experiences.
                                </p>

                                <p style="position:relative;z-index:1;">
                                    Games exist only because of players and their communities. Contribute back to that ecosystem by participating in testing, submitting bug reports, creating new content, or by simply being helpful to other players. Communicating problems or ideas to developers, creating desirous content for a game, and productively engaging with the greater gaming community all pay dividends in the form of improved games and a more enjoyable time playing them for everyone.
                                </p>
                            </div>

                            <h3><i class="fa fa-users" aria-hidden="true"></i> Love of Friends</h3>

                            <div style="padding:20px;padding-top:0;margin-bottom:20px;">

                                <i class="fa fa-users bg-big" aria-hidden="true"></i>

                                <p style="position:relative;z-index:1;">
                                    Joining our community means committing to a desire to find and build robust relationships. Our community lives or dies by the effort each member puts into creating those friendships. As such, member activity and engagement is paramount to the overall success of the group. We do not place strenuous demands on members to reach certain levels of activity or to attend a certain number of events but we are not interested in members who have no interest in engaging the community. Every member of Vaelux is vital and irreplaceable and every friendship they build is necessary; it's quite literally the point of membership in the group.
                                </p>

                                <p style="position:relative;z-index:1;">
                                    Friendships transcend any single challenge or game. Be committed to helping each other, even and especially when it entails some personal discomfort or sacrifice. Do not be greedy or selfish and do not wait for others to be generous before you. Be open minded to trying new content or games that can help you better engage with the community.
                                </p>
                            </div>

                            <h3><i class="fa fa-book" aria-hidden="true"></i> Love of Knowledge</h3>

                            <div style="padding:20px;padding-top:0;margin-bottom:20px;">

                                <i class="fa fa-book bg-big" aria-hidden="true"></i>

                                <p style="position:relative;z-index:1;">
                                    Vaelux places a high value on the collection and open dissemination of information regarding games, technology, and the communities that surround them. Rather than hoard and hide knowledge, we seek to teach and to be taught.
                                </p>

                                <p style="position:relative;z-index:1;">
                                    Some will question why a community should freely share its knowledge with the world; why its members should expend energy helping non-members, even competitors. It is our belief that sustainable progress requires collaboration and that we will, in turn, benefit from the advancement of those around us. Moreover, knowledge hidden is knowledge lost and the philosophies that lead to secrecy can have negative consequences elsewhere in a community.
                                </p>

                                <p style="position:relative;z-index:1;">
                                    We hope that not only will people find our information useful but that our example will encourage other communities to follow suit and give back to their own greater ecosystems.
                                </p>
                            </div>
                        </div>

                        <div class="tab-pane" id="law">

                            <div class="indent-section">
                                <h1>Law</h1>
                                <hr>

                                <p>
                                    These are our global rules and guidelines to which all members must adhere. Failure to do so will result in a private warning from leadership. Habitual offenders will be removed from the community.
                                </p>

                                <p>
                                    All officers have the authority to enforce the below rules to the best of their judgement. Questions, comments, or appeals can be sent directly to the Chairman.
                                </p>

                                <p>
                                    If you notice any member violating the below rules, please discuss the matter with an officer in private. They will decide if the behavior is a violation or requires escalation. Do not publicly accuse other members of violations or discuss past or pending violations with 3rd parties. Leadership will handle any necessary discipline and engaging in that behavior will simply engender more negative feelings in all parties.
                                </p>
                            </div>

                            <div class="indent-section">
                                <hr />

                                <ol>
                                    <li>
                                        No use of cheats or exploits will be tolerated in multiplayer games.

                                        <ul>
                                            <li>
                                                Cheating cripples the entire community of a game and can make an otherwise great game intolerable. Anyone caught using cheats will be removed without an initial warning.
                                            </li>
                                            <li>
                                                Exploits (ie. emergent or errant game mechanics that destroy the balance of the game at the expense of others) similarly hampers a game's enjoyment for everyone else. It forces players to either use the exploit themselves or live with a disadvantage that the designers never intended to exist. The line between dominant strategy and exploit is fuzzy so use your best judgement and cooperate if asked to stop a given behavior.
                                            </li>
                                            <li>
                                                Cheats and exploits are allowable in single-player or private games (if all parties are consenting). We've no intention of stopping you from god-mode-ing your way through Skyrim or having fun with friends during private sessions. This does not extend to official Vaelux activities, even if they're restricted to members only. Community-wide events should be treated like public events.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        No griefing will be tolerated. This includes:

                                        <ul>
                                            <li>Malicious or unwelcomed trolling</li>
                                            <li>Stealing (loot, mobs, etc)</li>
                                            <li>Spawn camping or stalking one player</li>
                                            <li>RPK-ing outside of usual PvP areas</li>
                                            <li>Verbally harassing opponents during or after a match</li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Maintain a professional attitude when interacting with the public.

                                        <ul>
                                            <li>
                                                No sexism, racism, political or religious attacks, or other discriminatory, inflammatory, or malicious behavior.
                                            </li>
                                            <li>
                                                Immature or offensive behavior reflects poorly on the entire community and poisons the game's atmosphere for every player. Even if you don't intend for your off-color remarks to be taken seriously, don't assume that everyone in a public setting will accept that.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Maintain a friendly attitude when interacting with other members.
                                        <ul>
                                            <li>
                                                We strive to maintain a welcoming, safe, and enjoyable atmosphere for every member. This mutual respect is how we keep our community drama to a minimum and member happiness at a maximum. We know that people familiar with each other can often use humor that could seem over-the-line or cruel to an outsider and we won't stop people from interacting freely in private. But public channels, be they public to the community or public to an entire game, are not necessarily the best place to push the limits.
                                            </li>
                                            <li>
                                                Don't assume someone you're talking to is receptive to potentially offensive content or behavior.
                                            </li>
                                            <li>
                                                Don't assume everyone lurking in a channel will be as receptive to potentially offensive behavior as your conversation partner is.
                                            </li>
                                            <li>
                                                Conversely, don't go out of your way to be offended by others. The internet is unrated and you can't control everyone around you so it's better to go into things with realistic expectations than to make mountains out of molehills. These rules are not a bludgeon for you to wield.
                                            </li>
                                            <li>
                                                Don't rage quite. The people you're playing with are depending on you for success and fun. Even if you can no longer contribute to the outcome of the match, being present to support your teammates is important. You lessen everyone's enjoyment if you abandon them. If necessary, take a break or politely let your team know you're signing off.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Be respectful to leadership.

                                        <ul>
                                            <li>
                                                Members are encouraged to provide honest feedback about policies and decisions made by the community's leadership. However, they must do so respectfully and with an open mind. Turning policy discussions into a personal attack or an avenue to complain will not be well-received.
                                            </li>
                                            <li>
                                                All officers maintain an open-door policy and are required to entertain feedback. If you have a recommendation or complaint about an officer, speak to that officer first. If necessary, bring the matter to a higher officer in private. Do not complain to other members, publicly or privately. Such behavior is toxic to the community and cannot be tolerated.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Everyone must complete an application form.

                                        <ul>
                                            <li>
                                                All prospective members must complete our application process. This includes friends, family, and people invited by another member. This helps ensure the quality and culture of the community is maintained and is necessary for our technologies to function.
                                            </li>
                                            <li>
                                                We ask that applicants be at least 18 years old. We ultimately don't care how old you are; we care how mature you are, so being 40 and acting 13 is the same as being 13, in the eyes of our recruiters. Few exceptions will be made to this and will require applications that demonstrate a high level of maturity and commitment.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Multi-guilding is discouraged.

                                        <ul>
                                            <li>
                                                Multi-guilding is discouraged but not completed banned. Membership in purely social or aesthetic groups is allowed, so long as it doesn't interfere with your membership here. For other kinds of multi-memberships, please ask for officer approval first and be understanding if they disallow it.
                                            </li>
                                            <li>
                                                Participation of our members is critical to our success. It's unlikely that you have enough free time to be meaningfully active in two communities. You can also find yourself in tricky situations if you're competing against members from another of your groups.
                                            </li>
                                            <li>
                                                If you are in multiple communities, our rules of conduct apply wherever you are.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Members out-of-contact for over a month are at risk of being pruned.

                                        <ul>
                                            <li>
                                                We do not have stringent global activity requirements but we do have an upper limit to absences. Members completely out-of-contact for over a month are
                                                at risk of being pruned from the roster. This will include removal of membership status and access to all servers and in-game guilds.
                                            </li>
                                            <li>
                                                If you know you will be gone for an extended period, please let an officer know. You'll be tagged as Away and not pruned for up to a year. If you're
                                                away for longer than anticipated or didn't have a chance to inform us of your absence before-hand, contact an officer as soon as possible. We just need
                                                to know you're still interested in being a member.
                                            </li>
                                            <li>
                                                If you're pruned due to inactivity, you may reapply at any time with no penalty beyond loss of rank and any privileges that rank conferred. Members
                                                pruned due to inactivity with a reasonable excuse may be fully reinstated, on a case-by-case basis.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Members kicked due to breaches of our Law will not likely be re-admitted.

                                        <ul>
                                            <li>
                                                If you're removed from the group due to negative behavior, you may reapply but each case will be handled individually.
                                            </li>
                                            <li>
                                                All officers have the full authority to enforce the rules within this document, including kicking members from the group for repeatedly breaching these rules. However, if you believe you were punished unfairly, you may appeal to the Chairman via a PM or email.
                                            </li>
                                        </ul>
                                    </li>

                                </ol>
                            </div>

                            <div class="indent-section">
                                <h2>Officer Law</h2>
                                <hr>

                                <ol>
                                    <li>
                                        Avoid self-segregation.

                                        <ul>
                                            <li>
                                                Self-segregation is toxic to the social environment and creates a feeling of class distinction among the membership and leadership that we must avoid.
                                            </li>
                                            <li>
                                                Officer channels are not to be loitered in. They are for private, administrative discussions. They are not for officers to chat or game.
                                            </li>
                                            <li>
                                                Unless it is impossible, parties and teams should contain some number of non-officer members. Being an officer is not like being part of an exclusive clique. You must make every effort to not only intermingle with non-officers but to seek opportunities to bring members together who may not otherwise play together of their own initiative.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Own your actions.

                                        <ul>
                                            <li>
                                                Officers are responsible for the consequences of their actions. They're given a large sum of trust by both the higher leadership and the membership and must wield their power wisely.
                                            </li>
                                            <li>
                                                Be prepared to suffer up to the same punishment you erroneously gave out to another. Officers have the power to enforce the community's laws to the best of their judgement and will be held accountable for avoidable mistakes they make in doing so.
                                            </li>
                                            <li>
                                                Do not blame others for your failures or successes. Your ideas and actions are your own and you should be willing to stand behind them, good or bad. We are all willing to help when you are in trouble but we cannot save you if you cannot see your own faults.
                                            </li>
                                        </ul>
                                    </li>

                                </ol>

                            </div>

                        </div>

                        <div class="tab-pane" id="structure">

                            <div class="indent-section">
                                <h1>Structure</h1>
                                <hr>

                                <p>
                                    Vaelux is designed to introduce as little bureaucracy as is necessary to ensure the proper health of the community. That said, it is necessary to have some degree of formal leadership to maintain a coherent vision for the group, to oversee the execution of ideas, and to resolve problems. We regard every member of the community as intellectual and moral equals and encourage members to take as much ownership over the evolution of the group as they want. But we know not everyone will want to spend time on out-of-game administrative work, so the most willing and capable members are recognized with the rank of Officer.
                                </p>

                                <p>
                                    All leadership positions are created and filled when they become necessary and every officer is expected to be willing to help with any functional area, if required. All officers are chosen based upon willingness to serve the community and ability to perform the given task. Outside of rarer in-game leadership positions, skill is not a determining factor.
                                </p>
                            </div>

                            <div class="indent-section">
                                <h2>Ranks</h2>
                                <hr/>

                                <ul>
                                    <li>
                                        Chairman

                                        <ul>
                                            <li>
                                                The Chairman is the top-most decision-maker of the community, tasked with ensuring the community is healthy and progressing towards its goals. Decisions made by the Chairman can override any other.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Officer

                                        <ul>
                                            <li>
                                                Officers are members who demonstrated a willingness and ability to serve the community by volunteering their own time and energy toward administrative tasks. Each Officer has a specific set of duties and responsibilities but are capable of filling in for other Officers, when necessary. Officers are implicitly trusted by the Chairman to enforce the rules of the community. Their decisions are to be treated as if they came from the Chairman.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Volunteer

                                        <ul>
                                            <li>
                                                Volunteers are, for most purposes, regular Members. However, Volunteers are willing to go above and beyond the normal call of duty in service to the community. They generally assist Officers in the execution of their duties but can sometimes act more autonomously, as well. Volunteers do not have the same power as Officers to make in-field decisions or to enact punishments against other members. They also do not have the same expectations placed upon them as Officers do.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Member

                                        <ul>
                                            <li>
                                                The Members are Vaelux. Each member has completed the application process and is in good standing with the community. Members can enjoy full access to all of our services and benefits such as membership in all of our in-game guilds and access to in-game banks.
                                            </li>
                                        </ul>
                                    </li>

                                    <br>

                                    <li>
                                        Prospect

                                        <ul>
                                            <li>
                                                Prospects are new members who have had their application accepted but are not yet full Members. Every two weeks, Officers review each Prospect for readiness to be made Member. This is based on activity within the community, activity in-game, and any misconduct noticed since being accepted. This is also a period for the Prospect and the community to evaluate each other; if a Prospect feels that Vaelux is not the right place for them, it's an easy time to call it off.
                                            </li>
                                            <li>
                                                No Prospect can be made a Member prior to two weeks elapsing since their acceptance. There is no upper limit to how long a Prospect can be under review. This helps prevent abuse and weed out undesirable personalities before they are able to do much damage.
                                            </li>
                                            <li>
                                                Every Prospect must make an introduction thread in our Introductions forum before they can be considered for Membership. Relationships are the lifeblood of Vaelux so any member unwilling to make an effort to build them isn't right for us.
                                            </li>
                                            <li>
                                                Every Prospect must have joined our Discord server and at least one of our in-game clans before they can be considered for Membership. Failure to do this demonstrates a complete lack of commitment to even the most basic of community interaction. If the only game you play with us has no formal in-game community features, using our approved clan tag is sufficient. If even that is not possible within the game, this requirement can be waived at our discretion.
                                            </li>
                                            <li>
                                                Activity requirements for Prospects are more strict than for Members. Any Prospect out-of-contact for a week or more is at risk of being pruned. A pruned Prospect may reapply at any time to start the process over. If you know you will be away for over a week, please let an Officer know why and when you will be back.
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="indent-section">
                                <h2>Divisions</h2>
                                <hr/>

                                <p>
                                    Every member of Vaelux is a member in every game we play. You're allowed to hop between games as much as you want and are encouraged to try new games with your friends here. Most members will play multiple games with each other, even if they spend most of their time in a single, main game.
                                </p>

                                <!--
                                <p>
                                    However, if enough members form a serious-enough community in a given game, we may create a more formal Division for it. How this looks, exactly, depends on each game and the members playing it. But it will generally include one or more dedicated Officers responsible for overseeing the functions of the Division and dedicated services such as separate chat channels or private servers.
                                </p>

                                <p>
                                    Each Division may have different requirements for activity that may be more stringent than Vaelux's global requirements. This allows a more hardcore group of members to play at a higher level and to avoid extra administrative overhead. Thus, members will generally be required to explicitly apply for membership in a Division to demonstrate their commitment. The Division's Officers will be responsible for setting these goals and rules and for managing the Division's members and applicants.
                                </p>

                                <p>
                                    If a non-member wants to join one of our Divisions specifically, they must go through our normal application process, first. They may go through the Division's application process, if any, at the same time.
                                </p>

                                <p>
                                    Every member of a Division is equally a member of Vaelux proper. There is no such thing as a member of a Division and not of our core community. Additionally, if a Division exists for a game, there will be a separate in-game group for regular Members, just as if there was no Division. This allows every member to enjoy the game without having to meet higher activity requirements and without inadvertently dragging down the hardcore players.
                                </p>
                                -->

                            </div>

                        </div>

                        <div class="tab-pane" id="leadership">

                            <div class="indent-section">
                                <h1>Leadership</h1>
                                <hr>

                                <p>
                                    Vaelux takes a progressive approach to leadership which enables both members and officers to work more effectively and to get more out of what they contribute. There are two major pillars to our philosophy:
                                </p>
                            </div>

                            <div class="indent-section">
                                <h2>Servant Leadership</h2>
                                <hr>

                                <p>
                                    Servant leadership is a management philosophy that reverses the traditional leader-follower valuation. Rather than seeing leaders as the most important and powerful part of an organization, members are given priority. Members' fulfillment and health are the end goals of such an arrangement, rather than fulfilling a leader's desire for control or prestige.
                                </p>

                                <p>
                                    In this scheme, all leaders are given their power by the membership; entrusted with greater power to act in the best interest of the community. This position of leadership is one of service to the community. It often entails personal sacrifice by leaders for the greater good. Anyone stepping up to be an leader in our community must understand and comply with this philosophy.
                                </p>
                            </div>

                            <div class="indent-section">
                                <h2>Personal Responsibility</h2>
                                <hr>

                                <p>
                                    As we practice Servant Leadership, each member starts from a place of greater responsibility than in many communities. Membership with us is more demanding because we trust and empower our members more. This means you must take greater responsibility for and ownership over the things you want to do or should be doing. If you want to see more events, consider hosting them yourself. If you disagree with a policy, speak up. If you have an idea, share it and be ready to stand behind it.
                                </p>

                                <p>
                                    Similarly, if you make a commitment, it's on you to fulfill it. Having greater ownership over the evolution of the community will lead to more fulfilled members but it won't work if you aren't willing to participate.
                                </p>
                            </div>

                        </div>

                        <div class="tab-pane" id="faq">

                            <div class="indent-section">
                                <h1>FAQ And Miscellany</h1>
                                <br>


                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                                    What kind of playstyles do you cater to?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse">
                                            <div class="hr-after-1"></div>
                                            <div class="hr-after-2"></div>
                                            <div class="hr-after-3"></div>
                                            <div class="hr-after-4"></div>
                                            <div class="panel-body">
                                                <p>
                                                    We try to be as inclusive as possible but we may not be right for everyone. Often, we will not provide the kind of ultra-hardcore, achievement-minded activity that you find in more specialized communities. Conversely, if you're just looking for a group to use its bank or you have no interest in engaging with the community outside of your current game, we may be too socially demanding for you.
                                                </p>

                                                <p>
                                                    We try to strike a balance between being accommodating to less-than-hardcore players while also striving for effective, team-oriented gameplay. We believe any player can be taught to be competitive but also that being forcibly forged into a world-class player isn't what many people want from their time in-game.
                                                </p>

                                                <p>
                                                    If you have questions about our activity in a specific game, please contact an Officer.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                                    You say you're "semi-casual". What does that mean?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="hr-after-1"></div>
                                            <div class="hr-after-2"></div>
                                            <div class="hr-after-3"></div>
                                            <div class="hr-after-4"></div>
                                            <div class="panel-body">
                                                <p>
                                                    We're "semi-casual" insofar as we aren't strictly "hardcore". We take our gameplay seriously but we take our community more seriously. First and foremost, every member should be making friends and having fun with us. After that, every member should be striving to play as competently as they can and doing what they can to support their teammates. We won't be requiring people to make daily raids or to maintain certain ranks in-game. However, we hope that members will be active daily and enjoying both self-driven content with each other and attending our frequent community events.
                                                </p>

                                                <p>
                                                    Team-driven gameplay is very important to us. If you're not a team player, either because you just want to be left alone to solo all the time or you're too arrogant to function within a team, your membership with us will be short-lived. It is each member's responsibility to ensure they aren't a detriment to whatever team they're on. We make every effort to help our guildmates progress in each game but we will ultimately not carry dead weight. We may not require you to meet specific standards but it's no fun for anyone if you refuse to contribute to our goals.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                                    What kind of opportunities are there for me to contribute out-of-game?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="hr-after-1"></div>
                                            <div class="hr-after-2"></div>
                                            <div class="hr-after-3"></div>
                                            <div class="hr-after-4"></div>
                                            <div class="panel-body">
                                                <p>
                                                    We place a high value on members' out-of-game contributes through two avenues:
                                                </p>

                                                <p>
                                                    We encourage every member to help shape the community through providing feedback and ideas as well as taking the initiative to sponsor their own events and projects. However, if you're even more interested in community management, becoming a Volunteer or Officer is one option. We believe in enabling our community leaders through transparency, responsibility, and autonomy. Our leadership is highly capable and we want them to grow as leaders rather than be relegated to following rote orders.
                                                </p>

                                                <p>
                                                    We also highly value contributing our time and expertise back to the greater gaming community. This can take a lot of forms from writing software to writing guides to creating art. If you have a special talent that can be used to either educate people or enhance players' enjoyment of a game, we want to enable you to pursue that. You can find more information at // TODO.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="tab-pane" id="credits">

                            <div class="indent-section">
                                <h1>Credits</h1>
                                <hr>

                                <p>
                                    Below are acknowledgements and attributions of the content used throughout our website.
                                </p>
                            </div>

                            <div class="indent-section">
                                <hr/>

                                <ul>
                                    <li>Web design and development by Vaelux</li>
                                    <li><a href="https://www.phpbb.com/" target="_blank">phpBB</a>® Forum Software © phpBB Limited</li>
                                    <li>Vaelux-Dark based on <a href="https://www.phpbb.com/customise/db/style/prosilver/" target="_blank">prosilver</a></li>
                                    <li><a href="https://www.mediawiki.org/wiki/MediaWiki" target="_blank">MediaWiki</a></li>
                                    <li><a href="https://laravel.com/" target="_blank">Laravel</a></li>
                                    <li><a href="https://jquery.com/" target="_blank">jQuery</a></li>
                                    <li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
                                    <li><a href="http://fontawesome.io/" target="_blank">Font Awesome</a></li>
                                    <li><a href="http://andrelgava.github.io/font-awesome-extension/" target="_blank">Font Awesome Extension</a></li>
                                    <li><a href="https://fonts.google.com" target="_blank">Google Fonts</a></li>
                                    <li><a href="https://github.com/flesler/jquery.scrollTo" target="_blank">jQuery.ScrollTo</a></li>
                                    <li><a href="https://github.com/MoOx/pjax" target="_blank">MoOx pjax</a></li>
                                    <li><a href="https://fullcalendar.io" target="_blank">FullCalendar</a></li>
                                    <li><a href="https://bgrins.github.io/spectrum/" target="_blank">Spectrum</a></li>
                                    <li><a href="http://momentjs.com/" target="_blank">Moment.js</a></li>
                                    <li><a href="http://www.bootstraptoggle.com/" target="_blank">Bootstrap Toggle</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(function()
            {
                $('.navbar-nav li').removeClass('active');
                $('.navbar-nav .nav-about').addClass('active');

                $('.panel-heading').click(function(){
	                $(this).find('.panel-title').css('animation', 'none');
	                void this.offsetWidth;
                	$(this).find('.panel-title').css('animation', 'chroma-unsplit 0.35s ease');
                })
            });
        </script>
    </div>

@endsection
