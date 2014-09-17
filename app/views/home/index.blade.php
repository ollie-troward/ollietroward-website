@extends('layouts.master')
@section('title')
Hello
@stop
@section('content')
<!-- HEADER -->
<header class="header">
    <div class="container">
        <img class="profile-image img-circle pull-left" src="/images/profile.png" alt="Ollie Troward"/>

        <div class="profile-content pull-left">
            <h1 class="name">Ollie Troward</h1>

            <h2 class="desc">Web Developer</h2>
            <ul class="social list-inline">
                <li><a href="https://twitter.com/ollietroward"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/profile/view?id=272129027"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/ollie-troward"><i class="fa fa-github-alt"></i></a></li>
            </ul>
        </div>
        <!--//profile-->
        <a class="btn btn-cta-primary pull-right" href="mailto:ollie@ollietroward.com">
            <i class="fa fa-paper-plane"></i>
            Contact Me
        </a>
    </div>
    <!--//container-->
</header><!--//header-->
<div class="container sections-wrapper">
<div class="row">
<div class="primary col-md-8 col-sm-12 col-xs-12">
    <section class="about section">
        <div class="section-inner">
            <h2 class="heading">About Me</h2>

            <div class="content">
                <p>I've always been fascinated with Computers ever since I was young.
                    Fortunately, the Internet was booming when I was in my teens and having access to a platform to
                    freely express yourself
                    or gain further knowledge was pretty awesome.</p>

                <p>But now after really getting into the detail of how it all works, all I can say is the experience is
                    just becoming more enjoyable.
                    It's become a career path for me that can bring tough but rewarding problem solving, that has a very
                    open community for anyone that wants to get involved.
                </p>

                <p>Besides the coding, I enjoy watching/playing sports like Tennis and Swimming. I try to get out and
                    about as much as possible and even presented did a Student Radio Station at University.
                    Also I'm a bit of gamer, including watching streamers play them, which I find surprisingly relaxing.
                </p>

                <p>If you want to know more about me, there should be more than enough outside this box!</p>
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </section>
    <!--//section-->

    <section class="latest section">
        <div class="section-inner">
            <h2 class="heading">Latest Projects</h2>

            <div class="content">
                <div class="item featured text-center">
                    <h3 class="title"><a
                            href="#">Oops! Nothing here yet</a></h3>

                    <p class="summary">A few projects coming this way soon...</p>
                </div>
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </section>
    <!--//section-->

    <section class="experience section">
        <div class="section-inner">
            <h2 class="heading">Work Experience</h2>

            <div class="content">
                <div class="item">
                    <h3 class="title">Web Developer - <span class="place"><a href="https://turniton.co.uk/">Turn IT On!
                                Ltd</a></span> <span
                            class="year">(2013 - Present)</span></h3>

                    <p>Working in an agile environment with consistent sprints on multiple projects. Involved in
                        end-to-end of each project, including client analysis of requirements, architectural design,
                        production and testing.
                    </p>


                    <p>Developing new sustainable systems using web platforms written in PHP with the MVC pattern.
                        Consistently using a framework known as Laravel for new applications, running on a LAMP
                        stack.</p>

                    <p>Also transactional processing systems to broadcast useful data to other applications built with
                        T-SQL. This includes also a lot of tracking and custom logging between each to easily monitor
                        common business processes and patterns.
                    </p>
                </div>
                <!--//item-->
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </section>
    <!--//section-->
    <section class="github section">
        <div class="section-inner">
            <h2 class="heading">My GitHub</h2>

            <p>
                I don't have many public projects yet however my public activity will most definitely increase soon!
            </p>

            <div id="feed"></div>
        </div>
        <!--//secton-inner-->
    </section>
    <!--//section-->
</div>
<!--//primary-->
<div class="secondary col-md-4 col-sm-12 col-xs-12">
    <aside class="info aside section">
        <div class="section-inner">
            <h2 class="heading sr-only">Basic Information</h2>

            <div class="content">
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span> Oxfordshire, United
                        Kingdom
                    </li>
                    <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a
                            href="mailto:ollie@ollietroward.com">ollie@ollietroward.com</a>
                    </li>
                    <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a
                            href="#">http://ollietroward.com</a>
                    </li>
                </ul>
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </aside>
    <!--//aside-->

    <aside class="skills aside section">
        <div class="section-inner">
            <h2 class="heading">Skills</h2>

            <div class="content">
                <p class="intro">
                    Below are a few skills I find myself using a lot and becoming increasingly more confident to use.
                </p>

                <div class="skillset">

                    <div class="item">
                        <h3 class="level-title">PHP &amp; Laravel<span class="level-label" data-toggle="tooltip"
                                                                       data-placement="left" data-animation="true"
                                                                       title="">Pro</span>
                        </h3>

                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="96%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Javascript &amp; jQuery<span class="level-label">Experienced</span></h3>

                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="80%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">HTML5, CSS3, SASS &amp; LESS<span class="level-label">Experienced</span>
                        </h3>

                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="76%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <div class="item">
                        <h3 class="level-title">Ruby on Rails<span class="level-label">Apprentice</span></h3>

                        <div class="level-bar">
                            <div class="level-bar-inner" data-level="45%">
                            </div>
                        </div>
                        <!--//level-bar-->
                    </div>
                    <!--//item-->

                    <p><a class="more-link" target="_blank" href="https://coderwall.com/ollie-troward"><i
                                class="fa fa-external-link"></i> More on Coderwall</a></p>
                </div>
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </aside>
    <!--//section-->

    <aside class="education aside section">
        <div class="section-inner">
            <h2 class="heading">Education</h2>

            <div class="content">
                <div class="item">
                    <h3 class="title"><i class="fa fa-graduation-cap"></i> BSc Computing (2:1)</h3>
                    <h4 class="university">Southampton Solent University <span class="year">(2010-2013)</span></h4>
                </div>
                <!--//item-->
            </div>
            <!--//content-->
        </div>
        <!--//section-inner-->
    </aside>
    <!--//section-->

</div>
<!--//secondary-->
</div>
<!--//row-->
</div><!--//masonry-->
@stop