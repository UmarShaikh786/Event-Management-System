<html>

<link href="Style.css" rel="stylesheet " type="text/css" />
<form method="post">
<body>
    <div class="tree">
    <?php


require("../connection.php");
session_start();
$id=$_SESSION['id'];

$count="select count(*) as Total from Familyinfo where UId=".$id;
 $rs= mysqli_query($conn,$count);    
    $row=mysqli_fetch_array($rs);


    echo "<h3>Total Member :";
    echo $row['Total']+1 ."</h3>";

if($row['Total']<=1){
    header("location:familyform2.php");
}   
    else
    {
$user="select * from Usermaster where UId=".$id;
    $rs=mysqli_query($conn,$user);
    $row=mysqli_fetch_array($rs);
     $name=$row['Uname'];
     $image=$row['Image'];
    $mobile=$row['Mobile'];
    $dob=$row['Bdate'];
 
//$sql="select u.FName,u.Image,u.Mobile,u.Dob,f.name,f.Relation,f.Birth,f.Passion from Usermaster u,Familyinfo f where u.UId=f.UId and u.UId=".$id;
$sql="select * from Familyinfo where UId=".$id;  
           
            $rs=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($rs))
            {
               // $user=$row['FName'];
                
                
                if($row['Relation']=="Father"){
                $father = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                }
                if($row['Relation']=="Mother"){
                    $mother = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                    }
                    if($row['Relation']=="Brother"){
                        $brother = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                        }
                   if($row['Relation']=="Sister"){
                $sister = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                }
                if($row['Relation']=="Wife"){
                    $wife = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                    }
                    if($row['Relation']=="Son")
                {   
                        $son = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                        
                    
                        
                       // print_r ($son);    
                    }
                        if($row['Relation']=="Daughter"){
                            $daug = array($row['name'],$row['Relation'],$row['Birth'],$row['Mdate'],$row['Image']); 
                            }
                        }
            
        ?>
               
                
                <link href="Style.css" rel="stylesheet " type="text/css" />
                
                <body>
                    <div class="tree">
                        
                     
                    <ul>
                    <?php if(isset($father)){?>
                            <li><a href="#" class="edit"><img src="<?php echo $father[4]; ?>" alt=""><span><?php echo $father[0]; ?> <br><br>Relation :<?php echo $father[1]; ?> <br>Birth : <?php echo $father[2];if(isset($father[3])){ ?><br>Marriage Date : <?php echo $father[3]; } ?></span></a>
                            <?php }?>
                            
                            <ul>
                            <?php if(isset($mother)){?>
                            <li><a href="#" class="edit"><img src="<?php echo $mother[4]; ?>" alt=""><span><?php echo $mother[0]; ?> <br><br>Relation :<?php echo $mother[1]; ?><br>Birth : <?php echo $mother[2]; if(isset($mother[3])){?><br>Marriage Date : <?php echo $mother[3]; } ?></span></a>       
                            <?php }?>
                                    <ul>
                                    <?php if(isset($brother)){?>
                                    <li><a href="#" class="edit"> <img src="<?php echo $brother[4]; ?>" alt=""><span><?php echo $brother[0]; ?><br><br>Relation :<?php echo $brother[1]; ?><br>Birth :<?php echo $brother[2];if(isset($brother[3])){ ?><br>Marriage Date : <?php echo $brother[3]; }?></span></a></li>
                                    <?php }?>
                                    <?php if(isset($sister)){?>
                                    <li><a href="#" class="edit"> <img src="<?php echo $sister[4]; ?>" alt="" ><span><?php echo $sister[0]; ?><br><br>Relation  :<?php echo $sister[1]; ?><br>Birth  :<?php echo $sister[2]; if(isset($sister[3])){ ?><br>Marriage Date : <?php echo $sister[3]; } ?></span></a></li>
                                        <?php echo "";}?>
                                        <li><a href="../profile.php" class="edit"><img src="../<?php echo $image; ?>" alt=""><span><?php echo "<h2><Strong>".$name."</Strong></h2>"; ?> <br><br>Mobile :<?php echo $mobile; ?><br>Birth : <?php echo $dob; ?></span></a>       
                                    
                                           
                                    
                                   
                      
          <ul>               
          <?php if(isset($wife)){?>                                         
        <li><a href="#" class="edit"> <img src="<?php echo $wife[4]; ?>" alt=""><span><?php echo $wife[0]; ?> <br><br>Relation :<?php echo $wife[1]; ?> <br>Birth : <?php echo $wife[2]; if(isset($wife[3])){ ?><br>Marriage Date : <?php echo $wife[3];} ?></span></a>
                         <?php }?>  
               
                         <ul>        
                  <?php if(isset($son)){?>
        <li><a href="#" class="edit"> <img src="<?php echo $son[4]; ?>" alt=""><span><?php echo $son[0]; ?><br><br>Relation :<?php echo $son[1]; ?><br>Birth  :<?php echo $son[2];if(isset($son[3])){ ?><br>Marriage Date : <?php echo $son[3]; }?></span></a></li>                
                    <?php }?>
                    
                    <?php if(isset($daug)){?>
        <li><a href="#" class="edit"> <img src="<?php echo $daug[4]; ?>" alt=""><span><?php echo $daug[0]; ?><br><br>Relation :<?php echo $daug[1]; ?><br>Birth  :<?php echo $daug[2]; if(isset($daug[3])){ ?><br>Marriage Date : <?php echo $daug[3]; }?></span></a></li>                
                        <?php }?>
    </ul>
                    
            </ul>
        </ul>
        
                    </div>
                <div>
                    <a  href="../profile.php" style="background-color:lightgreen" >Go Back</a>
                    <a  href="familyform2.php" style="background-color:lightgreen" >Family Form</a>
                    </div>
                    </form>
                </body>
                </html>
                  
                    <?php } ?>   
        