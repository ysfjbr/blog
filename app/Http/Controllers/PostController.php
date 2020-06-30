<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view ('posts.create');
    }

    public function edit(Post $post)
    {
        return view ('posts.edit', compact('post'));
    }

    public function store()
    {
        
        $data = request()->validate([
            "title"  => "required",
            "desc"  => "",
            "url" => "required",
            "online" => "",
        ]);
        
        $online = request("online") == null ? '0' : '1';
        $order = auth()->user()->posts()->count() +1;
        auth()->user()->posts()->create([
            "title"  => $data["title"],
            "desc"  => $data["desc"],
            "url"  => $data["url"],
            "online" => $online,
            "order" => $order,
        ]);

        return redirect("/profile/" . auth()->user()->id);
    }

    public function show(Post $post)
    {
        return view ("posts.show",compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'required',
            'desc'  => '',
            'url'   => 'required',
            'online'=> '',
        ]);

        $data["online"] = request("online") == null ? '0' : '1';
        
        $post->update($data);

        //Mail::to(auth()->user()->email)->send(new \App\Mail\NewUserWelcomeEmail($data));

        return redirect("/profile/$post->user_id"); 
    }

    public function delete(Post $post)
    {
        $id = $post->user_id;
        $post->delete();
        return "Deleted!!"; 
    }
}
