@extends('layouts.app')

@section('content')
    <style>
        select {
            font-family: 'Lato', 'Font Awesome 5 Free', 'Font Awesome 5 Brands';
            font-weight: 900;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
                    <li class="breadcrumb-item"><a href={{ url('/admin/social') }}>Social</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Social
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form method="post" action="{{ route('social.update', $social->id ) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group mt-3">
                                <label for="country_name">Icon:</label>
                                <select class="form-select" aria-label="Default select example" name="icon">
                                    <option selected>Select Icon</option>
                                    <option value='fab fa-behance' {{ $social->icon == 'fab fa-behance' ? 'selected' : '' }}>&#xf1b4; fa-behance</option>
                                    <option value='fab fa-bitbucket' {{ $social->icon == 'fab fa-bitbucket' ? 'selected' : '' }}>&#xf171; fa-bitbucket</option>
                                    <option value='fab fa-dribbble' {{ $social->icon == 'fab fa-dribbble' ? 'selected' : '' }}>&#xf17d; fa-dribbble</option>
                                    <option value='fab fa-facebook' {{ $social->icon == 'fab fa-facebook' ? 'selected' : '' }}>&#xf09a; fa-facebook</option>
                                    <option value='fab fa-github' {{ $social->icon == 'fab fa-github' ? 'selected' : '' }}>&#xf09b; fa-github</option>
                                    <option value='fab fa-instagram' {{ $social->icon == 'fab fa-instagram' ? 'selected' : '' }}>&#xf16d; fa-instagram</option>
                                    <option value='fab fa-linkedin' {{ $social->icon == 'fab fa-linkedin' ? 'selected' : '' }}>&#xf0e1; fa-linkedin</option>
                                    <option value='fab fa-pinterest' {{ $social->icon == 'fab fa-pinterest' ? 'selected' : '' }}>&#xf0d2; fa-pinterest</option>
                                    <option value='fab fa-quora' {{ $social->icon == 'fab fa-quora' ? 'selected' : '' }}>&#xf2c4; fa-quora</option>
                                    <option value='fab fa-reddit' {{ $social->icon == 'fab fa-reddit' ? 'selected' : '' }}>&#xf1a1; fa-reddit</option>
                                    <option value='fab fa-skype' {{ $social->icon == 'fab fa-skype' ? 'selected' : '' }}>&#xf17e; fa-skype</option>
                                    <option value='fab fa-slack' {{ $social->icon == 'fab fa-slack' ? 'selected' : '' }}>&#xf198; fa-slack</option>
                                    <option value='fab fa-whatsapp' {{ $social->icon == 'fab fa-whatsapp' ? 'selected' : '' }}>&#xf232; fa-whatsapp</option>
                                    <option value='fab fa-youtube' {{ $social->icon == 'fab fa-youtube' ? 'selected' : '' }}>&#xf167; fa-youtube</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="cases">Link:</label>
                                <input type="text" name="link" class="form-control" placeholder="link" value="{{$social->link}}">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update Social</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
