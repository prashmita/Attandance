<?php

namespace App\Http\Controllers;

use App\Models\Present;
use Illuminate\Http\Request;

class presentController extends Controller
{
    private $present;

    public function __construct(Present $present)
    {
        $this->present = $present;
    }

    public function index()
    {
        $present = $this->present->all();

        return view('present.index')->with(compact('present'));
    }

    public function add()
    {
        return view('present.add');
    }

    public function store(Request $request)
    {
        $data=[
            'check_in'=> $request->input('check_in'),
            'check_out'=> $request->input('check_out'),
            'present_hours'=> $request->input('present_hours'),
            'check_in_method'=> $request->input('check_in_method'),
            'check_out_method'=> $request->input('check_out_method')
        ];
        $this->present->create($data);
        return redirect()->route('presents')->with('flash_success','Created Successfully');
    }


    public function edit($id)
    {
        if($this->present->find($id) == false)
        {
            return view('errors.404');
        }
        $present =$this->present->find($id);
        return view('present.edit')->with(compact('present'));
    }

    public function delete($id)
    {
        if($this->present->find($id)== false)
        {
            return view('errors.404');
        }
        $this->present->destroy($id);
            return redirect()->route('presents');
    }

    public function save(Request $request,$id)
    {
        if($this->present->find($id)== false)
        {
            return view('errors.404');
        }



        $data=[
            'check_in'=> $request->input('check_in'),
            'check_out'=> $request->input('check_out'),
            'present_hours'=> $request->input('present_hours'),
            'check_in_method'=> $request->input('check_in_method'),
            'check_out_method'=> $request->input('check_out_method')
        ];


        $this->update($data,'id',$id);
        return redirect('presents');
    }

    public function update(array $data,$attribute= 'id',$id)
    {
        return $this->present->where($attribute,$id)->update($data);
    }
}
