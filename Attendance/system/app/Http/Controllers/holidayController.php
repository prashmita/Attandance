<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class holidayController extends Controller
{
    protected $holiday;

    public function __construct(Holiday $holiday)
    {
        $this->holiday= $holiday;
    }
    public  function index()
    {
        $data=$this->holiday->all();
        //dd($data);
        return view('holiday.index')->with(compact('data'));
    }

    public function add()
    {
        return view('holiday.add');
    }

    public function store(Request $request)
    {
        $data=[
            'title'=>$request->input('title'),
            'date'=>$request->input('date')
        ];
        $this->holiday->create($data);
        return redirect()->route('holiday')->with('flash_success','Created Successfully');
    }

    public function edit($id)
    {
        if($this->holiday->find($id)== false)
        {
            return view('errors.404');
        }
        $holiday =$this->holiday->find($id);
        return view('holiday.edit')->with(compact('holiday'));
    }
    public function save(Request $request,$id)
    {
        //checking if id exists or not
        if($this->holiday->find($id) ==false)
        {
            return view('errors.404');
        }
        $data=[
            'title'=>$request->input('title'),
            'date'=>$request->input('date')
        ];
        $this->update($data,'id',$id);
        return redirect('holiday');

    }

    public function update(array $data,$attribute='id',$id)
    {
        return $this->holiday->where($attribute,$id)->update($data);
    }
    public function delete($id)
    {
      if($this->holiday->find($id) ==false)
        {
            return view('errors.404');
        }
        $this->holiday->destroy($id);
        return redirect()->route('holiday');
    }
}
