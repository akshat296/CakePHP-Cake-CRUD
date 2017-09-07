<center><h2 style='color:white;'>View User</h2></center>
<?php 
   $Session=$this->request->session();
  echo "<center>";
   echo $this->Html->css('mystyles');
   //var_dump($Session->check('Users'));
   if(!$Session->check('User'))
   {
     echo "Login to Show Data";
   }
   else {
 // echo "<center><a href=".$this->Url->build(['controller' => 'Register', 'action' => 'login']).">Already Registered? Login</a></center>";
  foreach ($results as $row):
   echo $this->Form->create('Updation Form');
   echo "<img src='".$row->profile_pic."' height= '300' width='200' ><br><br>";
  
   echo "<table style='margin:auto;border:6px;width:600px'><tr><center><td>First Name      :".$row->first_name;     echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Last Name       :".$row->last_name;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Username        :".$row->username;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Email           :".$row->email;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Gender          :".$row->gender; echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Mobile Number   :".$row->mobile_no;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Date            :".$row->date;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Country         :".$row->country;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Zipcode         :".$row->zipcode;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Interest        :".$row->interest;echo "<br>";echo "</td></tr>";echo "</center>";
   echo "<tr><center><td>Description     :".$row->description;echo "<br>";echo "</td></tr>";echo "</center>";
  echo "<br>";
 
   echo "<a href = '".$this->Url->build(["controller" => "Register","action"=>"view",$Session->read('User')])."'>Back</a>"; 
   echo  $this->Form->end();
   endforeach;
   echo "</center>";
   }
?>
