@extends('layouts.app')
<!-- Edit Page -->
@section('content')
<div class="container">
    <cprofile :profile="{{ $user->profile->toJson() }}" pcount="{{ $user->posts->count() }}" userid="{{ $user->id }}" editable="true"></cprofile>
    @foreach($user->posts as $post)
    <?php parse_str( parse_url( $post->url, PHP_URL_QUERY ), $vars ); ?>
    <cpost :post="{{ $post->toJson() }}" youtubeid="https://www.youtube.com/embed/{{ $vars['v'] }}" editable="true"></cpost>
    @endforeach
</div>
@endsection
