<?php
if(!isset($_SESSION)){
   session_start();
}
if(!isset($_SESSION['user'])){
	header("Location: index.html");
}
else
{
    include "../config.php";
    $sql = "select * from register";
    $query = mysqli_query($con, $sql);
    $s = 0;
     ?>   
        <table>
            <tr>
                <th>slno</th>
                <th>Name</th>
                <th>city</th>
                <th>BG</th>
                <th>Mobile</th>
                <th>email</th>
            </tr>
            <?php
             while($row = mysqli_fetch_array($query)){
                 ++$s;
            ?>
            <tr>
                <td><?=$s;?></td>
                <td><?=$row['name'];?></td>
                 <td><?=$row['city'];?></td>
                  <td><?=$row['type'];?></td>
                   <td><?=$row['phone'];?></td>
                    <td><?=$row['email'];?></td>
            </tr>
            <?php } ?>
        </table>
       <?php 
}