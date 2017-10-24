<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    private $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;

    }
    /*
     * Index method
     * To View All the settings from settings database
     * Redirecting to index inside settings folder in views
     *
     * */

    public function index()
    {
        $data = $this->setting->all();

        return view('setting.index')->with(compact('data'));
    }

    public function add()
    {
        return view('setting.add');
    }

    public function store(Request $request)
    {
        /*$this->validate($request,[
            'Company_name'=>'required'
        ]);*/



        //Taking Input Values
        $data=[
            'company_name'=>$request->input('Company_name'),
            'address'=>$request->input('address'),
            'phone_no'=>$request->input('phone_no'),
            'facebook_link'=>$request->input('facebook_link'),
            'terms_condition'=>$request->input('terms_condition'),
            'privacy'=>$request->input('privacy'),
            'weekend'=>$request->input('weekend'),
            'attendance_method'=>$request->input('attendance_method'),
            'field_tracking'=>$request->input('field_tracking'),

        ];
        if($request->hasFile('logo'))
        {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $filename  = str_random(19).'.'.$extension;
            $destination = 'assets/images/';
            $request->file('logo')->move($destination,$filename);
            $data['logo']=$filename;
        }


        //Inserting into Database
        $this->setting->create($data);

        return redirect()->route('settings')->with('flash_success','Created Successfully');

    }

    public function edit($id)
    {
        //checking if id exists or not
        if($this->setting->find($id) == false)
        {
            return view('errors.404');
        }
        $setting = $this->setting->find($id);

        return view('setting.edit')->with(compact('setting'));

    }

    public function save(Request $request,$id)
    {
        //checking if id exists or not
        if($this->setting->find($id) == false)
        {
            return view('errors.404');
        }

        //Taking Input Values
        $data=[
            'company_name'=>$request->input('Company_name'),
            'address'=>$request->input('address'),
            'phone_no'=>$request->input('phone_no'),
            'facebook_link'=>$request->input('facebook_link'),
            'terms_condition'=>$request->input('terms_condition'),
            'privacy'=>$request->input('privacy'),
            'weekend'=>$request->input('weekend'),
            'attendance_method'=>$request->input('attendance_method'),
            'field_tracking'=>$request->input('field_tracking')
        ];


        if($request->hasFile('logo'))
        {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $filename  = str_random(19).'.'.$extension;
            $destination = 'assets/images/';
            $request->file('logo')->move($destination,$filename);

            $p = $this->setting->find($id);

            if ($p->logo)
                unlink('assets/images/' . $p->logo);

            $data['logo'] = $filename;


        }

        $this->update($data,'id',$id);

        return redirect()->route('settings');

    }

    public function update(array $data,$attribute = 'id',$id)
    {
        return $this->setting->where($attribute,$id)->update($data);
    }

    public function delete($id)
    {
        //checking if id exists or not
        if ($this->setting->find($id) == false) {
            return view('errors.404');
        }


        $p = $this->setting->find($id);

        if ($p->logo)
            unlink('assets/images/' . $p->logo);


        $this->setting->find($id)->delete($p->id);

        return redirect()->route('settings');

    }

    public function api_index()
    {
        $data = $this->setting->all();
        return response()->json($data);

    }

}
