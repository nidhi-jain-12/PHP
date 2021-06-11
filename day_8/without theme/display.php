<?php
$host="localhost";
$username="root";
$password="";
$dbname="database_1";

// Connection Function
$connection=mysqli_connect($host,$username,$password,$dbname);
//query
$q=mysqli_query($connection,"select * from table1_student where is_delete=0")
or die(mysqli_error($connection));

echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>Age</th>";
echo"<th>Date</th>";
echo"<th>Email</th>";
echo"<th>Mobile</th>";
echo"<th>Address</th>";
echo"<th>Password</th>";
echo"<th>City</th>";
echo"<th>Action</th>";


echo"</tr>";
$i=0;
while($row=mysqli_fetch_array($q)){
    $i++;
    
    echo"<tr>";   
    echo"<td>$i</td>";
  
    echo"<td>{$row['std_name']}</td>";
    echo"<td>{$row['std_gender']}</td>";
    echo"<td>{$row['std_age']}</td>";
    echo"<td>{$row['std_date']}</td>";
    echo"<td>{$row['std_email']}</td>";
    echo"<td>{$row['std_mobile']}</td>";
    echo"<td>{$row['std_address']}</td>";
    echo"<td>{$row['std_password']}</td>";
    echo"<td>{$row['std_city']}</td>";

    echo"<td><a href='update.php?id={$row['std_id']}'>Edit<a/> |<a href='deletee.php?deleteid={$row['std_id']}'>Delete</a></td>";

    echo"</tr>";

}

echo"</table>";

echo"<a href='create.php'>Add Record</a>";

?>