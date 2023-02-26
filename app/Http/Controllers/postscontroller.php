<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class postscontroller extends Controller
{
    
    function getposts(){
        $posts= post::get();
        return view('post', ['posts' => $posts]);
    }

    function viewpost($post_id){
        // $post = DB::table('posts')
        //     ->join('creators', 'posts.Posted_By', '=', 'creators.Id')
        //     ->select('posts.*', 'creators.Name', 'creators.Email')
        //     ->where('posts.Id','=',$post_id)
        //     ->get();
        $post = post::join('creators', 'posts.Posted_By', '=', 'creators.Id')
               ->where('posts.Id','=',$post_id)
               ->get(['posts.*', 'creators.Name', 'creators.Email']);

            return view('viewpost',['post'=> $post[0]]);
    }
}
