@extends('layouts.admin')

@section('content')
<form id="contact_us" method="post" action="javascript:void(0)" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Name</label>
      <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
      <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group">
      <label for="email">Email Id</label>
      <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
      <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>   
    
    <div class="form-group">
        <input type="file" name="picture" id="pic">
    </div>


    <div class="form-group">
      
        <div class="row">
           <div class="col-12">
            <h4 class="heading">Role</h4>
           </div>
            <div class="form-group  mx-sm-3 mb-2">
                <div class="radio">
                    <label>
          <input type="radio" name="radioRole" value="2" checked="checked"> Subscriber
          <span class="checkmark"></span>
          </label>
                </div>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <div class="radio">
                    <label>
          <input type="radio" name="radioRole" value="1"> Admin
          <span class="checkmark"></span>
          </label>
                </div>
            </div>
    
    </div>

   
    <div class="form-group">
      
        <div class="row">
           <div class="col-12">
            <h4 class="heading">Status</h4>
           </div>
            <div class="form-group  mx-sm-3 mb-2">
                <div class="radio">
                    <label>
          <input type="radio" name="status" value="2" checked="checked"> In Active
          <span class="checkmark"></span>
          </label>
                </div>
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <div class="radio">
                    <label>
          <input type="radio" name="status" value="1"> Active
          <span class="checkmark"></span>
          </label>
                </div>
            </div>
    
    </div>
   
    <div class="alert alert-success d-none" id="msg_div">
            <span id="res_message"></span>
    </div>
    <div class="form-group">
     <button type="submit" id="send_form" class="btn btn-success">Submit</button>
    </div>
  </form>

@endsection


@section('footer')

<script>


      $(function(){

        $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
      // $('#send_form').html('Sending..');

       $('#contact_us').on('submit',function(){
        event.preventDefault();
        // var file_data = $('#pic').prop('files')[0];
        // var form_data = new FormData();
        // form_data.append('file', file_data);
      
        $.ajax({
         url: '/admin/users' ,
         type: "POST",
         data: new FormData($(this)[0]),       
        contentType : false,
        processData : false,
         success: function( response ) {
             $('#send_form').html('Submit');
             $('#res_message').show();
             $('#res_message').html(response.msg);
             $('#msg_div').removeClass('d-none');
  
            // document.getElementById("contact_us").reset(); 
             setTimeout(function(){
             $('#res_message').hide();
             $('#msg_div').hide();
             },10000);
         }
       });
       
       })
       
      })
     
   

 </script>

@endsection