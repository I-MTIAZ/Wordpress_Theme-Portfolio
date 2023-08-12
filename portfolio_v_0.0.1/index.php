<?php
include 'file.php';
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" calss="no-js">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Orbitron&family=Roboto+Mono:ital,wght@0,400;0,500;1,100&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <!-- HEADER -->
    <div>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><?php echo esc_html_e(get_theme_mod('nav_name_imt',$nav_name))?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#quote">Quote</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="main-container">
        <!-- PROFILE -->
        <div class="profile">
            <div class="profile-img">
                <?php include 'file.php';
                echo '
                <img src="' . esc_url(get_theme_mod('imt-profile-img')) . '" class="img" alt="...">
                <h2> ' . esc_html(get_theme_mod('imt-profile-name')) . '</h2>
                <h5>' . esc_html(get_theme_mod('imt-profile-tag')) . '</h5>';
                ?>
                <hr>
            </div>
            <div class="profile-des">
                <div class="adress">
                    <?php include 'file.php';
                    for ($i = 0; $i < 3; $i++) {
                        echo '
                            <h3 class="ad-s">' . $adrs_label[$i] . '</h3>
                            <h3 class="ad-e">' . get_theme_mod($adrs_custom_area[$i]) . '</h3>';
                    }
                    ?>
                </div>
                <hr>
                <div class="skill-logo">
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo '
                    <div class="logo">
                        <img src="' . esc_url(get_theme_mod($skill_img_cust_area[$i], $skill_img)) . '" alt="">
                        <h5>' . esc_html(get_theme_mod($skill_text_cust_area[$i], $skill_text)) . '</h5>
                    </div>';
                    }
                    ?>

                </div>
                <div class="profile-foter">
                    <?php
                    for ($i = 0; $i < 4; $i++) {
                        echo '
                    <div>
                        <img src="' . esc_url(get_theme_mod($foter_img_cust_area[$i], $foter_img)) . '" alt="">
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- INGREDIENTS -->
        <div class="ingredients">
            <!-- PROFILE & Banner -->
            <div class="bann">
                <div class="banner-text">
                    <?php echo'
                    <h1> <span class="ban-title">'.esc_html(get_theme_mod('banner_title_cust_area1', $banner_title1)).'</span> <br> <span class="ban-three">'.esc_html(get_theme_mod( 'banner_title_cust_area2', $banner_title2)).'</span> <br><span class="ban-title">'.esc_html(get_theme_mod( 'banner_title_cust_area3', $banner_title3)).'</span></h1>';
                    ?>
                </div>
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <?php echo'
                        <div class="carousel-item active">
                            <img src="'.esc_url(get_theme_mod('ban_img_cust_area',$banner_img)).'" class="c-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>'.esc_html(get_theme_mod('ban_txt_cust_area',$banner_text)).'</h5>
                                <p>'.esc_html(get_theme_mod('ban_para_cust_area',$banner_para)).'</p>
                            </div>
                        </div>';
                        ?>
                        <?php for($i = 0; $i < count($ban_img_cust_area);$i++){
                            echo'
                            <div class="carousel-item">
                            <img src="'.esc_url(get_theme_mod($ban_img_cust_area[$i],$banner_img)).'" class="c-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>'.esc_html(get_theme_mod($ban_txt_cust_area[$i],$banner_text)).'</h5>
                                <p>'.esc_html(get_theme_mod($ban_para_cust_area[$i],$banner_para)).'</p>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <hr>
            </div>
            <!-- SERVICE -->
            <h1 class="topic" id="service">Service</h1>
            <div class="description">
                <?php for($i = 0; $i < count($serv_img_cust_area); $i++)
                echo'
                <div class="card">
                <img src="'.esc_url(get_theme_mod($serv_img_cust_area[$i],$service_img)).'" class="card-img-top" alt="..." style="height: 300px; width: 300px;">
                <div class="card-body">
                    <p>'.esc_html(get_theme_mod($serv_text_cust_area[$i],$service_text)).'</p>
                    <a href="'.get_theme_mod($serv_link_cust_area[$i]).'" class="btn btn-primary">'.esc_html(get_theme_mod($serv_btn_cust_area[$i],$service_butn_text)).'</a>
                </div>
               </div>';
                ?>
                
            </div>
            <!--  Project -->
            <h1 class="topic" id="project">Project </h1>
            <hr>
            <div class="description1">
                <?php
                for($i = 0; $i < count($proj_img_cust_area);$i++){
                    echo'
                    <div class="card">
                    <img src="'.esc_url(get_theme_mod($proj_img_cust_area[$i],$project_img)).'" class="card-img-top" alt="..." style="height: 200px; width: 250px;">
                    <div class="card-body">
                        <p>'.esc_html(get_theme_mod($proj_text_cust_area[$i],$project_text)).'</p>
                        <a href="'.get_theme_mod($proj_link_cust_area[$i]).'" class="btn btn-primary">'.esc_html(get_theme_mod($proj_btn_cust_area[$i],$project_butn_text)).'</a>
                    </div>
                </div>';
                }
                ?>
            </div>
            <!-- COMMENT -->
            <h1 class="topic" id="quote">Quote</h1>
            <div class="quote">
                <div id="carouselExampleRide" class="carousel slide bg-dark mb-lg-4" data-bs-ride="true">
                    <div class="carousel-inner">
                        <?php echo'
                            <div class="carousel-item dada active">
                            <img src="'.esc_url(get_theme_mod('cmnt_img_cust_area',$comment_img)).'" class="circle-img">
                            <h5 class="card-title">'.esc_html(get_theme_mod('cmnt_txt_cust_area',$comment_text)).'</h5>
                            <p class="card-text">'.esc_html(get_theme_mod('cmnt_para_cust_area',$comment_para)).' </p>
                        </div>';
                        
                        for($i = 0; $i < count($cmnt_img_cust_area);$i++){
                            echo'
                            <div class="carousel-item dada">
                                <img src="'.esc_url(get_theme_mod($cmnt_img_cust_area[$i],$comment_img)).'"class="circle-img">
                                <h5 class="card-title">'.esc_html(get_theme_mod($cmnt_txt_cust_area[$i],$comment_text)).'</h5>
                                <p class="card-text">'.esc_html(get_theme_mod($cmnt_para_cust_area[$i],$comment_para)).'
                                </p>
                            </div>';
                        }
                        ?>
                        
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Footer -->
            <div class="profile-foter">
                <h4><?php echo esc_html_e(get_theme_mod('main_footer_imt',$main_footer))?></h4>
            </div>
        </div>
    </div>
    <!-- <div class="testing"></div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>

</html>