@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user-> id }}" enctype="multipart/form-data" method="post">
        @csrf 
        @method('PATCH')

        <div class="row">
            <h1>Edit Order</h1>
        </div>
        
        <drg :list = "{{ $user->posts->toJson() }}"></drg>

        <div class="form-group row">
            
            <span class="pr-3"><button class="btn btn-primary"> Update Profile </button></span>
            <span class="pr-3"><a class="btn btn-secondary" href="/profile/{{ auth()->user()->id }}"> Cancel </a></span>
        </div>

    </form>
</div>
@endsection
