@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user-> id }}" enctype="multipart/form-data" method="post">
        @csrf 
        @method('PATCH')

        <div class="row">
            <h1>Edit Profile</h1>
        </div>

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">Title</label>
                <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror" 
                        name="title" 
                        value="{{ old('title') ?? $user->profile->title }}" 
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
                        name="desc"  >{{ old('desc')  ?? $user->profile->desc }}</textarea>

                @error('desc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        
        <div class="form-group row">
            <label for="tel" class="col-md-4 col-form-label">Telephone</label>
                <input id="tel" 
                        type="text" 
                        class="form-control @error('tel') is-invalid @enderror" 
                        name="tel" 
                        value="{{ old('tel') ?? $user->profile->tel }}" >

                @error('tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label">Address</label>
                <input id="address" 
                        type="text" 
                        class="form-control @error('address') is-invalid @enderror" 
                        name="address" 
                        value="{{ old('address') ?? $user->profile->address }}" >

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="facebook" class="col-md-4 col-form-label">Facebook URL</label>
                <input id="facebook" 
                        type="text" 
                        class="form-control @error('facebook') is-invalid @enderror" 
                        name="facebook" 
                        value="{{ old('facebook') ?? $user->profile->facebook }}" >

                @error('facebook')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="twitter" class="col-md-4 col-form-label">Twitter URL</label>
                <input id="twitter" 
                        type="text" 
                        class="form-control @error('twitter') is-invalid @enderror" 
                        name="twitter" 
                        value="{{ old('twitter') ?? $user->profile->twitter }}" >

                @error('twitter')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="Linkedin" class="col-md-4 col-form-label">LinkedIn URL</label>
                <input id="linkid" 
                        type="text" 
                        class="form-control @error('linkid') is-invalid @enderror" 
                        name="linkid" 
                        value="{{ old('linkid') ?? $user->profile->linkid }}" >

                @error('linkid')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="youtube" class="col-md-4 col-form-label">Youtube URL</label>
                <input id="youtube" 
                        type="text" 
                        class="form-control @error('youtube') is-invalid @enderror" 
                        name="youtube" 
                        value="{{ old('youtube') ?? $user->profile->youtube }}" >

                @error('youtube')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div class="form-group row">
            <label for="url" class="col-md-4 col-form-label">Keywords about website</label>
                <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url" 
                        value="{{ old('url') ?? $user->profile->url }}" >

                @error('tel')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        

        <div class="form-group row">
            
            <div class="col-4">
                <img src="/storage/{{ $user->profile->image }}" style="width:100%;" class="" alt="">
            </div>

            <div class="col-8">
                <label for="image">Profile Image</label>
                <input type="file" class="form-control-file" name="image" id="image">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            
            <span class="pr-3"><button class="btn btn-primary"> Update Profile </button></span>
            <span class="pr-3"><a class="btn btn-secondary" href="/profile/{{ auth()->user()->id }}"> Cancel </a></span>
        </div>

    </form>
</div>
@endsection
