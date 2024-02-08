<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EquipmentCompany;
use Illuminate\Http\Request;

class EquipmentCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = EquipmentCompany::get();
        return view('backend.equipment_company.index',compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.equipment_company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'company'=>'required|min:4',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'address'=>'required|min:4|max:500',
            

        ]);
        $filename = time(). "." . $request->logo->extension();
        if($validate){
           $data= [
            'company_name'=>$request->company,
            'logo'=>$filename,
            'descripation'=>$request->desc,
            'email'=>$request->email,
            'address'=>$request->address,
            
           ];
           $model = new EquipmentCompany();
           if($model->create($data));
           $request->logo->move('uploads/', $filename);
           return redirect()->route('company.index')->with('msg','Equipment Company  Inserted Successfully');
    }
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.equipment_company.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
        $equipments =EquipmentCompany::find($id);
        return view('backend.equipment_company.edit',compact('equipments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipment = EquipmentCompany::find($id);
        $validate = $request->validate([
            'company'=>'required|min:4',
            'logo'=>'mimes:jpg,jpeg,png',
            'desc'=>'required|min:6|max:400',
            'address'=>'required|min:4|max:500',
            

        ]);
        $filename = time(). "." . $request->logo->extension();
        if($validate){
           $data= [
            'company_name'=>$request->company,
            'logo'=>$filename,
            'descripation'=>$request->desc,
            'email'=>$request->email,
            'address'=>$request->address,
            
           ];
       
          if($equipment->update($data))
           $request->logo->move('uploads/', $filename);
           return redirect()->route('company.index')->with('msg','Equipment Company  Update Successfully');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipment = EquipmentCompany::find($id);
        if($equipment->delete());
        return redirect()->route('company.index')->with('msg','Equipment company Delete Successfully');

        
    }
}
