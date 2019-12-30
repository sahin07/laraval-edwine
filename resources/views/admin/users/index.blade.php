@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-body">
        <table class="table table-striped data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Profile Picture</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Created at</th>                   
                    <th>Role</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
    
@endsection

@section('footer')

<script>
//    $(function () {
     
//      $.ajaxSetup({
//          headers: {
//              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//          }
//    });
   
//    var table = $('.data-table').DataTable({
//        processing: true,
//        serverSide: true,
//        ajax: "{{ route('users.index') }}",
//        columns: [
//            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
//            {
//             targets: 9,
//             title: 'Picture',
//             data: 'profile_pic',
//             orderable: false,
//             render: function(data, type, row, meta) {
//                 var assetBaseUrl = "{{ asset('') }}";
//                 return `<img src="${assetBaseUrl+'images/'+data}" height="100px"/>`;
//             }
//            },
//            {data: 'name', name: 'name'},
//            {data: 'email', name: 'email', title: "Email" },
//            {data: 'created_at', name: 'created_at', title: "Created At" },          
//            {data: 'status', name: 'status', title: "Status" },
//            {data: 'role', name: 'role', title: "Role" },
//            {
//         targets: 9,
//         title: 'Actions',
//         data: 'id',
//         orderable: false,
//         render: function(data, type, row, meta) {
//           return `<span id="editButton" onClick="editList(${data})" data-original-title="Edit"><button type="button" class="btn btn-gradient-danger btn-sm"> <i class="mdi mdi-tooltip-edit"></i> </button></span>
//                   <span id="delButton" data-toggle="modal"  onClick="showModalDelete(${data})"  data-original-title="Close">
//                     <button type="button" class="btn btn-gradient-primary btn-sm">
//                   <i class="mdi mdi-delete-sweep"></i> 
//                   </button></span>
//                   <a href="javascript:void(0)" data-toggle="modal" onClick="splitList(${data})" data-original-title="Split"> <i class="fa fa-columns"></i> </a>`;
//         }
//       }
//        ]
//    });
    

    
//  });
     
   </script>
    
@endsection