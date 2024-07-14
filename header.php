

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <?php wp_head(); ?>
</head>

<body>

    <div id="main-container">
        
            <div class="h-padding  d-flx j-c-s-b a-i-c" id="main-nav">
                <div id="logo-area" class="d-flx a-i-c">
                    <div id="logo-img" class="logo-img-class" >
                        <img class="img-class"  src="<?php echo get_template_directory_uri().'/images/logo-n.png'?>" alt="">
                    </div>
                    <div id="logo-text" class="logo-text-class">
                       
                    </div>
                </div>
                <div id="nav-menus">
                    <div id="m-logo-area" class="d-flx a-i-c">
                        <div id="m-logo-img" class="logo-img-class" >
                            <img class="img-class"  src="<?php echo get_template_directory_uri().'/images/logo-n.png'?>" alt="">
                        </div>
                        <div id="m-logo-text" class="logo-text-class">
                           
                        </div>
                    </div>
                    <i class="bi bi-x-square closebutton"></i>
                    <ul id="nav-ul" class="d-flx j-c-s-b">

                        <li class="nav-li">
                            <a href="#main-container" class="nav-a">Home</a>
                        </li>
                        <li class="nav-li">
                            <a href="#impressa-reviews-area" class="nav-a">About</a>
                        </li>
                        <li class="nav-li">
                            <a href="#impress-contact-area" class="nav-a">Contact</a>
                        </li>
                        <li class="nav-li">
                            <a href="#contact-form-elements-wrapper" class="nav-a impressa">Quatation</a>
                        </li>

                    </ul>

                </div>
                <div class="overlay-div"></div>
                <i class="bi bi-list active"></i>

            </div>