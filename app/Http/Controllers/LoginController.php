<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Models\Login;
use App\Models\Form;
use App\Models\Register;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    
	 public function login(Request $request) {
      

	   
        $em = $request->input('email');
           
          $pass = $request->input('password');  
     
  
  $request->session()->put('email', $em);
  
  
  $value = $request->session()->get('email');
  

  
  
  $sel_user = Login::where('adminlogin.Email', '=', $em)
  ->where('adminlogin.Password', '=', $pass)
  ->first();
  $count = count((array)$sel_user);

  if ($count > 0) {

  return view('dashboard');
}
else
{
  return back()->withErrors([
    'email' => 'Invalid email and password. Please try again.'
])->withInput();
}
}





    public function form(Request $request) {

        $file = $request->file('image');
        
      
        $data = array(
            'Coursename' => $request->input('course'),
            'Image'=> $file->getClientOriginalName(),        
            'Duration' => $request->input('duration'),
            'Time' => $request->input('time'),
            'Instructor' => $request->input('instructor'),
            'Coursefees' => $request->input('coursefees'),
            'Description' => $request->input('description'),
            'Link' => $request->input('link'),
        );
      
        $destinationPath = 'public/assets/admin/docimages';
        $file->move($destinationPath,$file->getClientOriginalName());
      
        
        $lastInsertedId = Form::insertGetId($data); 
      return view("form"); 
      }





      public function dview(Request $request) {
        $data['Formview'] = Form::select('*')->get(); //$data['anyname'] this name you need to give in viewstaffdetails near to FOREACH starting
                return view('viewdata', $data); 
          }

       

          public function dedit($id=false) {//name from web.php($anyname=false) 
   
         
            $data['editdata'] = Form::where('Id', $id)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
            //$anyname["anyname"]
      
         return view('edit', $data);  
      
      }



      public function dupdate(Request $request) {
        if(empty($request->file('image')))
        {
          $data = array(
            'Coursename' => $request->input('course'),
            'Duration' => $request->input('duration'),
            'Time' => $request->input('time'),
            'Instructor' => $request->input('instructor'),
            'Coursefees' => $request->input('coursefees'),
        );
        $id=$request->input('id');
        $update = Form::where('Id', $id)->update($data);
        $data['Formview'] = Form::select('*')->get(); 
        return view('viewdata', $data); 
        }
          else
          {
            $id=$request->input('id');
        //echo ($id);
        //die();
          $file = $request->file('image');
          $data = array(
            'Coursename' => $request->input('course'),
            'Image'=> $file->getClientOriginalName(),        
            'Duration' => $request->input('duration'),
            'Time' => $request->input('time'),
            'Instructor' => $request->input('instructor'),
            'Coursefees' => $request->input('coursefees'),
          );
          $destinationPath = 'public/assets/admin/docimages';
          $file->move($destinationPath,$file->getClientOriginalName());
          $update = Form::where('Id', $id)->update($data);  
          $data['Formview'] = Form::select('*')->get(); 
          return view('viewdata', $data); 
        }
        }

      

        public function delete($id=false){

          $data['del'] = Form::where('Id', $id)->delete();
          $data['Formview'] = Form::select('*')->get(); 
          return view('viewdata', $data); 
        
        }


        public function logout(Request $request) {
          Auth::logout();
          $request->session()->invalidate();
          return redirect(\URL::previous());
        }



        public function register(Request $request) {

          $data = array(
              'Name' => $request->input('name'),
              'PhoneNo' => $request->input('phoneno'),
              'Email' => $request->input('email'),
              'Password' => $request->input('password'),
              'ConfirmPassword' => $request->input('confirmpassword'),
            
          );
        
          $lastInsertedId = Register::insertGetId($data); 
          $data['viewdetail'] = Form::select('*')->get();
          return view('index',$data);
        }


        public function userlogin(Request $request) {

        
          $email = $request->input('email');
          $password = $request->input('password');
      
          
          $request->session()->put('email', $email);
      
          
          $sel_user = Register::where('tb_register.Email', '=', $email)
              ->where('tb_register.Password', '=', $password)
              ->first();
      
          
          if ($sel_user) {
             
              $request->session()->put('userid', $sel_user->Id);
      
              
              $value = $request->session()->get('email');
              $userId = $request->session()->get('userid');
      
              
              $data['viewdetail1'] = Form::select('*')->get();
      
              
              return view('index1', $data);
          } else {
              
              return back()->withErrors([
                  'email' => 'Invalid email and password. Please try again.',
              ])->withInput();
          }
      }
      



