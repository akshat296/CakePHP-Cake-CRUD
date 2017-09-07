<center>
<h2 style="color:#475831;">Registration Form</h2>

</center>
<?php 
  if(isset($errors)){
      foreach($errors as $error)
     { foreach($error as $msg)
      {
      echo '<center><font color = "red">'.$msg.'</font></center>';
   }}} else {
      echo "<center>No errors.</center>";
   }echo "<center>";
   echo $this->Html->css('mystyles');
  echo "<center><a href=".$this->Url->build(['controller' => 'Register', 'action' => 'login']).">Already Registered? Login</a></center>";
   $options=array('type'=>'file');
   echo $this->Form->create('Registration Form',$options);
   echo "<input type='file' name='profile_pic' id='profile_pic'>";
  // echo $this->Form->file('profile_pic',array('id'=>'profile_pic','name'=>'data[profile_pic]'));
   echo $this->Form->input('first_name',array('id'=>'first_name'));
  echo $this->Form->input('last_name',array('id'=>'last_name'));

   echo $this->Form->input('username');
   echo $this->Form->input('email',array('type'=>"email"));
    echo $this->Form->label('Password');
   echo $this->Form->password('password',array('id'=>"password"));
   echo $this->Form->label('Confirm Password');
   echo $this->Form->password('confirm_password',array('id'=>"confirm_password")); 
   echo $this->Form->label('gender');
   echo $this->Form->radio('gender',$gender1); 
    echo $this->Form->input('mobile_number',array('id'=>'mobile_number'));
    echo $this->Form->input('date', ['type'=>'date','id'=>'date']);
    echo $this->Form->label('Country');
    echo $this->Form->select('country',$country,array('id'=>"country"));
    echo $this->Form->input('zipcode');
    echo $this->Form->input('interest');
 echo $this->Form->input('description');
  echo "<br>";
  // echo $this->Form->date('date_of_birth',array('type'=>"date"));
   echo $this->Form->checkbox('terms')."<label for='terms'>Accept Terms And Conditions</label>";
    // echo     $this->Form->checkbox('country',$country);
   echo "<center>".$this->Form->button('Submit')."</center>";
   echo  $this->Form->end();
   echo "</center>";
  
      ?>
