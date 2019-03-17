<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostsController extends Controller {

    public function create() {
        return view('admin.posts.post');
    }

    public function storePost(Request $request) {

        $r = request();
        $this->validate($r, [
            'title' => 'required',
            'slug' => 'unique:posts',
            'content' => 'required',
            'type' => 'required',
            'dateTime' => 'required'
        ]);

        if (!$request->file('image')) {
            $post = new Post;
            $post->title = $request->title;
            $post->slug = str_slug($request->title, "-");
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->type = implode(',', $request->type);
            $post->dateTime = $request->dateTime;
            $post->save();
            return redirect('posts/create')->with('message', 'post insert Successfully');
        } else {
            $image = $request->file('image');
            $uploadPath = 'public/images/posts/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $post = new Post;
            $post->title = $request->title;
            $post->slug = str_slug($request->title, "-");
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->image = $imageUrl;
            $post->type = implode(',', $request->type);
            $post->dateTime = $request->dateTime;
            $post->save();
            return redirect('posts/create')->with('message', 'post insert Successfully');
        }
    }

    /* Show post 27-1-2019*/

    public function showPost() {
        $data['posts'] = Post::where('status',0)->orWhere('status',NULL)->paginate(10);
        return view('admin.posts.post_list', $data);
    }

    /* edit post */

    public function editPost($id) {
        $data['post'] = Post::find($id);
        return view('admin.posts.update_post', $data);
    }

    /* update post */

    public function updatePost(Request $request, $id) {
        $r = request();
        $this->validate($r, [
            'title' => 'required',
            'slug' => 'unique:posts,slug,' . $id,
            'content' => 'required',
            'type' => 'required',
            'dateTime' => 'required'
        ]);


        if (!$request->file('image')) {
            $post = Post::find($id);
            $post->title = $request->title;
            $post->slug = str_slug($request->title, "-");
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->type = implode(',', $request->type);
            $post->dateTime = $request->dateTime;
            $post->save();
            return redirect('posts/list')->with('message', 'post update Successfully');
        } else {
            $post = Post::find($id);
            $image = $request->file('image');
            $uploadPath = 'public/images/posts/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $imageun = $post->image;
            @unlink('public/images/posts/' . $imageun);
            $post->title = $request->title;
            $post->slug = str_slug($request->title, "-");
            $post->summary = $request->summary;
            $post->content = $request->content;
            $post->type = implode(',', $request->type);
            $post->dateTime = $request->dateTime;
            $post->image = $imageUrl;
            $post->save();
            return redirect('posts/list')->with('message', 'post update Successfully');
            
        }
    }

    /*Delete Post 27-1-2019*/
    public function deletePost($id)
    {
        $post = Post::where('id',$id)->update(['status'=>1]);
         return redirect('posts/list')->with('message', 'Delete Successfully'); 
    }

}