public function registerview(Request $request) {
  $data['Registerview'] = Register::select('*')->get(); 
          return view('registerdata', $data); 
    }



    public function userlogout(Request $request) {
      Auth::logout();
      $request->session()->invalidate();
      return redirect(\URL::previous());
    }

    
    public function courses(Request $request) {
      $data['viewdetail'] = Form::select('*')->get();
      return view('index',$data);
      
    }

    public function courses1(Request $request) {
      $data['viewdetail1'] = Form::select('*')->get();
      return view('index1',$data);
      
    }
	


    public function deleteuser($id=false){

      $data['del'] = Register::where('Id', $id)->delete();
      $data['Registerview'] = Register::select('*')->get(); 
      return view('registerdata', $data); 
    
    }

    public function joinclass($id=false) {//name from web.php($anyname=false) 
   
         
      $data['coursedetails'] = Form::where('Id', $id)->select('*')->first(); //where( id-çolumn name',$id=>$id=false)
      //$anyname["anyname"]

   return view('joincourse', $data);  

}
   
   

public function usercourse(Request $request) {
  
  $userid = $request->session()->get('userid');

  $data = array(
       
      'Coursename' => $request->input('coursename'),    
      'Duration' => $request->input('duration'),
      'Time' => $request->input('time'),
      'Instructor' => $request->input('instructor'),
      'Coursefees' => $request->input('coursefees'),
      'Status' => 0,
      'userid'     => $userid,
      'Link' => $request->input('link')
  );

  
  $lastInsertedId = Course::insertGetId($data); 
  $data['viewdetail1'] = Form::select('*')->get();
  return view('index1',$data);
}



public function viewcourse(Request $request) {
  $data['courseview'] = Course::select('*')->get(); 
          return view('viewjoincourse', $data); 
    }


    public function approved($id = false)
    {
        
        Course::where('Id', $id)->update([
            'Status' => 1,
            
        ]);
        
        $data = Course::where('Id', $id)->first();  
        $data['courseview'] = Course::select('*')->get(); 
        return view('viewjoincourse', $data); 
        
    }
    

    public function rejected($id = false)
    {
      
        Course::where('Id', $id)->update([
            'Status' => 2,
        ]);
        
        $data = Course::where('Id', $id)->first();  
        $data['courseview'] = Course::select('*')->get(); 
        return view('viewjoincourse', $data); 
    }
    


   
    
    public function viewjoin(Request $request)
    {
        // Perform the join between tb_register and join_course tables
        $data['viewjoin'] = DB::table('join_course')
            ->join('tb_register', 'join_course.userid', '=', 'tb_register.Id') // Join condition
            ->select(
                'join_course.Id as course_id',
                'tb_register.Name',
                'tb_register.PhoneNo',
                'tb_register.Email',
                'join_course.Coursename',
                'join_course.Duration',
                'join_course.Time',
                'join_course.Instructor',
                'join_course.Coursefees',
                'join_course.Status'
                
            ) // Select fields you want to show in the table
            ->get(); // Retrieve the data
    
        // Return the view with the joined data
        return view('viewjoin', $data);
    }
    

    public function course(Request $request) {
      $userid = $request->session()->get('userid');
    
      $data['course'] = Course::where('userid', $userid)->get(); 
              return view('course', $data); 
        }

         
        public function deletecourse($id=false, Request $request){
          $userid = $request->session()->get('userid');
          $data['del'] = Course::where('Id', $id)->delete();
          $data['course'] = Course::where('userid', $userid)->get(); 
          return view('course', $data); 
        
        }
  }
     
        
        
        

  