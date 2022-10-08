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
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Social
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
                        <form method="post" action="{{ route('social.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3">
                                <label for="country_name">Icon:</label>
                                <select class="form-select" aria-label="Default select example" name="icon">
                                    <option selected>Select Icon</option>
                                    <option value='fab fa-behance'>&#xf1b4; fa-behance</option>
                                    <option value='fab fa-bitbucket'>&#xf171; fa-bitbucket</option>
                                    <option value='fab fa-dribbble'>&#xf17d; fa-dribbble</option>
                                    <option value='fab fa-facebook'>&#xf09a; fa-facebook</option>
                                    <option value='fab fa-github'>&#xf09b; fa-github</option>
                                    <option value='fab fa-instagram'>&#xf16d; fa-instagram</option>
                                    <option value='fab fa-linkedin'>&#xf0e1; fa-linkedin</option>
                                    <option value='fab fa-pinterest'>&#xf0d2; fa-pinterest</option>
                                    <option value='fab fa-quora'>&#xf2c4; fa-quora</option>
                                    <option value='fab fa-reddit'>&#xf1a1; fa-reddit</option>
                                    <option value='fab fa-skype'>&#xf17e; fa-skype</option>
                                    <option value='fab fa-slack'>&#xf198; fa-slack</option>
                                    <option value='fab fa-whatsapp'>&#xf232; fa-whatsapp</option>
                                    <option value='fab fa-youtube'>&#xf167; fa-youtube</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="cases">Link:</label>
                                <input type="text" name="link" class="form-control" placeholder="link">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Add Social</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
