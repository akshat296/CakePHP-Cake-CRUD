<?php
 echo $this->Html->css('mystyles');
 echo "<br><center><h2>Reset Password</h2></center>";
echo '<center>'. $this->Form->create('Forgot');

   echo $this->Form->input('email',array('id'=>"email"));
 echo $this->Form->label('Old Password');
   echo $this->Form->password('oldpassword',array('id'=>"oldpassword"));
    echo $this->Form->label('Password');
   echo $this->Form->password('password',array('id'=>"password",'value'=>$passval));
   echo $this->Form->label('Confirm Password');
   echo $this->Form->password('confirm_password',array('id'=>"confirm_password",'value'=>$passval)); 
echo "<br>".$this->Form->button('Submit')."</center>";
echo "<br><center><h2>".$varpass."</h2></center>";?>
 