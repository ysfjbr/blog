@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf 
        <div class="row">
            <h1>Create Post</h1>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">Title</label>
                <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title" 
                        value="{{ old('title') }}" 
                        autocomplete="title" autofocus>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        
        <div class="form-group row">
            <label for="desc" class="col-md-4 col-form-label">Description</label>
                <textarea id="desc" 
                        type="text" 
                        class="form-control @error('desc') is-invalid @enderror" 
                        name="desc"  >{{ old('desc') }}</textarea>

                @error('desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        
        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">Youtube Link</label>
                <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url" 
                        value="{{ old('url') }}" >

                @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group row">
            <!-- <label for="image" class="col-md-4 col-form-label">Link Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror -->
            <input type="checkbox" class="" name="online" id="online">
            <label for="online" class="p-2">Online</label>
            
            @error('online')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group row">
            <span class="pr-3"><button class="btn btn-success" type="submit"> Add New Post </button></span>
            <span class="pr-3"><a class="btn btn-secondary" href="/profile/{{ auth()->user()->id }}"> Cancel </a></span>
        </div>

    </form>
</div>
@endsection
