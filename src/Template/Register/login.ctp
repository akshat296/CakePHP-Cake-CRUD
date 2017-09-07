

<?php 
echo $this->Html->css('mystyles');
echo "<center><h2 id='hi'> Login Form </h2>";
echo "<title>Login</title>";
echo $this->Form->create('Login Form');
echo $this->Form->input('username');
echo $this->Form->label('Password');
echo $this->Form->password('password',array('id'=>'password'));
echo "<br><a href = '".$this->Url->build(["controller" => "Register","action"=>"registrationform"])."'> Sign Up </a>";
echo   "<br><a href = '".$this->Url->build(["controller" => "Register","action"=>"forgot"])."'>Forgot Password</a>";
echo "<br><a href = '".$this->Url->build(["controller" => "Register","action"=>"reset"])."'>Reset Password </a>";
echo "<br><br>".$this->Form->button('Submit')."</center>";
 echo $this->Form->end();
?>