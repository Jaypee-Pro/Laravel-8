<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
class FetchController extends Controller
{
    public function index(){
        $crud = Crud::all();
        return view('pages.index', compact('crud'));
    }
    public function create(){
        return view('pages.create');
    }
    public function insert(Request $request){
        $crud = new Crud;
        $crud->name = $request->input('name');
        $crud->username = $request->input('username');
        $crud->password = $request->input('password');
        $crud->save();

         return redirect('/')->with('status','Added Successfully');

    }

    public function edit($id){
        $crud = Crud::find($id);
        return view('pages.edit', compact('crud'));
    }

    public function update(Request $request, $id){
        $crud = Crud::find($id);
        $crud->name = $request->input('name');
        $crud->username = $request->input('username');
        $crud->password = $request->input('password');
        $crud->status = $request->input('status') == true ? '1':'0';
        $crud->update();

        return redirect('/')->with('status','Data Updated Successfully');
    }
    public function delete($id){
        $crud = Crud::find($id);
        $crud->delete();
        return redirect('/')->with('status','Data Deleted Successfully');
    }
}
