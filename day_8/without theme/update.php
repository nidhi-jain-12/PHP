<?php
    $host="localhost";
    $username="root";
    $password="";
    $dbname="database_1";
    
    // Connection Function
    $connection=mysqli_connect($host,$username,$password,$dbname);
    
    
    
    $editid=$_GET['id'];
    // select data from table
    $editq=mysqli_query($connection,"select*from table1_student where std_id='{$editid}'")
    or die(mysqli_error($connection));
    
    $editdata=mysqli_fetch_array($editq);
    // print_r($editdata);
    
    if($_POST){
        $txt1=$_POST['txt1'];
        $txt2=$_POST['txt2'];
        $txt3=$_POST['txt3'];
        $txt4=$_POST['txt4'];
        $txt5=$_POST['txt5'];
        $txt6=$_POST['txt6'];
        $txt7=$_POST['txt7'];
        $txt8=$_POST['txt8'];
        $txt9=$_POST['txt9'];

    
        $uq=mysqli_query($connection,"update table1_student set std_name='{$txt1}',
        std_gender='{$txt2}',std_age='{$txt3}',std_date='{$txt4}',std_email='{$txt5}',std_mobile='{$txt6}',std_address='{$txt7}',std_password='{$txt8}',std_city='{$txt9}' where std_id='{$editid}'")
        
        or die(mysqli_error($connection));
    
        if($uq){
            echo"<script>alert('Record updated');
            window.location='display.php';</script>";
        }
    
    }

    


?>


<html>
   <body>
      <h2>Registration Form for Students</h2>
<form method="post">
<table>
	 <tr>
		<td>Name : </td>
		<td><input type="text" value="<?php echo $editdata['std_name']?>" name="txt1"/></td>
	 </tr>
    <tr>
           <td> Gender : </td>
           <td> Male <input type="radio" <?php if( $editdata['std_gender']=='Male')
           {echo "checked";}?> value="Male" name="txt2"/>
           Female <input type="radio" <?php if( $editdata['std_gender']=='Female')
         {echo "checked";}?> value="Female" name="txt2"/></td>
      </tr> 
    <tr>
		<td>Age : </td>
		<td> <input type="text"  value="<?php echo $editdata['std_age']?>" name="txt3" /></td>
	</tr> 
	
    <tr>
		<td>Date : </td>
		<td> <input type="date"  value="<?php echo $editdata['std_date']?>" name="txt4"/></td>
	</tr> 
	
    <tr>
		<td>Email : </td>
		<td> <input type="Email"  value="<?php echo $editdata['std_email']?>" name="txt5"/></td>
	</tr>
	
	<tr>
		<td>Mobile : </td>
		<td> <input type="number"  value="<?php echo $editdata['std_mobile']?>" name="txt6"/></td>
	</tr>

    <tr>
		<td>Address : </td>	
		<td><input type="text"  value="<?php echo $editdata['std_address']?>" name="txt7"/></td>
	</tr>

    <tr>
		<td>Password : </td>
		<td> <input type="password"  value="<?php echo $editdata['std_password']?>" name="txt8"/></td>
	</tr>
	
    <tr>
		<td>City : </td>	
		<td><input type="text"  value="<?php echo $editdata['std_city']?>" name="txt9"/></td>
	</tr>

	
	<tr>
	<td>
	<input type="submit"/></td>
    </tr>
	
	</table>
	</form>
    </body>
</html>

