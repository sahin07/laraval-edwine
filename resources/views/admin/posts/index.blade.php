@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
<table class="table table-striped data-table">
    <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>           
            <th>Content</th>
            <th>Created At</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($posts)
      
        @foreach ($posts as $key=>$post)
        <tr>
        <td>{{$key+1}}</td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category_id}}</td>
        <td> <img src="{{$post->photo ? $post->photo->path : 'No Image' }}"/></td>
        <td><a href="{{route('home.post',$post->slug)}}">{{$post->title}}</a></td>
        <td>{{$post->content}}</td>
        <td>{{$post->created_at}}</td>
        <td>
                        
        <form method="POST" action="{{route('admin.posts.destroy',$post->id)}}">
            @csrf
            <input type="hidden" name="_method" value="DELETE"/>
                <div class="form-group">
                    <input type="submit" class="btn btn-danger delete-user" value="Delete user">
                </div>
            </form>
        </td>
    </tr>
        @endforeach
            
        @endif
       
            
       
    </tbody>
</table>
    </div>
</div>
@endsection