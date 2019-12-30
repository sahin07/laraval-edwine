<?php

namespace App\Http\Controllers;

use App\Replies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRepliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function createReplies(Request $request)
    {
        $user = Auth::user();

        $craeteComment = new Replies;
        $craeteComment->comment_id= $request->comment_id;
        $craeteComment->body= $request->body;
        $craeteComment->author= $user->name;
        $craeteComment->email = $user->email;
        $craeteComment->photo= $user->photo ? $user->photo->path:'http://placehold.it/900x300';
        $craeteComment->save();

        $request->session()->flash('craete_comment','Your Message Successfully created');

        return redirect()->back();
    }
}
