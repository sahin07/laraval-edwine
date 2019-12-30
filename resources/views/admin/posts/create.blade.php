@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Content</label>
                <input type="text" name="content" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>

              <div class="form-group">
                <select name="cate_id" >
                    <option value="1">Php</option>
                    <option value="2">Javascript</option>                   
                  </select>
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                 <input type="file" name="postThumb" id="fileToUpload">

              </div>


            <input type="submit" value="Save" name="submit">
        </form>
    </div>
</div>
@endsection