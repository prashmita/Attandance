<?php

namespace App\Http\Controllers;

use App\Models\position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    private $position;

    public function __construct(position $position)
    {
        $this->position = $position;
    }

    public function index()
    {
        $data = $this->position->all();

        return view('position.index')->with(compact('data'));
    }

    public function add()
    {
        return view('position.add');
    }
    public function store(Request $request)
    {
        $data=[
            'position_name'=>$request->input('position_name')
        ];

        //Inserting into database
        $this->position->create($data);
        return redirect()->route('positions')->with('flash_success','Created Successfully');
    }

    public function edit($id)
    {
        if($this->position->find($id) ==false){
            return view('errors.404');
        }
        $position =$this->position->find($id);
        return view('position.edit')->with(compact('position'));
    }

    public function save(Request $request,$id)
    {
        //checking if id exists or not
        if($this->position->find($id) ==false)
        {
            return view('errors.404');
        }
        $data=[
            'position_name'=>$request->input('position_name')
        ];
        $this->update($data,'id',$id);
        return redirect('positions');

    }

    public function update(array $data,$attribute='id',$id)
    {
        return $this->position->where($attribute,$id)->update($data);
    }
    public function delete($id)
    {
        if($this->position->find($id) ==false)
        {
            return view('errors.404');
        }
        $this->position->destroy($id);
        return redirect()->route('positions');
    }

}