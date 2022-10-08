@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article class="page">
                    <div class="entry-content">

                        <div class="container m-t-25">
                            <div class="row">
                                <div class="col-md-12 offset-lg-2 col-lg-8 ">
                                    <div class="heading-block text-center">
                                        <h1 class="block-size-2">
                                            I’m <strong>Kendrick Lamar,</strong> a UK based <strong>Graphic</strong> <strong>Designer.</strong>
                                        </h1>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="container m-t-32 m-b-100">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="portfolio-wrap">
                                        <!-- Portfolio Filter -->
                                        <div id="filters-container" class="cbp-l-filters-text m-b--25">
                                            <div data-filter="*" class="cbp-filter-item cbp-filter-item-active">
                                                All
                                            </div>
                                            <div data-filter=".branding" class="cbp-filter-item">
                                                Branding
                                            </div>
                                            <div data-filter=".poster" class="cbp-filter-item">
                                                Poster
                                            </div>
                                            <div data-filter=".illustration" class="cbp-filter-item">
                                                Illustration
                                            </div>
                                            <div data-filter=".logo" class="cbp-filter-item">
                                                Logo
                                            </div>
                                        </div>

                                        <!--End #filters-container-->
                                        <div id="portfolio-container-grid" class="cbp cbp-caption-fadeIn  cbp-caption-custom-overlay"
                                             data-loadmoreaction="click" data-loadnoofitems="1" data-layoutmode="masonry" data-captionanimation="custom-overlay" data-animationtype="fadeOut"
                                             data-gaphorizontal="40" data-gapvertical="50" data-displaytype="default" data-large-desktop="2" data-tablet-landscape="2" data-tablet-portrait="2" data-mobile="1"
                                             data-defaultfilter="*" >

                                            @foreach($projects as $project)
                                                <div class="cbp-item  art {{ strtolower($project->type) }}">
                                                    <a class="cbp-caption" href="/project/{{ $project->id }}">
                                                        <div class="cbp-caption">
                                                            <div class="cbp-caption-defaultWrap">
                                                                <img src="/cover/{{ $project->cover }}" class="portfolio-thumbnail" alt="{{ $project->title }}" >
                                                            </div>

                                                            <div class="cbp-caption-activeWrap">
                                                                <div class="cbp-l-caption-alignCenter">
                                                                    <div class="cbp-l-caption-body">
                                                                        <div class="cbp-l-caption-title">
                                                                            <img src="{{ asset('images/svg/overlay-arrow.svg') }}" class="icon-arrow" alt="overlay-arrow">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cbp-l-grid-agency-title alignCenter">{{ $project->title }}</div>
                                                        <div class="cbp-l-grid-agency-desc alignCenter">{{ $project->type }}</div>
                                                    </a>
                                                </div>
                                            @endforeach



                                        </div><!--End #grid-container-->
                                    </div>
                                </div>
                            </div>
                        </div>    <!--grid-container-->

                        <div class="container m-b-100">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="cta style-2">
                                        <h1>
                                            Got something interesting?
                                        </h1>
                                        <div class="btn-container solid">
                                            <a href="{{ url('/contact') }}" title="GET IN TOUCH">GET IN TOUCH</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </article>
            </main><!-- #main -->
        </div><!-- #primary -->
        <a id="gotoTop" href="#" class="scroll-top-link" data-easing="easeOutQuad" data-speed="700" ><i class="fa fa-angle-up"></i></a>
    </div><!-- #content -->
@endsection
