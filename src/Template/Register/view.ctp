<center><h2 style='color:white;' >Showing Database</h2>
<h3 style='color:white;' >Welcome <?php   $Session=$this->request->session();echo $Session->read('User');?></h3>
</center>
<?php   echo 
"<a style='float:right;margin:5px;' href=".$this->Url->build(['controller' => 'Register', 'action' => 'logout']).">
Log out</a>";
?><table>
   <tr>
     
                    <td>Profile Pic</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Gender</td>
                    <td>Mobile Number</td>
                    <td>Date Of Birth</td>
                    <td>Country</td>
                    <td>Zip Code</td>
                    <td>Interest</td>
                    <td>Description</td> 
                    <td>View</td>
                    <td>Edit</td>
                    <td>Delete</td>
   </tr>

   <?php
     echo $this->Html->css('mystyles');
      foreach ($results as $row):
        echo "<td><img src='".$row->profile_pic."' alt='Smiley face' width='100' height='100'></td>";
        echo "<td>".$row->first_name."</td>";
        echo "<td>".$row->last_name."</td>";
        echo "<td>".$row->username."</td>";
        echo "<td>".$row->email."</td>";
        echo "<td>".$row->gender."</td>";
        echo "<td>".$row->mobile_no."</td>";
        echo "<td>".$row->date_of_birth."</td>";
        echo "<td>".$row->country."</td>";
        echo "<td>".$row->zipcode."</td>";
        echo "<td>".$row->interest."</td>";
        echo "<td>".$row->description."</td>";
         echo "<td><a href = '".$this->Url->build(["controller" => "Register","action"=>"usershow",$row->id])."'>View</a></td>";
        echo "<td><a href = '".$this->Url->build(["controller" => "Register","action"=>"edit",$row->id])."'>Edit</a></td>";
        echo $row->id;
        if($Session->read('User')!=$row->username)
        {
        echo "<td><a href = '".$this->Url->build(["controller" => "Register","action"=> "delete",$row->id])."'>Delete</a></td></tr>";
        }
        else {
          echo "<td><a href='#' style='color:blue;'>Admin</a></td></tr>";
        }
      endforeach;
      //  echo "<center><a href=".$this->Url->build(['controller' => 'Register', 'action' => 'login']).">Login</a><br>";
      echo "</center>";
   ?>
  
</table>

 
