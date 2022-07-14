<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class FrontendCommentController extends Controller
{
    public function store(Request $request){
        if(auth()->check()){
            $post = Post::where('slug',$request->post_slug)
            ->where('status',1)->first();
            if($post){
                Comment::create([
                    "user_id"=>auth()->user()->id,
                    "post_id"=>$post->id,
                    "comment"=>$request->comment
                ]);
                return redirect()->back()->with('message',"Comment Added");
            }
            else{
                return redirect()->back()->with('message',"Something went wrong");
            }
        }
        else{
            return redirect()->route('login');
        }
    }
}
