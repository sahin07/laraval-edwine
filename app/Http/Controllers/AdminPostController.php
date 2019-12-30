<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Picture;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

           
        $user = Auth::user();

        if($file=$request->file('postThumb')){

            $new_name = time().$file->getClientOriginalName();
            $file->move('images',$new_name);
            $photo = new Picture();

            $photo->path= $new_name;
            $photo->save();
            $photoId=$photo->id;

        }

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category_id = $request->cate_id;
        $post->photo_id = $photoId;
       
        $user->post()->save($post);

        return redirect('admin/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::findOrFail($id);

       
        unlink(public_path().$post->photo->path);

        $post->delete();

        return redirect('admin/posts');
    }

    public function post($slug){

        
        $post= Post::where('slug',$slug)->first();

        $comments =[];

        if(!empty($post)){
            $comments = $post->comments()->whereIsActive(1)->get();
        }
       

        return view('post',compact('post','comments'));
    }
}
