@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-12">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/dashboard') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/admin/contact') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/social') }}">Socials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/email') }}">Emails</a>
                    </li>
                </ul>

                <br>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
                        <li class="breadcrumb-item"><a href={{ url('/admin/contact') }}>Contacts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">
                        Edit Contact
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form method="post" action="{{ route('contact.update', $contact->id ) }}" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label for="country_name">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $contact->title }}"/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="country_name">Phone:</label>
                                <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}"/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="country_name">Email:</label>
                                <input type="text" class="form-control" name="email" value="{{ $contact->email }}"/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="country_name">Address:</label>
                                <input type="text" class="form-control" name="address" value="{{ $contact->address }}"/>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update Contact</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
