<?php
namespace App\Controller;

use App\Controller\AppController;
  
 use Cake\ORM\TableRegistry;
 use Cake\Datasource\ConnectionManager;
use Cake\Log\Log;
//use App\Controller\Time;
use Cake\I18n\Time;
 use Cake\Auth\DefaultPasswordHasher;
 use Cake\Validation\Validator;

class RegisterController extends AppController
{
    public function registrationform()
    {
      //  $this->render('View/SomeFolder/Hello');
    $validator=new Validator();
    $gender1=array(0=>"Male",1=>"Female");
    $country=array("India","USA","Nepal");
    $this->set('gender1',$gender1);
    $this->set('country',$country);
    if ($this->request->is('post'))
    {
        $table=TableRegistry::get("cakeform");
        $hashobj=new DefaultPasswordhasher;
        // $pic=var_dump($this->request->data['profile_pic']['file']['name']);
        // var_dump($this->request->data['profile_pic']);
        // var_dump($_FILES["profile_pic"]);
         //var_dump($_FILES["profile_pic"]['tmp_name']);
        
        $pic='http://localhost/cake/webroot/img/'.$this->request->data['profile_pic']['name'];
         $first=$this->request->data('first_name');
         $last=$this->request->data('last_name');
         $user=$this->request->data('username');
         $email=$this->request->data('email');
         $password=md5($this->request->data('password'));
         $confirm_password=md5($this->request->data('confirm Password'));
         $gender=$this->request->data('gender');
         $mobile=$this->request->data('mobile_number');
         $date = $this->request->data('date') ; 
         $country=$this->request->data('country');
         $zip=$this->request->data('zipcode');
         $interest=$this->request->data('interest');
         $description=$this->request->data('description');
         $validator->notEmpty('profile_pic','Please Select a File');
        $validator->notEmpty('password', 'We need password.');
        $validator->notEmpty('username','Username should not be empty');
        $validator->notEmpty('email','Email Should not be empty');
        
        $errors=$validator->errors($this->request->data());
        $this->set('errors',$errors);
       
     move_uploaded_file($_FILES["profile_pic"]['tmp_name'],"../webroot/img/".$_FILES["profile_pic"]['name']);
    $tableobj=$table->newEntity();
    $tableobj->profile_pic=$pic;
    $tableobj->first_name=$first;
    $tableobj->last_name=$last;
    $tableobj->username=$user;
    $tableobj->email=$email;
    $tableobj->password=$password;
    $gender=($gender==0)? "Male" :"Female";
    $tableobj->gender=  $gender;
    $tableobj->mobile_no=$mobile;
    $tableobj->date_of_birth=$date['year']."-".$date['month']."-".$date['day'];
    $tableobj->zipcode=$zip;
    $tableobj->interest=$interest;
    $tableobj->description=$description;
    //$tableobj->password=$password;
    switch( $country){
        case 0: $country="India";break;
        case 1: $country="USA";break;
        case 2: $country="Others";break;

    }
    $tableobj->country=$country;
      if($table->save($tableobj))
          echo "User is added.";

    
    }

    }  
    function login()
    {
         $Session=$this->request->session();
         $title="Login";
     //     $this->assign('title',$title); 
        if($this->request->is('post'))
        {
            $table=TableRegistry::get("cakeform")->find();
            $hashObj=new DefaultPasswordHasher;
            $user=$this->request->data('username');
                Log::write('debug', "user input: ".  $user);
            $pass=$this->request->data("password");
            $pass=md5($pass);
          
           //   Log::write($user,'debug');
              $query = $table->where(['username'=>$user])->first();
              $userdata=$query->username;
            //Log::write('debug',"db input: ".  $userdata);
              $passdata=$query->password;
            
             
              if($userdata==$user && $pass == $passdata)
              { 
                    $Session->write('User', $user);
                    $this->setAction("view",$user);
                  

              }
              


        }
    } 
    function view($user="u")
    {   
         $Session=$this->request->session();
           Log::write('debug',$Session->check('User'));
        if($Session->check('User')!=1)

        {
       $this->setAction("login");
        }       
        else{
         $table=TableRegistry::get("cakeform");
         $hashObj=new DefaultPasswordHasher;
         if($user!="u")
         {
         $user=$this->request->data('username');
         $pass=$this->request->data("password");
              $this->set('user',$user);
              }
        $this->set('user',$Session->read('User'));
        $user=$Session->read('User');
           //   Log::write($user,'debug');
           
              $query = $table->find()->where(['username'=>$user]);
                foreach ($query as $row){
                    if($row->roles==1)
                    {
                           $query = $table->find();
                           $this->set('results',$query);
                    }
                    else{
                         $this->set('results',$query);
                    }
                }
                $this->set('results',$query);

            
        }
             
             
           
    }    
    public function edit($id)
    {
       $Session=$this->request->session();
        $gender1=array(0=>"Male",1=>"Female");
         $country=array("India","USA","Nepal");
         $this->set('gender1',$gender1);
         $this->set('country',$country);
         $table=TableRegistry::get("cakeform");
         $hashObj=new DefaultPasswordHasher;
         $query = $table->find()->where(['id'=>$id]);
         $this->set('results',$query);  



        $user=$this->loadModel('cakeform')->get($id);
        if($this->request->is('post'))
        {
            $user=$this->loadModel('cakeform')->patchEntity($user,$this->request->getData());
       if($this->loadModel('cakeform')->save($user))
        {
          $this->Flash->success('Updated!');
         echo "Updated";
        }
        }
       

           //   Log::write($user,'debug');
                 
    
    
    
    
    }
    function usershow($id)
    {
$Session=$this->request->session();
        $gender1=array(0=>"Male",1=>"Female");
         $country=array("India","USA","Nepal");
         $this->set('gender1',$gender1);
         $this->set('country',$country);
         $table=TableRegistry::get("cakeform");
       
         $query = $table->find()->where(['id'=>$id]);
         $this->set('results',$query);  

    }
    public function password($email)
    {
         $this->set('varpass'," ");
       
        $table=TableRegistry::get("cakeform");
         Log::write ('debug',$email);
         $user;
            $query = $table->find()->where(['email'=>$email])->first();
            //var_dump($query); Log::write ('warning',"check". $query->id);
            
             
        $user=$this->loadModel('cakeform')->get($query->id);
        if($this->request->is('post'))
        {
        $pass=$this->request->data('password');
        $confirm_pass=$this->request->data('confirm_password');
            if($pass==$confirm_pass && strlen($pass)>3)
            {
            $user=$this->loadModel('cakeform')->patchEntity($user,$this->request->getData());
        if($this->loadModel('cakeform')->save($user))
        {
          $this->Flash->success('Updated!');
          //echo "Updated";
          $this->set('varpass',"Sucessfully Updated!");
        }
        }
        else 
        {
           $this->set('varpass',"Password does not match");
        }
        }

       
        
        // if($pass==$confirm_pass)
        // {  $table=TableRegistry::get("cakeform");
        //  Log::write ('debug',$email);
        //     $query = $table->find()->where(['email'=>$email])->first();
        //      foreach ($query as $row){
        // Log::write ('debug',$row->id);
        // //       $tableobj=$table->get($row->id);
        // //     if($table->save($tableobj))
        // //   echo "User is added.";
        //      }}
             //$tableObj = $table->get($id); 
        }

    
    public function forgot()
    {
        $this->set('showPassword','false');
        $a=0;
        if($this->request->is('post'))
        {
          $id='6';
       
        $email=$this->request->data('email');
        
        
         Log::write('debug',$email);
       $table=TableRegistry::get("cakeform");
        $query = $table->find()->where(['email'=>$email]);
      //  $tableObj = $table->get($id); 
        if($query->first())
        {
            $this->redirect(array("controller" => "Register", 
                      "action" => "password",
                      $email)
                      
            );
        //$this->setAction("password",$email);

             //$routes->connect('/', (['controller' => 'Register', 'action' => 'password']),$email);
  //   $this->Url->(['controller' => 'Register', 'action' => 'password'],$email);
        }
        else {
           $this->set('showPassword',"Email Not found in database!"); 
        }
        }
    }
    public function reset()
    {
 $this->set('varpass'," ");
       
        $this->set('passval','');
       // $email=$this->loadModel('cakeform')->get($query->email);
       // $old=$this->loadModel('cakeform')->get($query->password);
        if($this->request->is('post'))
        {  $pass=$this->request->data('password');
         $confirm_pass=$this->request->data('confirm_password');
         $iold=$this->request->data('oldpassword');
        $email=$this->request->data('email');
        
             $table=TableRegistry::get("cakeform");
         //Log::write ('debug',$email);
            $user;
            $query = $table->find()->where(array('email'=>$email))->first();
            //var_dump($query); 
            Log::write ('warning',"check". $query->id);
             $query = $table->find()->where(array('id'=>$query->id))->first();
               Log::write ('warning',"check". $query->password);
            $user=$this->loadModel('cakeform')->get($query->id);
       // $dataemail=;
       // $datapass=;
         if($pass==$confirm_pass && strlen($pass)>3 && $iold== $user->password && $query->email== $email)
            {
            $this->set('passval',md5($this->request->data('password')));
            $user=$this->loadModel('cakeform')->patchEntity($query,$this->request->getData());
        if($this->loadModel('cakeform')->save($user))
        {
          $this->Flash->success('Updated!');
          //echo "Updated";
          $this->set('varpass',"Sucessfully Reset!");
        }
        }
        else 
        {
           $this->set('varpass',"Password does not match");
        }
        }


    }

      
      public function delete($id)
    {  $Session=$this->request->session();
    Log::write('debug',$id);
    $table=TableRegistry::get("cakeform");
    $tableObj = $table->get($id);
    $table=$table->delete($tableObj);
    // $table=null;
    // $table=TableRegistry::get("cakeform");

     // $query = $table->find()->where(['id'=>$id])->first();
              $userdata=$tableObj->username;
              Log::write('debug',$Session->read('User'));
              //  $Session->write('User', $use);
      //var_dump($Session->read('User'));
    $this->setAction("view",$Session->read('User'));
   


    }  
    
    function logout()
    {   $Session=$this->request->session();
            $Session->delete('User');
            $Session->destroy();
              $this->setAction("login");
    }
} 
?>