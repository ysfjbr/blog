@extends('layouts.app-welcome')
<!-- Public Page  -->
@section('content')
    <cprofile :profile="{{ $user->profile->toJson() }}" pcount="{{ $user->posts->count() }}" userid="{{ $user->id }}" editable="false"></cprofile>
    
    <section class="section bg-light" id="blog">
            <div class="container">   
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2> بعض <span class="font-weight-bold">الأعمال</span></h2>
                            <!-- <p class="text-muted mx-auto section-subtitle mt-3">It is a long established fact that a reader will be of a page when established fact looking at its layout.</p> -->
                        </div>
                    </div>
                </div>                 
                <div class="row mt-5">
                
                @foreach($user->posts as $post)
                @if($post->online == '1')
                <?php parse_str( parse_url( $post->url, PHP_URL_QUERY ), $vars ); ?>
                <cpost :post="{{ $post->toJson() }}" youtubeid="https://www.youtube.com/embed/{{ $vars['v'] }}" editable="false"></cpost>
                @endif
                @endforeach

            </div>
        </div>
    </section>
    <a href="#" class="back_top"> <i class="mdi mdi-chevron-up"> </i> </a>

    <ccontact :profile="{{ $user->toJson() }}"></ccontact>
    <cfooter :profile="{{ $user->profile->toJson() }}"></cfooter>
        
@endsection