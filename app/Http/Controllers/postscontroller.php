<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class postscontroller extends Controller
{
    
    function getposts(){
        // $posts = post::join('creators', 'posts.Posted_By', '=', 'creators.Id')
        // ->get(['posts.*', 'creators.Name', 'creators.Email']);
       
        $posts= post::paginate();
        return view('post', ['posts' => $posts]);
    }

    function viewpost($post_id){
        // $post = DB::table('posts')
        //     ->join('creators', 'posts.Posted_By', '=', 'creators.Id')
        //     ->select('posts.*', 'creators.Name', 'creators.Email')
        //     ->where('posts.Id','=',$post_id)
        //     ->get();

        // $post = post::join('creators', 'posts.Posted_By', '=', 'creators.Id')
        //        ->where('posts.Id','=',$post_id)
        //        ->get(['posts.*', 'creators.Name', 'creators.Email']);

        //     return view('viewpost',['post'=> $post[0]]);
        $post=post::where('id',$post_id)->get();
        return view('viewpost',['post'=> $post[0]]);
    }

    function create(){
        return view('create');
    }


    function store(Request $request)
    {
        $validated = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
        ]);

   $post_data = [
    'Title' => $request->input('Title'),
    'Description' => $request->input('Description'),
    'user_id'=> Auth::user()->id,
    // 'user_id'=> Auth::id(),
    ];
        // $values=$request->all();
        post::create($post_data);
        return redirect()->route('post.index');
    }


    function destroy($id)
    {
         post::where('id',$id)-> delete();
        return redirect()->route('post.index');
    }
    function update($id)
    {
        $post = post::find($id);
        return view('update', compact('post'));
    }

    function edit($id, Request $request)
    {
        $post = post::where('id',$id);
        $post->update($request->except(['_method', '_token']));
        return redirect()->route('post.index');
    }


    function getusers(){
        $users=User::paginate(5);
        return view('users',compact('users'));
    }


    
    function viewuser($user_id){
        $user=User::where('id',$user_id)->get();
        return view('userposts',compact('user'));
    }

}
