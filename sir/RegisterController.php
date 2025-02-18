<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;

class RegisterController extends Controller
{
    //admin side login--------------------------------------------------------------------------///////////////////////////////
    public function login(Request $request) {
         
   $name = $request->input('name'); 
   $pass = $request->input('password');   
   $request->session()->put('x', $name); //x=any name used for session,,$name=value which want to display as session 
   $value = $request->session()->get('x');   
   $sel_user = DB::table('tb_admin')
   ->where('NAME', '=', $name)
   ->where('PASSWORD', '=', $pass)
   ->get()->count(); 
   
if ($sel_user > 0)
 {  
   return view('admin_dashboard');
}
else
{
return view('first_home')->with('failed', 'Please Try Again Later..'); 
}

}


 



//logout

public function logout(Request $request) {
    //Session::flush();   Auth::logout();  return redirect('login');
    Auth::logout();
  $request->session()->invalidate(); 
return redirect(\URL::previous());
}




//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 

//staff details added into the DB

public function reg(Request $request) {

    $file = $request->file('photo');
    $certificate = $request->file('certificate');

    $data = array(
        'NAME' => $request->input('name'), 
        'PHOTO'=> $file->getClientOriginalName(), 
        'PHONE' => $request->input('phone'),
        'GENDER' => $request->input('genderradio'),
        'DOJ' => $request->input('doj'),
        'DOB' => $request->input('dob'),
        'CERTIFICATE'=> $certificate->getClientOriginalName(), 

    );

    $destinationPath = 'public/assests/staffphotos';
    $file->move($destinationPath,$file->getClientOriginalName());

    $destination = 'public/assests/staffcertificates';
    $certificate->move($destination,$certificate->getClientOriginalName());

    $lastInsertedId = DB::table('tb_addstaff')->insertGetId($data); 
return view("addstaffdetails"); 
}
 




//view staff details from DB-------------------------------------------- ------///////////////////////////////

public function viewstaff(Request $request) {
$data['view_staff'] = DB::table('tb_addstaff')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
        return view('viewstaffdetails', $data); 
	}



//edit staff details from DB-------------------------------------------- ------///////////////////////////////
public function editstaff($id=false) {//name from web.php($anyname=false) 
   
         
       $data['editstaff'] = DB::table('tb_addstaff')->where('ID', $id)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
       //$anyname["anyname"]

    return view('edit_staffaction', $data);  

}




//update staff details from DB-------------------------------------------- ------///////////////////////////////
public function updatestaff(Request $request) {
 
    $id=$request->input('id');
    $file = $request->file('photo');
    $certificate = $request->file('certificate');

    if(empty($file) && empty($certificate)){

        $data = array(
             
            'NAME' => $request->input('name'),  
            'PHONE' => $request->input('phone'),
            'GENDER' => $request->input('gender'),
            'DOJ' => $request->input('doj'),
            'DOB' => $request->input('dob'),
        );
 
     DB::table('tb_addstaff')->where('ID', $id)->update($data);
     $data['view_staff'] = DB::table('tb_addstaff')->get();
     return view('viewstaffdetails', $data); 
        }

 else if(empty($certificate)){

            $data = array(
                 
                'NAME' => $request->input('name'),  
                'PHONE' => $request->input('phone'),
                'GENDER' => $request->input('genderradio'),
                'DOJ' => $request->input('doj'),
                'DOB' => $request->input('dob'),
                'PHOTO'=> $file->getClientOriginalName(), 
                 
            );
            
     
            $destinationPath = 'public/assests/staffphotos';
        $file->move($destinationPath,$file->getClientOriginalName());

         DB::table('tb_addstaff')->where('ID', $id)->update($data);

         $data['view_staff'] = DB::table('tb_addstaff')->get();
        
         return view('viewstaffdetails', $data); 
            }


else if(empty($file)){

            $data = array(
                 
                'NAME' => $request->input('name'),  
                'PHONE' => $request->input('phone'),
                'GENDER' => $request->input('gender'),
                'DOJ' => $request->input('doj'),
                'DOB' => $request->input('dob'),
                'CERTIFICATE'=> $certificate->getClientOriginalName(), 
            );
            
     
            $destination = 'public/assests/staffcertificates';
            $certificate->move($destination,$certificate->getClientOriginalName());

         DB::table('tb_addstaff')->where('ID', $id)->update($data);
         $data['view_staff'] = DB::table('tb_addstaff')->get();
         return view('viewstaffdetails', $data); 
            }



    else  {

        $data = array(
             
            'NAME' => $request->input('name'), 
            'PHOTO'=> $file->getClientOriginalName(), 
            'PHONE' => $request->input('phone'),
            'GENDER' => $request->input('gender'),
            'DOJ' => $request->input('doj'),
            'DOB' => $request->input('dob'),
            'CERTIFICATE'=> $certificate->getClientOriginalName(), 
    
        );
    
        $destinationPath = 'public/assests/staffphotos';
        $file->move($destinationPath,$file->getClientOriginalName());
    
        $destination = 'public/assests/staffcertificates';
        $certificate->move($destination,$certificate->getClientOriginalName());
    
        DB::table('tb_addstaff')->where('ID', $id)->update($data);
        $data['view_staff'] = DB::table('tb_addstaff')->get();
        return view('viewstaffdetails', $data); 
    }
}

    

    
//remove staff details from DB-------------------------------------------- ------///////////////////////////////
public function removestaff($id=false)  { 
   
    $d= DB::table('tb_addstaff')->where('ID', $id)->select('*')->first();
    $i=$d->PHOTO; 
    $img="public/assests/staffphotos/".$i;  
    unlink($img); 

    $c=$d->CERTIFICATE; 
    $cer="public/assests/staffcertificates/".$c;  
    unlink($cer); 


    $data['removestaff'] = DB::table('tb_addstaff')->where('ID', $id)->delete(); //delete data from table  
    $data['view_staff'] = DB::table('tb_addstaff')->get();// after delete view page displaying
    return view('viewstaffdetails', $data);  

}


//remove student details from DB--------------------------------------------------///////////////////////////////

public function removestudent($id=false)  {
    $d= DB::table('tb_addstudent')->where('ID', $id)->select('*')->first();
    $i=$d->PHOTO; 
    $img="public/assests/studentphotos/".$i;  
    unlink($img); 

    $c=$d->CERTIFICATE; 
    $cer="public/assests/studentcertificates/".$c;  
    unlink($cer); 

    $data['removestudent'] = DB::table('tb_addstudent')->where('ID', $id)->delete();   
    $data['view_student'] = DB::table('tb_addstudent')->get();
    return view('viewstudentdetails', $data);
}

 







//-----------viewclass--------------------------------------------------
public function viewclass(Request $request) {
echo("hi");
}
































//-------------student details added into the DB---------------------------------------///////////////////////////////

public function sreg(Request $request) {
     
    $file = $request->file('photo');
    $certificate = $request->file('birthcertificate');




    $name = $request->input('name');  
    $PHONE = $request->input('phone');
    $GENDER = $request->input('gender');
    $DOJ = $request->input('doj');
    $DOB = $request->input('dob'); 
    $RELIGION = $request->input('religion');
    $CASTE = $request->input('caste');
    $ADDRESS = $request->input('address'); 
    $STANDARD = $request->input('standard'); 
    $FATHERNAME = $request->input('fathername'); 
    $FATHERJOB = $request->input('fatherjob'); 
    $MOTHERNAME = $request->input('mothername'); 
    $MOTHERJOB = $request->input('motherjob'); 
    $BLOODGROUP = $request->input('bloodgroup'); 

    //echo $name ,$PHONE, $GENDER, $DOB, $DOJ, $file, $certificate ,$RELIGION ,$CASTE, $ADDRESS ,$STANDARD, $FATHERNAME, $FATHERJOB, 
    //$MOTHERNAME, $MOTHERJOB ,$BLOODGROUP;
    //die(); 
    $data = array(
        'NAME' => $request->input('name'),  
        'PHONE' => $request->input('phone'),
        'GENDER' => $request->input('gender'),
        'DOJ' => $request->input('doj'),
        'DOB' => $request->input('dob'),
        'RELIGION' => $request->input('religion'), 
        'CASTE' => $request->input('caste'), 
        'ADDRESS' => $request->input('address'), 
        'STANDARD' => $request->input('standard'), 
        'FATHERNAME' => $request->input('fathername'), 
        'FATHERJOB' => $request->input('fatherjob'), 
        'MOTHERNAME' => $request->input('mothername'), 
        'MOTHERJOB' => $request->input('motherjob'), 
        'BLOODGROUP' => $request->input('bloodgroup'),
        'PHOTO'=> $file->getClientOriginalName(),  
        'CERTIFICATE'=> $certificate->getClientOriginalName(),  
         

    );

    $destinationPath = 'public/assests/studentphotos';
    $file->move($destinationPath,$file->getClientOriginalName());

    $destination = 'public/assests/studentcertificates';
    $certificate->move($destination,$certificate->getClientOriginalName());

    $lastInsertedId = DB::table('tb_addstudent')->insertGetId($data); 
return view("addstudentdetails"); 
}





//-----------------view student details from DB ---------------------------------///////////////////////////////
 
public function viewstudent(Request $request){
    
    $data['view_student'] = DB::table('tb_addstudent')->get(); 
    //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
    return view('viewstudentdetails', $data); 
        }

//edit staff details from DB-------------------------------------------- ------///////////////////////////////
public function editstudent($id=false) {//name from web.php($anyname=false) 
   
         
    $data['editstudent'] = DB::table('tb_addstudent')->where('ID', $id)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
    //$anyname["anyname"]

 return view('edit_studentaction', $data);  

}

//update student details from DB-------------------------------------------- ------///////////////////////////////
public function updatestudent(Request $request) {
 
    $id=$request->input('id');
    $file = $request->file('photo');
    $certificate = $request->file('certificate');

    if(empty($file) && empty($certificate)){

        $data = array(
             
            'NAME' => $request->input('name'),  
            'PHONE' => $request->input('phone'),
            'GENDER' => $request->input('gender'),
            'DOJ' => $request->input('doj'),
            'DOB' => $request->input('dob'),
            'FATHERNAME' => $request->input('fathername'),  
            'MOTHERNAME' => $request->input('mothername'),
            'FATHERJOB' => $request->input('fatherjob'),
            'MOTHERJOB' => $request->input('motherjob'),
            'STANDARD' => $request->input('standard'),
            'BLOODGROUP' => $request->input('bloodgroup'),
            'RELIGION' => $request->input('religion'),  
            'CASTE' => $request->input('caste'),
            'ADDRESS' => $request->input('address'),
             
        );
 
     DB::table('tb_addstudent')->where('ID', $id)->update($data);
     $data['view_student'] = DB::table('tb_addstudent')->get();
     return view('viewstudentdetails', $data); 
        }

 else if(empty($certificate)){

            $data = array(
                 
                'NAME' => $request->input('name'), 
                'PHOTO'=> $file->getClientOriginalName(),
            'PHONE' => $request->input('phone'),
            'GENDER' => $request->input('gender'),
            'DOJ' => $request->input('doj'),
            'DOB' => $request->input('dob'),
            'FATHERNAME' => $request->input('fathername'),  
            'MOTHERNAME' => $request->input('mothername'),
            'FATHERJOB' => $request->input('fatherjob'),
            'MOTHERJOB' => $request->input('motherjob'),
            'STANDARD' => $request->input('standard'),
            'BLOODGROUP' => $request->input('bloodgroup'),
            'RELIGION' => $request->input('religion'),  
            'CASTE' => $request->input('caste'),
            'ADDRESS' => $request->input('address'),
                 
            );
            
     
            $destinationPath = 'public/assests/staffphotos';
        $file->move($destinationPath,$file->getClientOriginalName());

         DB::table('tb_addstudent')->where('ID', $id)->update($data);

         $data['view_student'] = DB::table('tb_addstudent')->get();
        
         return view('viewstudentdetails', $data); 
            }


else if(empty($file)){

            $data = array(
                 
                'NAME' => $request->input('name'), 
                'CERTIFICATE'=> $file->getClientOriginalName(),
            'PHONE' => $request->input('phone'),
            'GENDER' => $request->input('gender'),
            'DOJ' => $request->input('doj'),
            'DOB' => $request->input('dob'),
            'FATHERNAME' => $request->input('fathername'),  
            'MOTHERNAME' => $request->input('mothername'),
            'FATHERJOB' => $request->input('fatherjob'),
            'MOTHERJOB' => $request->input('motherjob'),
            'STANDARD' => $request->input('standard'),
            'BLOODGROUP' => $request->input('bloodgroup'),
            'RELIGION' => $request->input('religion'),  
            'CASTE' => $request->input('caste'),
            'ADDRESS' => $request->input('address'),
                 
            );
            
     
            $destination = 'public/assests/staffcertificates';
            $certificate->move($destination,$certificate->getClientOriginalName());

         DB::table('tb_addstudent')->where('ID', $id)->update($data);
         $data['view_student'] = DB::table('tb_addstudent')->get();
         return view('viewstudentdetails', $data); 
            }



    else  {

        $data = array(
             
            'NAME' => $request->input('name'), 
            'PHOTO'=> $file->getClientOriginalName(),
            'CERTIFICATE'=> $file->getClientOriginalName(),
        'PHONE' => $request->input('phone'),
        'GENDER' => $request->input('gender'),
        'DOJ' => $request->input('doj'),
        'DOB' => $request->input('dob'),
        'FATHERNAME' => $request->input('fathername'),  
        'MOTHERNAME' => $request->input('mothername'),
        'FATHERJOB' => $request->input('fatherjob'),
        'MOTHERJOB' => $request->input('motherjob'),
        'STANDARD' => $request->input('standard'),
        'BLOODGROUP' => $request->input('bloodgroup'),
        'RELIGION' => $request->input('religion'),  
        'CASTE' => $request->input('caste'),
        'ADDRESS' => $request->input('address'),
    
        );
    
        $destinationPath = 'public/assests/staffphotos';
        $file->move($destinationPath,$file->getClientOriginalName());
    
        $destination = 'public/assests/staffcertificates';
        $certificate->move($destination,$certificate->getClientOriginalName());
    
        DB::table('tb_addstaff')->where('ID', $id)->update($data);
        $data['view_staff'] = DB::table('tb_addstaff')->get();
        return view('viewstaffdetails', $data); 
    }
}













//view first class student details class1-------------------------------------------- ------///////////////////////////////

public function viewfirstclass(Request $request) {
     
    $data['view_first'] = DB::table('tb_addstudent')->where('STANDARD',1)->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
           

    $data['view_second'] = DB::table('tb_addstudent')->where('STANDARD',2)->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            

    $data['view_third'] = DB::table('tb_addstudent')->where('STANDARD',3)->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
            

    $data['view_fourth'] = DB::table('tb_addstudent')->where('STANDARD',4)->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
             

    $data['view_fifth'] = DB::table('tb_addstudent')->where('STANDARD',5)->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
           
    return view('viewclassdetails', $data);


        } 














































    
}



