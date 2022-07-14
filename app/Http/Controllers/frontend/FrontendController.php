<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Comment;

class FrontendController extends Controller
{
    public function viewByCategory(string $category_slug){

        $category = Category::where('slug',$category_slug)->where('status','1')->first();

        if($category){
            $posts = Post::withCount('comments')->where('category_id',$category->id)->where('status','1')->paginate(10);

        }
        else{
            return redirect(url('/'));
        }
        return view('frontend.category.index', compact('posts','category'));
    }

    public function viewByPost(string $category_slug, string $post_slug){
        $category = Category::where('slug',$category_slug)->where('status','1')->first();

        if($category){
            $post = Post::withCount('comments')->where('category_id',$category->id)->where('slug',$post_slug)->where('status','1')->first();
            if($post){
                $comments = Comment::with('user')->where('post_id',$post->id)->latest()->paginate(3);
                return view('frontend.post.index', compact('post','comments'));
            }
            else{
                return redirect(url('/'));
            }
        }
    }
}
