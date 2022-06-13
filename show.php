<?php 
 include("includes/connection.php"); 
 

   $record = mysqli_num_rows(mysqli_query($conn,"select id,email,password from login_data"));
 

  $sql="select id,email,password  from login_data";
  $result = mysqli_query($conn,$sql);
   
   
   
 echo ' <br><tr> 
              <th>Sr.No</th> 
              <th>Email</th> 
              <th>Password</th> 
              <th>Edit</th> 
              <th>Delete</th> 
              </tr><br>'; 
   
 $i=1; 

 while($data=mysqli_fetch_array($result)) 
 { 
              echo ' 
             
      <tr> 
         <td>'.$i.'</td>  
         <td>'.$data['email'].'</td> 
         <td>'.$data['password'].'</td> 
         <td><a href="#" class="btn btn-success">Edit</a></td> 
         <td><a href="page1.php?del_id='.$data['id'].'" class="btn btn-danger" >Delete</a></td> 
       </tr><br>'; 
               
               $i++; 
 } 
   
 ?> 
