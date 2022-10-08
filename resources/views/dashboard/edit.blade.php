@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href={{ url('/') }}>Home</a></li>
                    <li class="breadcrumb-item"><a href={{ url('/admin/dashboard') }}>Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Edit Project
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
                        <form method="post" action="{{ route('dashboard.update', $project->id ) }}" enctype="multipart/form-data">
                            <div class="form-group">
                                @csrf
                                @method('PATCH')
                                <label for="country_name">Title:</label>
                                <input type="text" class="form-control" name="title" value="{{ $project->title }}"/>
                            </div>
                            <div class="form-group mt-3">
                                <label for="cases">Type:</label>
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option selected>Select type</option>
                                    <option value="Branding" {{ $project->type == 'Branding' ? 'selected' : '' }}>Branding</option>
                                    <option value="Poster" {{ $project->type == 'Poster' ? 'selected' : '' }}>Poster</option>
                                    <option value="Illustration" {{ $project->type == 'Illustration' ? 'selected' : '' }}>Illustration</option>
                                    <option value="Logo" {{ $project->type == 'Logo' ? 'selected' : '' }}>Logo</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
                            </div>
                            <div class="form-group mt-3">
                                <label for="cases">Cover:</label>
                                <input type="file" name="cover" class="form-control" placeholder="image">
                                <img src="/cover/{{ $project->cover }}" width="300px" class="mt-3">
                            </div>
                            <div class="form-group mt-3">
                                <label for="cases">Body:</label>
                                <textarea class="summernote" name="body">{{ $project->body }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Update Project</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
