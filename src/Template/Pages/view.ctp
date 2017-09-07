<html>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Marks</th>
</tr>


<?php echo $this->form->create('Notes');
echo $this->form->input('id');
     echo $this->form->input('name');
      echo $this->form->input('marks');
  echo $this->form->end('Save Notes');
?>





</table>
</body>
</html>