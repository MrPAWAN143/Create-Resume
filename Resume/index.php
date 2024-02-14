<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <!-- <link rel="stylesheet" href="Resumex.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>

    <?php
    // echo "<pre>"; 

        if (isset($_FILES['profile_pic']['name'])) {
            $filename = $_FILES['profile_pic']['name'];
            // var_dump($_FILES);

            
            $folder = "assest/images/";
            $ext = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
            // var_dump($ext);
            $fileSize = $_FILES['profile_pic']['size'];
            $fileSize = round($fileSize/1024);
            // var_dump($fileSize.'kb');

            $extention = array('png','jpg','jpeg','svg','webp');

            if(!in_array($ext,$extention)){
                echo "Invalid File type";

                die();
            }
            if($fileSize == '1024'){
                echo "check File Size You must be upload less then 1mb";
                die();
            }
            if(!file_exists('assest/')){
                mkdir('assest');
            }
            if(!file_exists('assest/images/')){
                mkdir('assest/images');
            }


            if(!move_uploaded_file($_FILES['profile_pic']['tmp_name'],$folder.$filename)){
                
                echo "sorry your Pic not uploaded please try again";
                die();

            }


         $path = "assest/images/";
            $scan = scandir($path);

           

            




            
            
        }
    

    $name = strtoupper('Pawan Kumar');
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $name = trim(strtoupper($name)," ");
        // var_dump($name);
    }

    $profession = strtoupper("Web Devloper");
    if (isset($_POST['profession'])) {
        $profession = $_POST['profession'];
    }

    // $email = "info@gmail.com";
    // $email = $_POST['email'];
    
    $email = "info@gmail.com";
    if (isset($_POST['email'])) {
       
        $email = $_POST['email'];


        setcookie($CookieName, $email, time() + 120);
        if (!isset($_COOKIE)) {
            echo "Enter Valid email";
        } else {
            echo $_COOKIE["email"];

        }

    }



    
    if (isset($_POST['phone'])) {
        $contery_code = "+91 ";
        $phone = $_POST['phone'];
        $phone = $contery_code . $phone;

    }else{
        $phone = "+91 9876543210";
    }


  

  
    if(isset($_POST['management'])){
        $management = $_POST['management'];

    }else{
        $management = "10";
    }
    


    if(isset($_POST['Solving'])){
        $Solving = $_POST['Solving'];
    }else{
        $Solving = "25";
    }


    if(isset($_POST['Leadership'])){
        $Leadership = $_POST['Leadership'];

    }else{
        $Leadership ='54';
    }


    if(isset($_POST['Communication'])){
        $Communication = $_POST['Communication'];

    }
    else{
        $Communication = "60";
    }



    ?>
    <div class="container ">
        <div class="row m-auto">
            <div class="col-7 border border-1 m-auto ResumeBody">
                <div class="col-8 page1">

                    <div class="line">

                    </div>

                    <div class="imageAndContent  d-flex align-items-center justify-content-between">
                        <div class="imgAndContect">
                            <div class="img">

                            <?php
                            for($i = 2 ; $i<3;$i++){
                              
                                echo "<img src='".$path . $scan[$i] ."'class='h-100 w-100 '>";

                            }
                          
                            ?>
                                <!-- <img src="" class="h-100 w-100"> -->
                            </div>
                            <div class="contect pe-2 ps-2">
                                <span class="fs-7 d-block">CONTACT</span>
                                <div class="border col-3 mt-1"></div>

                                <span class="d-block m-auto mt-3"> <i class="fa fa-phone"></i><a
                                        href="tel:<?php echo $phone ?>" class="ms-2 contact">
                                        <?php
                                        echo $phone;
                                        ?>
                                    </a></span>

                                <span class="d-block m-auto mt-0"> <i class="fa fa-envelope"> </i><a
                                        href="mailto:pkumarrana143@gmail.com" class="ms-2 contact">
                                        <?php
                                    //    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                    //     echo "info@gmail.com";

                                    // }else{
                                    //     $email = strtolower($email);
                                    //     echo $email;
                                    // }
                                    //     ?>
                                    </a></span>


                                <span class="d-block m-auto mt-0"> <i class="fa fa-map-marker"></i> <a
                                        href="https://www.google.com/maps/dir//H85A,+2nd+floor,+South+Extension+I,+New+Delhi,+Delhi+110049/@28.5695974,77.1389192,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x390ce3f4be7ebd19:0x5749107e44b8a901!2m2!1d77.2213206!2d28.5696223?entry=ttu"
                                        class="ms-2 contact ">
                                        <?php 
                                          if (isset($_POST['address'])) {
                                            $address = $_POST['address'];
                                            echo "<span class='addressx'> $address </span>";
                                    
                                        }else{
                                            echo "South ex metro gate no 2";
                                        }
                                        ?>
                                    </a></span>

                                <span class="d-block m-auto mt-0"> <i class="fa fa-globe"></i> <a
                                        href="https://thepathway.co.in/" target="_blank" rel="noopener noreferrer"
                                        class="ms-2 contact">www.pathway.co.in</a></span>


                                <!-- SKILLS BAR -->

                               

                                <span class="fs-7 d-block mt-3">SKILLS</span>
                                <div class="border col-3 mt-1"></div>

                                <p class="contact Title mt-3">Time Management</p>
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style=width:<?php echo $management.'%'?> aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"><?php echo "<span class='identifyer'></span>"?>
                                    </div>
                                </div>

                                <p class="contact Title mt-2">Problem Solving</p>
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style=width:<?php echo $Solving.'%' ?> aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>


                                <p class="contact Title mt-2">Leadership</p>
                                <div class="progress mt-1">
                                    <div class="progress-bar" role="progressbar" style=width:<?php echo $Leadership.'%'?> aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>


                                <p class="contact Title mt-2">Communication</p>
                                <div class="progress mt-1">
                                    <div class="progress-bar Communication " style=width:<?php echo $Communication.'%'?> role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>




                            </div>

                        </div>
                        <div class="imgAndContect coood">
                            <div class="AllDetails ps-4 pe-0">
                                <div class="nameAndprofaction pt-2">
                                    <h1 class="mb-1 ">
                                        <?php
                                        echo $name;
                                        ?>
                                    </h1>
                                    <p class="Profaction ps-1 mt-0">
                                        <?php
                                        echo strtoupper($profession);
                                        ?>
                                    </p>

                                </div>
                                <span class="fs-7 d-block mt-3">EXPERIENCE</span>
                                <div class="border border-dark col-2 mt-1 "></div>

                                <div class="experience_details mt-3">
                                    <div class="year">2012-2014</div>
                                    <div class="companywork">

                                        <strong class="really ms-2">REALLY
                                            GREAT COMPANY</strong>
                                        <span class="ms-2 d-block designation"><?php echo $profession ?></span>

                                        <span class="ms-2 d-block company_disctiopction">many desktop publishing
                                            packages and web page editor now use lorem ipsum as thair default model text
                                            and a search</span>

                                        <ul class="mt-2 mb-0">
                                            <li class="company_disctiopction mb-0 pb-0">Aenean vel lunch quice Lorem
                                                ipsum </li>
                                            <li class="company_disctiopction mt-0 pt-0 mb-0 pb-0">Lorem ipsum dolor, sit
                                                amet consectetur </li>
                                        </ul>
                                    </div>


                                </div>


                                <div class="experience_details mt-3">
                                    <div class="year">2015-2019</div>
                                    <div class="companywork">

                                        <strong class="really ms-2">REALLY
                                            GREAT COMPANY</strong>
                                        <span class="ms-2 d-block designation">Programmer</span>

                                        <span class="ms-2 d-block company_disctiopction">many desktop publishing
                                            packages and web page editor now use lorem ipsum as thair default model text
                                            and a search</span>

                                        <ul class="mt-2 mb-0">
                                            <li class="company_disctiopction mb-0 pb-0">Aenean vel lunch quice Lorem
                                                ipsum </li>
                                            <li class="company_disctiopction mt-0 pt-0">Lorem ipsum dolor, sit amet
                                                consectetur </li>
                                        </ul>
                                    </div>


                                </div>

                                <span class="fs-7 d-block mt-2">EDUCATION</span>
                                <div class="border border-dark col-2 mt-1 "></div>
                                <div class="experience_details mt-1">
                                    <div class="year">2015-2019</div>
                                    <div class="companywork">

                                        <strong class="really ms-2 text-uppercase">university of delhi
                                        </strong>
                                        <span class="ms-2 d-block designation">Master in html css javascript and
                                            php</span>

                                        <span class="ms-2 d-block company_disctiopction mt-1">many desktop publishing
                                            packages and web page editor now use lorem ipsum as</span>
                                    </div>

                                 
                                </div>



                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>


    </div>
</body>

</html>