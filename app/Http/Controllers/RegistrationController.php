<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //This function display the person registration page
    public function personIndex(){
        $url = url ("/register");
        $title = 'Person Registration';
        $data = compact('url','title');
        return view("form")->with($data);
    }

    //This funchtion give list of person 
    public function personView(){
        $persons = Person::all();
        $data = compact("persons");
        return view("list")->with($data);
    }

    //Thid function store the data in to the table

    public function personRegister(Request $request){
        $request ->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'photo' => 'required|image',
        ]);
        // echo "<pre>";
        // print_r($request->all());


        //This code take name as it is form device
        $imageName = "";
        if($request->hasFile('photo')) {
            $imageName = rand(100,999)."-".$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('/uploads'), $imageName);
        }

        Person::create([
            'fname' => $request -> fname,
            'lname'=> $request -> lname,
            'phone' => $request -> phone,
            'email'=> $request -> email,
            'photo'=> $imageName,
        ]);

        return redirect('/');
    }

    //This function delete the record using id 
    public function personDelete($id){
        $person = Person::find($id);
        if(!is_null($person)) {
            $person->delete();
        }
        return redirect('/');
    }

    //This function take the data and fatch in form 

    public function personEdit($id){
        $person = Person::find($id);
        if(is_null($person)) {
            return redirect('/');
        }
        else {
            $title = 'Person Update';
            $url = url('/update')."/".$id;
            $data = compact('person','url','title');
            return view('form',$data);
        }
    }

    //This function is update the data in table
    public function personUpdate(Request $request, $id){

        $imageName = "";
        if($request->hasFile('photo')) {
            $imageName = rand(100,999)."-".$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('/uploads'), $imageName);
        }

        Person::find($id)->update([
            'fname' => $request -> fname,
            'lname'=> $request -> lname,
            'phone' => $request -> phone,
            'email'=> $request -> email,
            'photo'=> $imageName,
        ]);
        return redirect('/');
        
    }
    
}
