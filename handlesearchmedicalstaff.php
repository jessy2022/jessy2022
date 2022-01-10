<?php

$search = $_POST['srch'];

$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$searchquery=mysql_query("SELECT * FROM medical_staff WHERE first_name LIKE('%$search%')");

if(mysql_num_rows($searchquery)>0){
    echo'
    <table width=100% cellpadding="10" border="1" bgcolor="khaki">
    <tr>
    <th bgcolor="azure">id</th>
     <th bgcolor="azure">First Name</th>
      <th bgcolor="azure">Second Name</th>
       <th bgcolor="azure">Specialization</th>
        <th bgcolor="azure">Email</th>
         <th bgcolor="azure">Phone</th>
          <th bgcolor="azure">Gender</th>
          <th bgcolor="azure">Date Appointed</th>
           <th bgcolor="azure">Action</th>
           </tr>';
           
       while($row=mysql_fetch_array($searchquery)) {
        $id=$row['id'];
        $first_name=$row['first_name'];
        $second_name=$row['second_name'];
        $specialization=$row['specialization'];
        $email=$row['email'];
        $phone=$row['phone'];
        $gender=$row['gender'];
        $date_appointed=$row['date_appointed'];
        
        echo'
        <tr>
        <td>'.$id.'</td>
        <td>'.$first_name.'</td>
        <td>'.$second_name.'</td>
        <td>'.$specialization.'</td>
        <td>'.$email.'</td>
        <td>'.$phone.'</td>
        <td>'.$gender.'</td>
        <td>'.$date_appointed.'</td>
        <td>
        <a href="editstaff.php? record='.$id.'" class="edit"> EDIT</a>
        <a href="deletestaff.php? record='.$id.'" class="deletet"> DELETE</a>
        </td>
        </tr>';
       }
       echo'
       </table>';
}
else {
    echo'
    No search results found';
}


?>
<br /><br />

<a href="searchmedicalstaff.php">Continue</a>