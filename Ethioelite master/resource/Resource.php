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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EthioElite</title>
    <link rel="shortcut icon" href="book_pile.jpg" type="image/x-icon" >
    <link rel="stylesheet" href="Resource.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="Resource.js" defer></script>
</head>
<body>
   <?php include '../components/header.php' ;?>
   
    <main  id="continer">
        <section id="tab-bar">
            
            <div id="dropDownList">

                 <div id="dorpDownList-conti">
                    <h2  id="res">resources</h2>
                    <h2  id="open"><i class='fa fa-angle-down fa-5x' style='color:#ffc107'></i></h2>
                    <h2  id="close"><i class="fa fa-solid fa-x" ></i></h2>
                </div>

                <div id="tab">
                    <h3 class="tab-titles active-link" id="powerPoint"><i class="fa fa-solid fa-file-powerpoint"></i>power Point</h3>
                    <h3 class="tab-titles" id="Book"><i class="fa fa-solid fa-book"></i>Recommended Books</h3>
                    <h3 class="tab-titles" id="Video"><i class="fa fa-solid fa-video"></i>Recommended Video</h3> 
                </div>
                <div class="search">
                    <form action="" class="search-form">
                        <input type="search" name="search_box" placeholder="search courses..." maxlength="100">
                        <button type="submit" class="fa fa-search" name="search_box"></button>
                    </form> 
                </div>
                  
            </div>

        </section>

        <section id="power-point">

            <section id="ppt-continer">
                
                <h2 class="titles">Free Resources</h2>

                <div id="free-ppt-resources">
               
                    <?php while($data=mysqli_fetch_assoc($select_free_qurey_all)){?>
                        <div class="free-unit-ppt-resources">
                            <div class="free-unit-ppt-image-continer">
                                <h3 class="course-name"><?php echo "math" ?></h3>
                                <?php echo'<img src="data:image;base64,'.base64_encode($data['image']).'" alt="image" ">' ?>
                                <!-- <div class="des">
                                    <h3><?php echo "tuit" ?></h3>
                                    <h3>credit hour</h3>
                                    <h3>no exam in exit</h3>
                                    <i class="fa-light fa-download"></i>
                                </div> -->
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <h2 class="titles">Payable Resources(All Unit At All)</h2>

                <div id="payable-ppt-resources-all">
                    <?php for($x=0;$x<6;$x++){?>
                        <div class="all-unit-ppt-resources">
                            <div class="all-unit-ppt-image-continer">
                                <img src="book_pile.jpg" alt="">
                            </div>
                            <div class="data">
                                <h3><?php echo 'database' ?></h3>
                                <h3>credit hour</h3>
                                <h3>no exam in exit</h3>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <h2 class="titles">Payable Resourcess(on Spacific unit)</h2>

                <div id="payable-ppt-resources-specific">

                <?php for($x=0;$x<8;$x++){?>
                        <div class="specific-unit-ppt-resources">
                            <div class="specific-unit-ppt-image-continer">
                                <h3 class="course-name"><?php echo $x ?></h3>
                                <img src="book_pile.jpg" alt="">
                            </div>
                        </div>
                    <?php } ?>
                                           
                </div>

            </section>
            
        </section>
        <section id="books">
            <div id="books-resources">
                <?php while($data=mysqli_fetch_assoc($select_free_qurey_free)){?>
                    <div class="books-image-continer">
                        <?php echo'<img src="data:image;base64,'.base64_encode($data['image']).'" alt="image" ">' ?>
                    </div> 
                <?php } ?>
            </div>

        </section>
        <section id="videos">

            <div id="videos-resources"> 
            <?php for($x=0;$x<0;$x++){?>
               <iframe  src="https://www.youtube.com/embed/ly36kn0ug4k?si=75Q4F40gGQPXPl5E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowfullscreen ></iframe>

                </iframe>
                <?php } ?>
          
        </section>
    </main>
</body>
</html>