<?php

namespace App\Http\Controllers;

use App\Picture;
use App\User;
use Illuminate\Http\Request;
use DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if ($request->ajax()) {
        //     $users = User::latest()->get();

            
        //     $data=array();

        //     foreach($users as $user){
        //         $item =[];
        //         $item['id']=$user->id;
        //         $item['name']=$user->name;
        //         $item['email']=$user->email;

        //         $imgFile=!empty($user->photo)?$user->photo->path:'no Image';

        //         $item['profile_pic']=$imgFile;
        //         $item['role']='Subscriber';
        //         $item['status']='InActive';
        //         if($user->role_id === 1){
        //             $item['role']='Admin';
        //         }
        //         if($user->is_active === 1){
        //             $item['status']='Active';
        //         }
        //         $item['created_at']=$user->created_at->diffForHumans();
        //         $item['updated_at']=$user->updated_at->diffForHumans();
        //         $data[]=$item;
        //     }
            
        //     return Datatables::of($data)
        //             ->addIndexColumn()
                   
        //             ->rawColumns(['action'])
        //             ->make(true);
        // }
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {

            if( $file = $request->file('picture')){

                $new_name = time() . $file->getClientOriginalName();   
                
               
                $file->move('images',$new_name);

                $photo = new Picture();
                $photo->path= $new_name;
                $photo->save();
                $photoId= $photo->id;
            }

                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->role_id = $request->radioRole;
                $user->is_active = $request->status;
                $user->password =md5('12345678');
                $user->picture_id=$photoId;
                $user->save();

                $InsertID=$user->id;

                    $arr=['msg'=>"User has been created successfully",'status'=>true];
                if(empty($InsertID)){
                    $arr=['msg'=>"Something gose to wrong,Please try again leter",'status'=>false];
                }
                   
                return Response()->json($arr);
        }
       
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
}
