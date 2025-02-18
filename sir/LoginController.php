<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\Adddoc;

class LoginController extends Controller
{
    //




    public function login(Request $request) {
      

	   
        $em = $request->input('email');
           
          $pass = $request->input('password');  
     
  
  $request->session()->put('emailid', $em);
  
  
  $value = $request->session()->get('emailid');
  

  
  
  $sel_user = Admin::where('tb_admin.email', '=', $em)
  ->where('tb_admin.password', '=', $pass)
  ->first();
  $count = count((array)$sel_user);

  if ($count > 0) {

  return view('dashboard');
}
else
{
return view('admin');
}
}





public function dreg(Request $request) {

  $file = $request->file('photo');
  

  $data = array(
      'name' => $request->input('name'),       
      'email' => $request->input('email'),
      'address' => $request->input('address'),
      'hospital' => $request->input('hospital'),
      'photo'=> $file->getClientOriginalName(), 
      'password' => $request->input('password'),
    

  );

  $destinationPath = 'public/assets/docpic';
  $file->move($destinationPath,$file->getClientOriginalName());

  
  $lastInsertedId = Adddoc::insertGetId($data); 
return view("dashboard"); 
}






public function dview(Request $request) {
  $data['view_doctor'] = Adddoc::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
          return view('viewdoctor', $data); 
    }






    public function dedit($id=false) {//name from web.php($anyname=false) 
   
         
      $data['editdoctor'] = Adddoc::where('doctor_id', $id)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
      //$anyname["anyname"]

   return view('editdoc', $data);  

}







public function dupdate(Request $request) {
if(empty($request->file('photo')))
{
  $data = array(
    
    'name' => $request->input('name'),       
    'email' => $request->input('email'),
    'address' => $request->input('address'),
    'hospital' => $request->input('hospital'),
    'password' => $request->input('password'),
  

);


$id=$request->input('id');

$update = Adddoc::where('doctor_id', $id)->update($data);
return view("dashboard"); 

}
  else
  {
    $id=$request->input('id');
//echo ($id);
//die();
  $file = $request->file('photo');
  

  $data = array(
      'name' => $request->input('name'),       
      'email' => $request->input('email'),
      'address' => $request->input('address'),
      'hospital' => $request->input('hospital'),
      'photo'=> $file->getClientOriginalName(), 
      'password' => $request->input('password'),
    

  );

  $destinationPath = 'public/assets/docpic';
  $file->move($destinationPath,$file->getClientOriginalName());

  
  $update = Adddoc::where('doctor_id', $id)->update($data);  

return view("dashboard"); 

}
}

public function delete($id=false){

  $data['del'] = Adddoc::where('doctor_id', $id)->delete();
return view("dashboard"); 

}

public function logout(Request $request) {
  Auth::logout();
  $request->session()->invalidate();
  return redirect(\URL::previous());
}


}


