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
                        <a class="nav-link" href="{{ url('/admin/contact') }}">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/admin/social') }}">Socials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin/email') }}">Emails</a>
                    </li>
                </ul>

                <br>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Socials</li>
                    </ol>
                </nav>

                <div class="card">
                    <div class="card-header">
                        <span>{{ __('Socials') }}</span>
                        <a href='{{ route('social.create') }}' class="btn btn-primary" style="float: right">Add</a>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="datatable" class="display responsive nowrap" style="width:100%">
                                <thead>
                                <tr>
                                    <td>Icon</td>
                                    <td>Link</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($socials as $social)
                                    <tr>
                                        <td><i class="{{$social->icon}}"></i></td>
                                        <td>{{$social->link}}</td>
                                        <td>
                                            <form action="{{ route('social.destroy', $social->id)}}" method="post">
                                                <a href="{{ route('social.edit', $social->id)}}" class="btn btn-primary">Edit</a>

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
