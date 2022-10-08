@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <article class="portfolio">
                                <header class="entry-header text-center">
                                    <h2 class="entry-title">{{$project->title}}</h2>
                                    <div class="description">{{$project->type}}</div>
                                    <div class="entry-meta ">
                                        <div class="meta-desc">
                                            <p>{{$project->description}}</p>
                                        </div>
                                    </div>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <div class="media-wrap">
                                        <div id="portfolio-container-media" class="portfolio-media cbp" data-layoutmode="grid" data-displaytype="default" data-gaphorizontal="30" data-gapvertical="30" data-large-desktop="1" data-tablet-landscape="1" data-tablet-portrait="1" data-mobile="1" >

                                            <div class="cbp-item">
                                                <div class="cbp-caption-defaultWrap">
                                                    {!! $project->body !!}
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- .entry-content -->

                            </article>


                            <div class="portfolio-navigation-wrap">
                                <ul class="portfolio-navigation">
                                    <li class="portfolio-prev">
                                        @if($previous)
                                            <a href="{{ url( '/project/' . $previous ) }}" rel="prev">
                                                <span><i class="fa fa-arrow-left"></i> Prev</span>
                                            </a>
                                        @endif
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}">
                                            <img src="{{ asset('/images/svg/grid.svg') }}" alt="All Portfolio">
                                        </a>
                                    </li>
                                    <li class="portfolio-next">
                                        @if($next)
                                            <a href="{{ url( '/project/' . $next ) }}" rel="next">
                                                <span>Next <i class="fa fa-arrow-right"></i></span>
                                            </a>
                                        @endif
                                    </li>
                                </ul>
                            </div>

                            <div class="related-portfolio-post">
                                <h3>Other Works</h3>
                                <div class="portfolio-slider-wrap">
                                    <div id="portfolio-slider-container" class="cbp" >

                                        @foreach($related_projects as $related_project)
                                            <div class="cbp-item logo">
                                                <a class="cbp-caption" href="/project/{{ $related_project->id }}">
                                                    <div class="cbp-caption">
                                                        <div class="cbp-caption-defaultWrap">
                                                            <img src="/cover/{{ $related_project->cover }}" class="portfolio-slider-image" alt="{{$related_project->title}}">
                                                        </div>
                                                    </div>
                                                    <div class="cbp-l-grid-agency-title alignCenter">{{$related_project->title}}</div>
                                                    <div class="cbp-l-grid-agency-desc alignCenter">{{$related_project->type}}</div>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main><!-- #main -->
        </div><!-- #primary -->

        <a id="gotoTop" href="#" class="scroll-top-link" data-easing="easeOutQuad" data-speed="700" ><i class="fa fa-angle-up"></i></a>

    </div><!-- #content -->
@endsection
