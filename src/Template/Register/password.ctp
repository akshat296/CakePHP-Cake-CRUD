<?php 

 echo $this->Html->css('mystyles');
 echo "<br><center><h2>Change Password</h2></center>";
echo '<center>'. $this->Form->create('Forgot');
    echo $this->Form->label('Password');
   echo $this->Form->password('password',array('id'=>"password"));
   echo $this->Form->label('Confirm Password');
   echo $this->Form->password('confirm_password',array('id'=>"confirm_password")); 
echo "<br>".$this->Form->button('Submit')."</center>";
 echo "<br><center><h2>".$varpass."</h2></center>";?>
