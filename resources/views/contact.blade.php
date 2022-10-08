@extends('layouts.main')

@section('content')
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <article class="page">
                    <div class="entry-content">

                        <div class="container m-t-32">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="heading-block">
                                        <h1 class="block-size-1 text-center">
                                            {{ $contact->title }}
                                        </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-25">
                                <div class="col-sm-4 text-center">
                                    <div class="content-box-wrap">
                                        <div class="single-image m-b-15">
                                            <figure class="figure">
                                                <img src="{{ asset('images/other/mobile.png') }}" alt="Mobile">
                                            </figure>
                                        </div>
                                        <div class="content-box text-center">
                                            <h6>{{ $contact->phone }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="content-box-wrap">
                                        <div class="single-image m-b-15">
                                            <figure class="figure">
                                                <img src="{{ asset('/images/other/envelope.png') }}" alt="Email">
                                            </figure>
                                        </div>
                                        <div class="content-box">
                                            <h6>{{ $contact->email }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="content-box-wrap">
                                        <div class="single-image m-b-15">
                                            <figure class="figure">
                                                <img src="{{ asset('/images/other/map.png') }}" alt="Address">
                                            </figure>
                                        </div>
                                        <div class="content-box">
                                            <h6>{{ $contact->address }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row m-t-40">
                                <div class="col-sm-12">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                    <div role="form" class="kraftcf">
                                        <form action="{{ route('contact.us.store') }}" method="post" class="kraftcf-form">
                                            {{ csrf_field() }}
                                            <div class="contact-form-main">
                                                <div class="contact-form-fields-wrap clearfix">
                                                    <div class="contact-form-fields">
                                                                    <span class="kraftcf-form-control-wrap name">
                                                                        <input type="text" name="name" value="{{ old('name') }}" size="40" class="kraftcf-form-control kraftcf-text kraftcf-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                                        @if ($errors->has('name'))
                                                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                                                        @endif
                                                                    </span>
                                                    </div>
                                                    <div class="contact-form-fields">
                                                                    <span class="kraftcf-form-control-wrap email">
                                                                        <input type="email" name="email" value="{{ old('email') }}" size="40" class="kraftcf-form-control kraftcf-text kraftcf-email kraftcf-validates-as-required kraftcf-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                                         @if ($errors->has('email'))
                                                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                                                        @endif
                                                                    </span>
                                                    </div>
                                                    <div class="contact-form-fields">
                                                                    <span class="kraftcf-form-control-wrap subject">
                                                                        <input type="text" name="subject" size="40" class="kraftcf-form-control kraftcf-text" placeholder="Subject" value="{{ old('subject') }}">
                                                                          @if ($errors->has('subject'))
                                                                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                                                                            @endif
                                                                    </span>
                                                    </div>
                                                </div>
                                                <p>
                                                                <span class="kraftcf-form-control-wrap message">
                                                                    <textarea name="message" cols="40" rows="10" class="kraftcf-form-control kraftcf-textarea kraftcf-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message*">{{ old('message') }}</textarea>
                                                                     @if ($errors->has('message'))
                                                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                                                    @endif
                                                                </span>
                                                </p>
                                                <p>
                                                    <input type="submit" value="SEND MESSAGE" class="kraftcf-form-control kraftcf-submit">
                                                </p>
                                            </div>
                                        </form>
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
