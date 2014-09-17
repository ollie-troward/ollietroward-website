@extends('layouts.master')
@section('title')
Blog
@stop
@section('content')
<!-- HEADER -->
<header class="header">
    <div class="container">
        <div class="profile-content text-center">
            <h1 class="name">
                <a href="/">
                    Ollie Troward
                </a>
            </h1>

            <h2 class="desc">Blog</h2>
            <ul class="social list-inline">
                <li><a href="https://twitter.com/ollietroward"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/profile/view?id=272129027"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/ollie-troward"><i class="fa fa-github-alt"></i></a></li>
            </ul>
        </div>
        <!--//profile-->
    </div>
    <!--//container-->
</header><!--//header-->
<div class="container sections-wrapper">
    <div class="row">
        <div class="primary col-md-8 col-sm-12 col-xs-12">
            @foreach ($posts as $post)
            <section class="post section">
                <div class="section-inner">
                    <h2 class="heading">
                        <a href="/posts/{{ $post->id }}">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <div class="content">
                        {{ str_limit($post->body, $limit = 400, $end = '...') }}
                    </div>

                    <div class="text-right">
                        {{ $post->created_at }}
                    </div>

                    <a class="btn btn-cta-primary" href="/posts/{{ $post->id }}">
                        Read more
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </section>
            @endforeach

            <section class="paginate section text-center">
                {{ $posts->links() }}
            </section>
        </div>
        <!--//primary-->
        <div class="secondary col-md-4 col-sm-12 col-xs-12">
            <aside class="info aside section">
                <div class="section-inner">
                    <h2 class="heading sr-only">Basic Information</h2>

                    <div class="content">
                        <ul class="list-unstyled">
                            <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span> Oxfordshire,
                                United
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
        </div>
        <!--//secondary-->
    </div>
    <!--//row-->
</div><!--//masonry-->
@stop