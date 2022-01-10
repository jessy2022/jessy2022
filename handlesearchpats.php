<?php

$search = $_POST['srch'];

$server=mysql_connect('localhost','root','');
$db=mysql_select_db('health', $server);
$searchquery=mysql_query("SELECT * FROM patients WHERE name LIKE('%$search%')");

if(mysql_num_rows($searchquery)>0){
    echo'
    <table width=100% cellpadding="10" border="1" bgcolor="khaki">
    <tr>
    <th bgcolor="azure">id</th>
     <th bgcolor="azure">Name</th>
      <th bgcolor="azure">Gender</th>
       <th bgcolor="azure">Age</th>
         <th bgcolor="azure">Phone</th>
          <th bgcolor="azure">Appointment Date</th>
           <th bgcolor="azure">Action</th>
           </tr>';
           
       while($row=mysql_fetch_array($searchquery)) {
        $id=$row['id'];
        $name=$row['name'];
        $gender=$row['gender'];
        $age=$row['age'];
        $phone=$row['phone'];
        $appointment=$row['appointment'];
        
        echo'
        <tr>
        <td style="text-align:center;">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$gender.'</td>
        <td style="text-align:center;">'.$age.'</td>
        <td style="text-align:center;">'.$phone.'</td>
        <td style="text-align:center;">'.$appointment.'</td>
        <td>
        
        
        <a href="editpats.php? record='.$id.'" class="edit">EDIT</a>
        <a href="deletepats.php? record='.$id.'" class="deletet">DELETE</a>
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

<a href="searchpats.php">Continue</a>