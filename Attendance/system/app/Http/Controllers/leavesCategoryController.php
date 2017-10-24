<?php

namespace App\Http\Controllers;


use App\Models\leavesCategory;
use Illuminate\Http\Request;

class leavesCategoryController extends Controller
{
    private $leavesCategory;

    public function __construct( leavesCategory $leavesCategory)
    {
        $this->leavesCategory = $leavesCategory;
    }
    public function index()
    {
        $data=$this->leavesCategory->all();
        return view('leavesCategory.index')->with(compact('data'));
    }

    public function add()
    {
        return view('leavesCategory.add');
    }

    public function store(Request $request)
    {
        $data=[
          'category_name'=> $request->input('leaveCategory')
        ];

        $this->leavesCategory->create($data);
        return redirect()->route('leavesCategory')->with('flash_success','Crested Successfully');
    }

    public function edit($id)
    {
        if($this->leavesCategory->find($id) == false)
        {
            return view('errors.404');
        }
        $leavesCategory =$this->leavesCategory->find($id);
        return view ('leavesCategory.edit')->with(compact('leavesCategory'));
    }

    public function save(Request $request,$id)
    {
        //checking if id exists or not
        if($this->leavesCategory->find($id) == false)
        {
            return view('errors.404');
        }
        $data=[
            'category_name'=> $request->input('category_name')
        ];
        $this->update($data,'id',$id);
        return redirect('leavesCategory');
    }

    public function update(array $data,$attribute='id',$id)
    {
        return $this->leavesCategory->where($attribute,$id)->update($data);
    }

    public function delete($id)
    {
        if($this->leavesCategory->find($id) == false)
        {
            return view ('errors.404');
        }
        $this->leavesCategory->destroy($id);
        return redirect()->route('leavesCategory');
    }
}