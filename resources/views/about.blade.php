@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article class="page">
                    <div class="entry-content">
                        <div class="container">
                            <div class="row m-b-90">
                                <div class="col-sm-12 p-x-25 m-t-50">
                                    <div class="heading-block text-left">
                                        <h1 class="block-size-1 sub-size text-center">
                                            {{ $about->title }}
                                        </h1>
                                    </div>
                                    <div class="text-block text-left mb-35 text-center">
                                        <p>
                                            {{ $about->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </main><!-- #main -->
        </div><!-- #primary -->
        <a id="gotoTop" href="#" class="scroll-top-link" data-easing="easeOutQuad" data-speed="700"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection
