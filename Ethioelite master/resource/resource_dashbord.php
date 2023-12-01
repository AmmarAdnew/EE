<?php 
$location="localhost";
$username="root";
$password="";
$database_name="ethioelite";
$select_free="SELECT * FROM `computer_sicence_free_ppt`";
$select_all="SELECT * FROM `computer_sicence_all_ppt`";
$select_single="SELECT * FROM `computer_sicence_single_ppt`";
$select_department='SELECT * FROM `department`';

$link_to_database=mysqli_connect($location,$username,$password,$database_name);
$select_free_qurey_free=mysqli_query($link_to_database,$select_free);
$select_free_qurey_all=mysqli_query($link_to_database,$select_all);
$select_free_qurey_single=mysqli_query($link_to_database,$select_single);
$select_department_qurey=mysqli_query($link_to_database,$select_department);

if(!$link_to_database){
    die ;
}

if(isset($_POST['submit'])){
    $courseName=$_POST["course"];
    // $whoInsert=$_POST[""];
    $price=$_POST["price"];
    print_r($_FILES['ppt']);
    $photo=addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $queryI="INSERT INTO `computer_sicence_free_ppt` (`course_name`, `file`,`image`, `price`, `who_insert`, `date`) VALUES ('$courseName', 'file','$photo', '$price', 'whoInsert', '2023-11-08')";
    $result=mysqli_query($link_to_database,$queryI);
    header("location:resource_dashbord.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resource_dashbord.css">

</head>
<body>

    <!-- -------------main part start----------- -->
    <main  id="input-main-continer">
        <!-- ---------------side part start------------------>
        <aside id="input-side-bar">
                <div class="con">
                    <h2>Resource</h2>
                </div>
                <div id="work">

                    <h3 id="call_power_point"> point</a></h3>
                    <h3 id="call_book" > Books</a></h3>
                    <h3 id="call_video" > Video</a></h3>
                
                </div>
        </aside>
        <!-- ---------------side part end-------------------->
        <!-- ---------------display part start--------------->
        <section id="display-resource-part">

            <!-- ---------------power part end-------------------->
            <div id="power">
            <div class="resource-tab-bar">
                <h3><a href="#insert-ppt">Insert</a> </h3>
                <h3><a href="#search-ppt">search</a> </h3>
                <h3 class="tab-element-list power-list-list" id="list-ppt">list</h3>
                <div class="continer power-list">
                    <div class="resource-list-type" id="list-ppt-menu">
                        <h3><a href="#free-ppt">free</a> </h3>
                        <h3><a href="#all-ppt">all</a> </h3>
                        <h3><a href="#single-ppt">single</a> </h3>
                    </div>
                </div>
                <div class="search">
                
                    <form action="" class="search-form">  
                        <input type="search" name="search_box" placeholder="search courses..." maxlength="100">
                        <button type="submit" class="fa fa-search" name="search_box"></button>
                    </form> 
                </div>

                <div class="department">
                    <form action="" class="department-form">
                        <label for="type">department</label>                                   
                        <select name="type" id="type" >
                            <?php $n=0; while($n<160){?>
                                <?php echo '<option value="">'.$n++.'54564</option>' ?>
                            <?php }?>
                        </select>
                        <button type="submit" class="fa fa-search" name="choice-department">choice</button>
                    </form>
                </div>

            </div>
            <div id="power-point-see-and-insert">
                <!-- ---------------power point insert start-------------------->
                <div class="insert-part" id="insert-ppt">
                    
                    <div class="form">

                        <h2 class="title">insert</h2>

                        <form action="resource_dashbord.php" id="input" method="post" enctype="multipart/form-data">

                            <label for="course">Course Name</label>
                            <input type="text" name="course" id="course"><br>
                            <label for="ppt">Ppt File</label>
                            <input type="file" name="ppt" accept="ppt" id="ppt"><br>
                            <label for="photo">Photo</label>              
                            <input type="file" name="photo" id="photo"><br>   
                            <label for="type">Resource Type</label>
                                
                            <select name="type" id="type">
                                <option value="free"> <h2>Free</h2> </option>
                                <option value="free"> <h2>All Unit</h2> </option>
                                <option value="free"> <h2>Single Unit</h2> </option>
                            </select><br>
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" maxlength="5"><br>
                            
                            <div class="submit">
                                <input type="submit" value="Enter" id="" name="submit">
                            </div>

                        </form>

                    </div>

                </div>
                <!-- ---------------power point insert end-------------------->
                <!-- ---------------power point free list start-------------------->
                <div class="list-part" id="free-ppt">

                    <div class="list-continer">

                        <h2 class="title">free list</h2>

                        <div class="tableFixHead">
                            <table>                                 
                                <thead>
                                    <tr>                                          
                                        <th style="border-top-left-radius: 1rem; border:none">Co Name</th>
                                        <th>File</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Who Insert</th>
                                        <th style="border-top-right-radius: 1rem; border:none">Date</th>                                             
                                    </tr> 
                                </thead>     
                                <tbody>                                   
                                        <?php $count=0;
                                    
                                    while($data=mysqli_fetch_assoc($select_free_qurey_free)){?>
                                    <?php $count++;
                                            echo "<tr>" ?>
                                        <?php echo" <td>".$data["course_name"]."</td>" ?>
                                        <?php echo" <td>".$data["file"]."</td>" ?>
                                        <?php echo'<td> <img src="data:image;base64,'.base64_encode($data['image']).'" alt="image" style=" width:98%;height:auto;">'.'</td>' ?>
                                    
                                        <?php echo" <td>".$data["price"]."</td>" ?>
                                        <?php echo" <td>".$data["who_insert"]."</td>" ?>
                                        <?php echo" <td>".$data["date"]."</td>" ?>
                                        
                                    <?php }?>                                                              
                                </tbody>                                
                            </table>                           
                        </div>
                        <div class="table-foot">
                            <div class="row">
                                <h3 class="data">Total</h3>
                                <h3 class="data"><?php echo ''.$count?></h3>
                            </div>
                        </div>
                        

                    </div>

                </div>
                <!-- ---------------power point free list end-------------------->
                <!-- ---------------power point all list start-------------------->
                <div class="list-part" id="all-ppt">

                    <div class="list-continer">

                        <h2 class="title">all unit list</h2>

                        <div class="tableFixHead">
                    
                            <table>                                 
                                <thead>
                                    <tr>                                          
                                        <th style="border-top-left-radius: 1rem; border:none">Co Name</th>
                                        <th>File</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Who Insert</th>
                                        <th style="border-top-right-radius: 1rem; border:none">Date</th>                                             
                                    </tr> 
                                </thead>     
                                <tbody>
                                
                                <?php 
                                    $count=0;
                                    while($data=mysqli_fetch_assoc($select_free_qurey_all)){?>
                                    <?php $count++; echo "<tr>" ?>
                                        <?php echo" <td>".$data["course_name"]."</td>" ?>
                                        <?php echo" <td>".$data["file"]."</td>" ?>
                                        <?php echo'<td> <img src="data:image;base64,'.base64_encode($data['image']).'" style=" width:98%;height:auto;">'.'</td>' ?>
                                    
                                        <?php echo" <td>".$data["price"]."</td>" ?>
                                        <?php echo" <td>".$data["who_insert"]."</td>" ?>
                                        <?php echo" <td>".$data["date"]."</td>" ?>
                                        
                                <?php }?>
                                                            
                                </tbody>
                            
                            </table>
                        
                        </div>
                        <div class="table-foot">
                            <div class="row">
                                <h3 class="data">Total</h3>
                                <h3 class="data"><?php echo ''.$count?></h3>
                            </div>
                        </div>
                    

                    </div>

                </div>
                <!-- ---------------power point all list end-------------------->
                <!-- ---------------power point single list start-------------------->
                <div class="list-part" id="single-ppt">

                    <div class="list-continer">

                        <h2 class="title">single unit list</h2>

                        <div class="tableFixHead">
                    
                            <table>                                 
                                <thead>
                                    <tr>                                          
                                        <th style="border-top-left-radius: 1rem; border:none">Co Name</th>
                                        <th>File</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Who Insert</th>
                                        <th style="border-top-right-radius: 1rem; border:none">Date</th>                                             
                                    </tr> 
                                </thead>     
                                <tbody>
                                <?php 
                                    $count=0;
                                    while($data=mysqli_fetch_assoc($select_free_qurey_single)){?>
                                    <?php $count++; echo "<tr>" ?>
                                        <?php echo" <td>".$data["course_name"]."</td>" ?>
                                        <?php echo" <td>".$data["file"]."</td>" ?>
                                        <?php echo'<td> <img src="data:image;base64,'.base64_encode($data['image']).'" alt="image" style=" width:98%;height:auto;">'.'</td>' ?>
                                    
                                        <?php echo" <td>".$data["price"]."</td>" ?>
                                        <?php echo" <td>".$data["who_insert"]."</td>" ?>
                                        <?php echo" <td>".$data["date"]."</td>" ?>
                                        
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-foot">
                            <div class="row">
                                <h3 class="data">Total</h3>
                                <h3 class="data"><?php echo ''.$count?></h3>
                            </div>
                        </div>
                    </div>
                
                </div>
                <!-- ---------------power point single list end-------------------->
                <!-- ------------------search part start-------- -->
                <div class="search-part" id="search-ppt">
                    
                    
                    <h2 class="title">searched resource</h2>
                    
                    <div class="tableFixHead">
                
                        <table>                                 
                            <thead>
                                <tr>                                          
                                    <th style="border-top-left-radius: 1rem; border:none">Co Name</th>
                                    <th>File</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Who Insert</th>
                                    <th >Date</th>
                                    <th>Update</th>
                                    <th style="border-top-right-radius: 1rem; border:none;text-align:center">Delete</th>                                             
                                </tr> 
                            </thead>     
                            <tbody>
                                   <?php 
                                    $count=0;
                                    while($count<10){?>
                                    <?php $count++; echo "<tr>" ?>
                                        <?php echo" <td>".$count++."</td>" ?>
                                        <?php echo" <td>"."['courseName']"."</td>" ?>
                                        <?php echo" <td>"."[whoInsert]"."</td>" ?>
                                        <?php echo" <td>free465464</td>" ?>
                                        <?php echo" <td>free5464</td>" ?>
                                        <?php echo" <td>free</td>" ?>
                                        <?php echo" <td style=\" text-align:center\"><button>Update</button></td>" ?>
                                        <?php echo" <td style=\" text-align:center\"><button>Delete</button></td>" ?>
                                    <?php echo "</tr>" ?>
                                <?php }?>                           
                            </tbody>
                        </table>
                    </div>
                    <div class="table-foot">
                        <div class="row">
                            <h3 >Total</h3>
                            <h3 ><?php echo ''.$count?></h3>
                        </div>
                    </div>
                </div>
                <!-- ------------------search part end-------- -->
                <!-- ------------------update part start-------- -->
                <div class="update-part" id="update-ppt">
                    <h3 class="title">update</h3>

                    <form action="" id="input" class="form">
                            <label for="course">Course Name</label>
                            <input type="text" name="course" id="course"><br>
                            <label for="ppt">ppt file</label>
                            <input type="file" name="" accept="ppt" id="ppt"><br>
                            <label for="type">Resource Type</label>
                            <select name="type" id="type">
                                <option value="free"><h2>free</h2></option>
                                <option value="free"> <h2>all unit</h2></option>
                                <option value="free"> <h2>single unit</h2></option>
                            </select><br>
                            <label for="photo">Photo</label>
                            
                            <input type="file" name="photo" id="photo" ><br>
                            
                            <div class="imgI">
                                <img src="" alt="no image">
                            </div>
                            <div class="submit">
                                <input type="submit" value="Update" id="" name="submit">
                            </div>
                    </form>
                </div>
                <!-- ------------------update part end-------- -->
            </div>
            </div>
            <!-- ---------------power part end-------------------->
            <!-- ---------------books part start------------------>
            <div id="books">
                <div class="resource-tab-bar">
                    <h3><a href="#insert-ppt">Insert</a> </h3>
                    <h3><a href="#search-ppt">search</a> </h3>
                    <h3 class="tab-element-list book-list-list" id="list-ppt">list </h3>
                    <div class="continer book-list">
                        <div class="resource-list-type" id="list-ppt-menu">
                            <h3><a href="#free-ppt">free</a> </h3>
                            <h3><a href="#all-ppt">all</a> </h3>
                            <h3><a href="#single-ppt">single</a> </h3>
                        </div>
                    </div>
                    <div class="search">
                    
                        <form action="" class="search-form">  
                            <input type="search" name="search_box" placeholder="search courses..." maxlength="100">
                            <button type="submit" class="fa fa-search" name="search_box"></button>
                        </form> 
                    </div>

                    <div class="department">
                        <form action="" class="department-form">
                            <label for="type">department</label>                                   
                            <select name="type" id="type" >
                                <?php $n=0; while($n<160){?>
                                    <?php echo '<option value="">'.$n++.'54564</option>' ?>
                                <?php }?>
                            </select>
                            <button type="submit" class="fa fa-search" name="choice-department">choice</button>
                        </form>
                    </div>

                </div>
                <!-- ---------------book point insert start-------------------->
                <div class="insert-part" id="insert-ppt">
                        
                    <div class="form">

                        <h2 class="title">insert</h2>

                        <form action="resource_dashbord.php" id="input" method="post" enctype="multipart/form-data">

                            <label for="course">Course Name</label>
                            <input type="text" name="course" id="course"><br>
                            <label for="link">Book link</label>
                            <input type="file" name="ppt" accept="ppt" id="ppt"><br>
                            <label for="photo">Photo</label>              
                            <input type="file" name="photo" id="photo"><br>                               
                            <div class="submit">
                                <input type="submit" value="Enter" name="submit-book">
                            </div>

                        </form>

                    </div>

                </div>
                <!-- ---------------book point insert end-------------------->
                <!-- ------------------search part start-------- -->
                <div class="search-part" id="search-ppt">
                            
                    <h2 class="title">searched resource</h2>
                    
                    <div class="tableFixHead">
                
                        <table>                                 
                            <thead>
                                <tr>                                          
                                    <th style="border-top-left-radius: 1rem; border:none">Course Name</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Who Insert</th>
                                    <th style="border-top-right-radius: 1rem; border:none">Date</th>                                             
                                </tr> 
                            </thead>     
                            <tbody>
                                    <?php 
                                    $count=0;
                                    while($count<6){?>
                                    <?php $count++; echo "<tr>" ?>
                                        <?php echo" <td>".$count++."</td>" ?>
                                        <?php echo" <td>"."['courseName']"."</td>" ?>
                                        <?php echo" <td>"."[whoInsert]"."</td>" ?>
                                        <?php echo" <td>free465464</td>" ?>
                                        <?php echo" <td>free5464</td>" ?>
                                    <?php echo "</tr>" ?>
                                <?php }?>                          
                            </tbody>
                        </table>
                    </div>
                    <div class="table-foot">
                        <div class="row">
                            <h3 >Total</h3>
                            <h3 ><?php echo ''.$count?></h3>
                        </div>
                    </div>
                </div>
                <!-- ------------------search part end-------- -->
                <!-- ------------------update part start-------- -->
                <div class="update-part" id="update-ppt">
                    <h3 class="title">update</h3>

                    <form action="" id="input" class="form">
                            <label for="course">Course Name</label>
                            <input type="book-link" name="course" id="course"><br>
                            <label for="ppt">Book link</label>
                            <input type="text" name="book-link" id="book-link"><br>
                            
                            <label for="photo">Photo</label>
                            
                            <input type="file" name="photo" id="photo" ><br>
                            
                            <div class="imgI">
                                <img src="" alt="no image">
                            </div>
                            <div class="submit">
                                <input type="submit" value="Update" id="" name="submit">
                            </div>
                    </form>
                </div>
                <!-- ------------------update part end-------- -->
            </div>                               
            <!-- ---------------books part end-------------------->
            <!-- ---------------video part start------------------>
            <div id="video">
                <div class="resource-tab-bar">
                    <h3><a href="#insert-ppt">Insert</a> </h3>
                    <h3><a href="#search-ppt">search</a> </h3>
                    <h3 class="tab-element-list video-list-list" id="list-ppt">list </h3>
                    <div class="continer" id=" video-list">
                        <div class="resource-list-type" id="list-ppt-menu">
                            <h3><a href="#free-ppt">free</a> </h3>
                            <h3><a href="#all-ppt">all</a> </h3>
                            <h3><a href="#single-ppt">single</a> </h3>
                        </div>
                    </div>
                    <div class="search">
                    
                        <form action="" class="search-form">  
                            <input type="search" name="search_box" placeholder="search courses..." maxlength="100">
                            <button type="submit" class="fa fa-search" name="search_box"></button>
                        </form> 
                    </div>

                    <div class="department">
                        <form action="" class="department-form">
                            <label for="type">department</label>                                   
                            <select name="type" id="type" >
                                <?php $n=0; while($n<160){?>
                                    <?php echo '<option value="">'.$n++.'54564</option>' ?>
                                <?php }?>
                            </select>
                            <button type="submit" class="fa fa-search" name="choice-department">choice</button>
                        </form>
                    </div>

                </div>
                <!-- ---------------book point insert start-------------------->
                <div class="insert-part" id="insert-ppt">
                        
                    <div class="form">

                        <h2 class="title">insert</h2>

                        <form action="resource_dashbord.php" id="input" method="post" enctype="multipart/form-data">

                            <label for="course">Course Name</label>
                            <input type="text" name="course" id="course"><br>
                            <label for="Video-link">Video link</label>
                            <input type="text" name="Video-link" id="Video-link"><br>
                            <label for="photo">Photo</label>              
                            <input type="file" name="photo" id="photo"><br>                               
                            <div class="submit">
                                <input type="submit" value="Enter" name="Video-book">
                            </div>

                        </form>

                    </div>

                </div>
                <!-- ---------------book point insert end-------------------->
                <!-- ------------------search part start-------- -->
                <div class="search-part" id="search-ppt">
                            
                    <h2 class="title">searched resource</h2>
                    
                    <div class="tableFixHead">
                
                        <table>                                 
                            <thead>
                                <tr>                                          
                                    <th style="border-top-left-radius: 1rem; border:none">Course Name</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Who Insert</th>
                                    <th style="border-top-right-radius: 1rem; border:none">Date</th>                                             
                                </tr> 
                            </thead>     
                            <tbody>
                                    <?php 
                                    $count=0;
                                    while($count<6){?>
                                    <?php $count++; echo "<tr>" ?>
                                        <?php echo" <td>".$count++."</td>" ?>
                                        <?php echo" <td>"."['courseName']"."</td>" ?>
                                        <?php echo" <td>"."[whoInsert]"."</td>" ?>
                                        <?php echo" <td>free465464</td>" ?>
                                        <?php echo" <td>free5464</td>" ?>
                                    <?php echo "</tr>" ?>
                                <?php }?>                          
                            </tbody>
                        </table>
                    </div>
                    <div class="table-foot">
                        <div class="row">
                            <h3 >Total</h3>
                            <h3 ><?php echo ''.$count?></h3>
                        </div>
                    </div>
                </div>
                <!-- ------------------search part end-------- -->
                <!-- ------------------update part start-------- -->
                <div class="update-part" id="update-ppt">
                    <h3 class="title">update</h3>

                    <form action="" id="input" class="form">
                            <label for="course">Course Name</label>
                            <input type="video-link" name="course" id="course"><br>
                            <label for="ppt">Book link</label>
                            <input type="text" name="video-link" id="video-link"><br>
                            
                            <label for="photo">Photo</label>
                            
                            <input type="file" name="photo" id="photo" ><br>
                            
                            <div class="imgI">
                                <img src="" alt="no image">
                            </div>
                            <div class="submit">
                                <input type="submit" value="Update" id="" name="submit">
                            </div>
                    </form>
                </div>
                <!-- ------------------update part end-------- -->
            </div>
            <!-- ---------------video part end-------------------->
        </section>  
        <!-- ---------------display part end----------------->
    </main> 
    <!-- -------------main part end------------ -->  
    <script>
     
        var videoListList=document.getElementsByClassName('video-list-list');
        var listPptMenu=document.getElementById('list-ppt-menu');

        videoListList[0].addEventListener("click",function(){
            this.style.color="#864def"; 
            document.getElementById('power').style.display="block";
            document.getElementById('books').style.display="none";
            document.getElementById('video').style.display="none";
        });
     
        document.getElementById('call_power_point').addEventListener("click",function(){
            this.style.color="#864def"; 
            document.getElementById('power').style.display="block";
            document.getElementById('books').style.display="none";
            document.getElementById('video').style.display="none";
        });
        document.getElementById('call_book').addEventListener("click",function(){
            this.style.color="#864def";   
            document.getElementById('power').style.display="none";
            document.getElementById('books').style.display="block";
            document.getElementById('video').style.display="none";
        });
        document.getElementById('call_video').addEventListener("click",function(){
            this.style.color="#864def";
            document.getElementById('power').style.display="none";
            document.getElementById('books').style.display="none";
            document.getElementById('video').style.display="block";
        });

    </script> 
</body>
</html>