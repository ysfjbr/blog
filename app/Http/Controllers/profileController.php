<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('profiles.index',  compact('user'));
    }

    public function edit(User $user)
    {
        return view('profiles.edit',   compact('user'));
    }

    public function reorder(User $user)
    {
        return view('profiles.edit_order',   compact('user'));
    }
    
    public function update(User $user)
    {
        if(request("POrder")!= null)
        {
            $order = explode(",",request("POrder"));
            $n=count($order);
            foreach($order as $id)
            {
                auth()->user()->posts()->find($id)->update(['order' => $n--]);
            }
            return redirect("/profile/$user->id");
        }
        $data = request()->validate([
            'title'     => 'required',
            'desc'      => 'required',
            'url'       => '',
            'tel'       => '',
            'address'   => '',
            'youtube'   => '',
            'facebook'  => '',
            'twitter'   => '',
            'linkid'    => '',
            'image'     => 'image',
        ]);

        //auth()->user()->update(['name' => $data['title']]);
        
        if(request('image'))
        {
            $imagePath = request('image')->store('profile','public');
            $data = array_merge($data,['image'=> $imagePath]);
        }

        auth()->user()->profile()->update($data);
        
        return redirect("/profile/$user->id");
    }
}
