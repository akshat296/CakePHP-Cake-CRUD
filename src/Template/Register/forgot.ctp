<?php
 echo $this->Html->css('mystyles');
 // echo "<center><a href=".$this->Url->build(['controller' => 'Register', 'action' => 'login']).">Already Registered? Login</a></center>";
   echo "<center>". $this->Form->create('Forgot Password');
   echo $this->Form->input('email',array('type'=>"email"));
   echo "<br>";
   echo $this->Form->button('submit')."</center>";
   echo $this->Form->end();
if($showPassword=='true')
{
    
} 
if($showPassword=='Email Not found in database!')
{
echo "<br><center><h2>".$showPassword."</h2></center>";
}
?>