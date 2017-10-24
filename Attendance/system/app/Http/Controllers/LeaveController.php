<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use DB;

class LeaveController extends Controller
{
    protected $leave;
    protected $tableData;

    public function __construct(Leave $leaves )
    {
        $this->leave= $leaves;
    }

    public  function index()
    {
        //$data = $this->leave->all();
        $data=DB::table('leaves')
            ->join('users','users.id','=','leaves.user_id')
            ->select('users.first_name','users.last_name','leaves.*')
            ->get();

        return view('leave.index')->with(compact('data'));
    }

    public function add()
    {
        $tableData=DB::table('users')
            ->select('id','first_name','last_name')
            ->get();
        return view('leave.add')->with(compact('tableData'));
    }

    public function store(Request $request)
    {
        $data=[
            'user_id'=>$request->input('user_id'),
            'reason'=>$request->input('reason'),
            'start_date'=>$request->input('start_date'),
            'end_date'=>$request->input('end_date'),
            'status'=>'0',
            'validated_by'=>'0',
            'category_id'=>$request->input('category_id'),
        ];

        $this->leave->create($data);

       return redirect()->route('leave')->with('flash_success','Created Successfully');
    }

    public function edit($id)
    {

        if($this->leave->find($id)== false)
        {
            return view('errors.404');
        }

        $tableData=DB::table('users')
            ->select('id','first_name','last_name')
            ->get();
        $leaves =$this->leave->find($id);
        return view('leave.edit')->with(compact('leaves','tableData'));
    }
    public function save(Request $request,$id)
    {
        //checking if id exists or not
        if ($this->leave->find($id) == false) {
            return view('errors.404');
        }
        $data=[
            'user_id'=>$request->input('user_id'),
            'reason'=>$request->input('reason'),
            'start_date'=>$request->input('start_date'),
            'end_date'=>$request->input('end_date'),
            'status'=>$request->input('status'),
            'validated_by'=>$request->input('validated_by'),
            'category_id'=>$request->input('category_id'),
        ];

        $this->update($data,'id',$id);
        return redirect('leave');
    }

    public function update(array $data,$attribute = 'id',$id)
    {

        return $this->leave->where($attribute,$id)->update($data);
    }
    public function delete($id)
    {
        if($this->leave->find($id) ==false)
        {
            return view('errors.404');
        }
        $this->leave->destroy($id);
        return redirect()->route('leave');
    }
}
