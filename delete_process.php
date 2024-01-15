<?php 
                            if(isset($_GET['id'])){
							$id=$_GET['id'];
                            $delete=mysqli_query($con,"DELETE FROM `hospital` WHERE `id`='$id'");
							$row=mysqli_fetch_array($query);
                            }
	?>