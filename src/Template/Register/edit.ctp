<center><h2 style='color:white;'>Updation Form</h2></center>
<?php 
 $Session=$this->request->session();
  if(isset($errors)){
      foreach($errors as $error)
     { foreach($error as $msg)
      {
      echo '<center><font color = "red">'.$msg.'</font></center>';
   }}} else {
      echo "<center>No errors.</center>";
   }echo "<center>";
   echo $this->Html->css('mystyles');
    if(!$Session->check('User'))
   {
     echo "Login to Show Data";
   }
   else {
       echo "<a href = '".$this->Url->build(["controller" => "Register","action"=>"view",$Session->read('User')])."'>Back</a>"; 
 // echo "<center><a href=".$this->Url->build(['controller' => 'Register', 'action' => 'login']).">Already Registered? Login</a></center>";
  foreach ($results as $row):
   echo $this->Form->create('Updation Form');
   echo "<img src='".$row->profile_pic."' height= '150' width='80' ><br><br>";
   echo $this->Form->file('profile_pic',array('id'=>'file','value'=>$row->profile_pic));
   echo $this->Form->input('first_name',array('id'=>'first_name','value'=>$row->first_name));
  echo $this->Form->input('last_name',array('id'=>'last_name','value'=>$row->last_name));
   echo $this->Form->input('username',array('value'=>$row->username));
   echo $this->Form->input('email',array('type'=>"email",'value'=>$row->email));
    echo $this->Form->label('Password');
   echo $this->Form->password('password',array('id'=>"password"));
   echo $this->Form->label('Confirm Password');
   echo $this->Form->password('confirm_password',array('id'=>"confirm_password")); 
   echo $this->Form->label('gender');
   echo $this->Form->radio('gender',$gender1); 

    echo $this->Form->input('mobile_no',array('id'=>'mobile_number','value'=>$row->mobile_no));
    echo $this->Form->input('date', ['type'=>'date','id'=>'date']);
    echo $this->Form->label('Country');
    echo $this->Form->select('country',$country,array('id'=>"country"));
    echo $this->Form->input('zipcode',array('value'=>$row->zipcode));
    echo $this->Form->input('interest',array('value'=>$row->interest));
 echo $this->Form->input('description',array('value'=>$row->description));
  echo "<br>";
 
   echo "<center>".$this->Form->button('Submit')."</center>";
   echo  $this->Form->end();
   endforeach;
   echo "<br><br>";
 
   echo "</center>";

   }
?>
