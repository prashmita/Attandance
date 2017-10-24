<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index()
    {
        $data =$this->permission->all();
         return view('permissions.index')->with(compact('data'));
    }

    public function add()
    {
        return view('permissions.add');

    }

    public function store(Request $request)
    {

        $data=[
            'permission_name'=>$request->input('permission_name')
        ];
       $this->permission->create($data);
        return redirect()->route('permissions')->with('flash_success','Created Successfully');
    }

    public function edit($id)
    {
        if($this->permission->find($id) ==false)
        {
            return view('errors.404');
        }
        $permission=$this->permission->find($id);
        return view ('permissions.edit')->with(compact('permission'));
    }
    public function save(Request $request,$id)
    {
        if($this->permission->find($id) == false)
        {
            return view('errors.404');
        }
        $data=[
            'permission_name'=>$request->input('permission_name')
        ];
        $this->update($data,'id',$id);
        return redirect('permissions');
    }

    public function update(array $data,$attribute= 'id',$id)
    {
       return $this->permission->where($attribute ,$id)->update($data);

    }

    public function delete($id)
    {
        if($this->permission->find($id) == false)
        {
            return view('errors.404');
        }
        $this->permission->destroy($id);
        return redirect()->route('permissions');
    }
}
