<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Party Plot </title>
    <link rel='stylesheet' id='rsvp_css-css' href='/plugins/rsvp/rsvp_plugin.css' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css' href='plugins/contact-form-7/includes/css/styles.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css' href='plugins/woocommerce/assets/css/woocommerce-layout.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css' href='plugins/woocommerce/assets/css/woocommerce.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-studio-fonts-css'
        href='http://fonts.googleapis.com/css?family=Dosis%3A400%2C700%7COpen%2BSans%3A400%2C400i%2C700%2C700i%7CPlayfair+Display%3A400%2C400i%2C700%2C700i'
        type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-library-css' href='themes/glanztheme/css/glanztheme_library.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='marsha-font-css' href='themes/glanztheme/fonts/marsha/stylesheet.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='glanztheme-woo-commerce-css' href='themes/glanztheme/css/woocommerce.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='glanztheme-main-styles-css' href='themes/glanztheme/css/glanztheme_style.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='glanztheme-style-css' href='themes/glanztheme/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-breadcrumbs-add-css-css'
        href='plugins/unyson/framework/extensions/breadcrumbs/static/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-builder-frontend-grid-css'
        href='plugins/unyson/framework/extensions/builder/static/css/frontend-grid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-forms-default-styles-css'
        href='plugins/unyson/framework/extensions/forms/static/css/frontend.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-background-video-css'
        href='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/background.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fw-shortcode-section-css'
        href='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/css/styles.css' type='text/css'
        media='all' />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css">
    <script src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
    <style>
        #panorama {
            width: 85%;
            height: 500px;
            margin: 0 auto;
        }

        .tour {
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
            background-color: #e1742a;
            padding: 10px 20px;
            display: inline-block;
            border-radius: 5px;
            position: relative;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            text-align: center;
            margin-top: 60px;
        }


        .tour::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: inherit;
            z-index: -1;
            left: 41.5vw;
        }



        .tour::after {
            bottom: -10px;
            right: 10px;
            transform: rotate(45deg);
        }

        .tour-para {
            padding-inline: 107px;
        }

        @keyframes scale-up {
            0% {
                transform: scale(1);
            }

            100% {
                transform: scale(1.3);
            }
        }

        .bookbutton {
            font-size: 14px;
            background-color: #af2929;
            padding: 5px;
            position: absolute;
            top: -40px;
            right: -105px;
            animation: scale-up 2s ease-in-out infinite alternate;
            color: white;
            border-radius: 25px;
            width: 100px;
            text-align: center;
            border: none;
            box-shadow: 0 4px 6px rgb(0 0 0 / 50%);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Hover effect for better interactivity */
        .bookbutton:hover {
            background-color: #ff1100;
            font-weight: 600;
            /* Slightly darker shade on hover */
        }

        @media only screen and (max-width: 800px) {
            .tour::after {
                display: none;
            }



        }
        
    </style>
</head>

<body>






    <!--Pages Load-->
    <div class="gla_page_loader gla_image_bck " data-color="#ffffff" data-image="">
        <div class="gla_loader" data-color="">
            <div>
                <p> <img class="alignnone wp-image-842" src="images/Laye-min-1.png" alt="" width="300" height="150" />
                </p>
            </div>
            <div class="gla_spinner">
                <div class="gla_rect1"> </div>
                <div class="gla_rect2"></div>
                <div class="gla_rect3"> </div>
                <div class="gla_rect4"></div>
                <div class="gla_rect5"></div>
            </div>
        </div>
    </div>

    <div class="gla_page gla_middle_titles" id="gla_page"> <!--Socila Links-->

        <div class="sociallinks">
            <div class="followus">
                <button class="bookbutton" type="button" data-toggle="modal" data-target="#exampleModal"> Book
                    Now</button>

            </div> <button class="socialbutton callus" title="Send Message On Whatsapp#efe5dd"> <a
                    href="https://api.whatsapp.com/send?phone=919999999999&text=i%20want%20to%20inquiry%20about%20your%20product%20at%20jigyam.com%0A%F0%9F%98%8D">
                    <i class='bx bxl-whatsapp'></i> </a> </button>
        </div> <!--GoTop Button --> <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"><i
                class='bx bx-up-arrow-alt'></i></a> <!--Menu Section-->
        <header class="gla_header">
            <nav class="gla_light_nav gla_image_bck gla_fixed">
                <div class="gla_over" data-opacity="0.8" style="background-color:#efe5dd42;"></div>
                <div class="container">
                    <div class="gla_logo_container clearfix">
                        <div class="gla_logo_txt"> <img class="header_logo header-logo" src="images/Laye-min-1.png"
                                alt=""> </div>
                    </div> <!--Small Devices Menu Button-->
                    <div class="gla_main_menu gla_main_menu_mobile">
                        <div class="gla_main_menu_icon"> <i></i><i></i><i></i><i></i> <b>Menu</b> <b
                                class="gla_main_menu_icon_b">Back</b> </div>
                    </div>
                    <div class="gla_main_menu_content gla_image_bck" data-color="rgba(0,0,0,0.9)">
                        <div class="gla_over" data-color="#000" data-opacity="0.7"></div>
                    </div> <!--Small Screen Devices Menu List-->
                    <div class="gla_main_menu_content_menu gla_wht_txt text-right">
                        <div class="container">
                            <div class="menu-menu-1-container">
                                <ul id="menu-menu-1" class="menu">
                                    <li class="menu-item"> <a href="index.php">Home</a> </li>
                                    <li class="menu-item menu-item-has-children"> <a href="#service"
                                            style="text-decoration: none;">Amenities </a>
                                    </li>
                                    <li class="menu-item menu-item-has-children"> <a href="#about">About</a>
                                    <li class="menu-item menu-item-has-children"> <a href="#testimonial">Testimonials
                                        </a>

                                    </li>
                                    <li class="menu-item"> <a href="#gallery">Gallery</a> </li>
                                    <li class="menu-item"> <a href="contact.php">Contact Us</a> </li>
                                </ul>
                            </div>
                            <div class="gla_main_menu_content_menu_copy"> </div>
                        </div>
                    </div>
                    <div class="gla_search_block"> </div>
                    <div class="gla_default_menu">
                        <div class="menu-menu-1-container">
                            <ul id="menu-menu-2" class="menu">
                                <li class="menu-item"> <a href="index.php">Home</a> </li>
                                <li class="menu-item menu-item-has-children"> <a href="#">Amenities <i
                                            class='bx bx-chevron-down bx-flashing'></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#service">Party Plot</a></li>
                                        <li class="menu-item"><a href="#service">Banquet Hall</a></li>
                                        <li class="menu-item"><a href="#service">Rooms</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"> <a href="#about">About Company <i
                                            class='bx bx-chevron-down bx-flashing'></i></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#about">About Us</a></li>
                                        <li class="menu-item"><a href="#testimonial">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"> <a href="#gallery">Gallery</a> </li>
                                <li class="menu-item"> <a href="contact.php">Contact Us</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header> <!--Slider Block-->
        <section class="gla_slider ">
            <div class="gla_wht_txt"> <a class="gla_scroll_down gla_go" href="#gla_content"> <b></b> Scroll </a> </div>
            <div class="demo-cont">
                <div class="fnc-slider example-slider">
                    <div class="fnc-slider__slides">
                        <div class="fnc-slide gla_wht_txt gla_slider gla_wht_txt m--active-slide">
                            <div class="fnc-slide__inner gla_slider_zoom gla_image_bck" data-color=""></div> <video
                                id="video_background" autoplay muted loop loop="true" autoplay="autoplay"
                                preload="auto">
                                <source type="video/mp4"
                                    src="images/Slider/2205184_Arrangement_Background_Banquet_1920x1080.mp4">
                                </source>
                            </video>
                        </div>
                        <div class="fnc-slide gla_wht_txt gla_slider gla_wht_txt">
                            <div class="fnc-slide__inner gla_slider_zoom gla_image_bck" data-color=""></div> <video
                                id="video_background" autoplay muted loop loop="true" autoplay="autoplay"
                                preload="auto">
                                <source src="images/Slider/1745958_Reception_Wedding_Ceremony_1920x1080.mp4">
                                </source>
                            </video>
                        </div>
                        <div class="fnc-slide gla_wht_txt">
                            <div class="fnc-slide__inner  gla_slider_zoom gla_image_bck"
                                style="background-image: url(images/Slider/room-with-flowers.jpg) !important;"> </div>
                        </div>
                    </div>
                    <nav class="fnc-nav">
                        <div class="fnc-nav__bgs bg" style="background-color:#0000007a;">
                            <div class="fnc-nav__bg m--active-nav-bg"></div>
                            <div class="fnc-nav__bg"></div>
                            <div class="fnc-nav__bg"></div>
                        </div>
                        <div class="fnc-nav__controls"> <button class="fnc-nav__control"> ● <span
                                    class="fnc-nav__control-progress"></span> </button> <button
                                class="fnc-nav__control"> ● <span class="fnc-nav__control-progress"></span> </button>
                            <button class="fnc-nav__control"> ● <span class="fnc-nav__control-progress"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </section> <!--Page Content-->
        <section id="gla_content" class="gla_content">
            <div class="fw-page-builder-content"> <!--Block-1-->
                <section class="gla_lg_padding gla_section gla_image_bck gla_wht_txt gla_fixed" id="about"
                    style="background-image: url(images/bg/AboutUs-bg.jpg);">
                    <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                        <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c3 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c4 gla_slider_flower_item"></div>

                    </div>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">About Us</h2>
                        <div class="gla_text_block">
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium nihil cum
                                repellendus eaque inventore debitis ipsa quibusdam itaque iure. </p>
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium nihil cum
                                repellendus eaque inventore debitis ipsa quibusdam itaque iure. </p>
                            <p> WelLorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium nihil
                                cum repellendus eaque inventore debitis ipsa quibusdam itaque iure. </p>
                            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam laudantium nihil cum
                                repellendus eaque inventore debitis ipsa quibusdam itaque iure. </p>
                        </div>
                    </div>
                </section> <!--Block-2-->
                <section class=" gla_section gla_image_bck" style="background-color:#efe5dd30" id="service">
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Our Services</h2>
                        <h3 class="gla_subtitle">We Provide</h3>
                        <div class="gla_icon_boxes row text-left">
                            <div class="scrollable-belt-container">
                                <div class="scrollable-belt" id="scrollableBelt">
                                    <div class="col-md-4 col-sm-6">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <span class="gla_over"
                                                    style="background-image:url('images/Our-Services/Banquet-Hall.jpg')"></span>
                                            </span>
                                            <div class="gla_news_cont">
                                                <span class="gla_news_title">Banquet Hall</span>
                                                <p class="gla_news_description">Our banquet hall is perfect for
                                                    weddings, conferences, and large gatherings. It offers a spacious
                                                    and elegant setting with state-of-the-art facilities to ensure your
                                                    event is memorable.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <span class="gla_over"
                                                    style="background-image:url('images/Our-Services/Party-Plot.jpg')"></span>
                                            </span>
                                            <div class="gla_news_cont">
                                                <span class="gla_news_title">Party Plot</span>
                                                <p class="gla_news_description">Our party plot is ideal for outdoor
                                                    events. Whether it's a birthday party, anniversary celebration, or a
                                                    corporate event, our plot provides a beautiful and flexible space to
                                                    meet your needs.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <a href="#" class="gla_news_block">
                                            <span class="gla_news_img">
                                                <span class="gla_over"
                                                    style="background-image:url('images/Our-Services/Rooms.jpg')"></span>
                                            </span>
                                            <div class="gla_news_cont">
                                                <span class="gla_news_title">Rooms</span>
                                                <p class="gla_news_description">We offer luxurious rooms for our guests,
                                                    ensuring comfort and convenience. Each room is equipped with modern
                                                    amenities to make your stay enjoyable, whether you're here for an
                                                    event or a getaway.</p>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- Add more items as needed -->
                                </div>

                            </div>

                        </div>

                </section> <!--Block-3-->
                <section class="gla_lg_padding gla_section gla_image_bck " style="background-color:#efe5dd;">
                    <div class="gla_slider_flower" data-bottom-top="@class:active" data--200-bottom="@class:no_active">
                        <div class="gla_slider_flower_c1 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c2 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c3 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c4 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c5 gla_slider_flower_item"></div>
                        <div class="gla_slider_flower_c6 gla_slider_flower_item"></div>
                    </div>
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Get in Touch</h2>
                        <div class="gla_text_block">
                            <p>Want to get in touch? We’d love to hear from you. Here’s how you can reach us…</p>
                        </div> <a href="tel:9999999999" class="btn"><span>Call Us</span></a> <a
                            href="https://api.whatsapp.com/send?phone=919999999999&text=i%20want%20to%20inquiry%20about%20your%20product%20at%20jigyam.com%0A%F0%9F%98%8D"
                            target="_blank" class="btn"><span>Whatsapp</span></a>
                    </div>
                </section> <!--Block-4-->
                <section class="gla_section gla_wht_txt" style='background-image:url(images/bg/Testimonial-bg.jpg)' ;
                    data-stellar-background-ratio="0.2">
                    <div class="gla_over" id="testimonial" data-gradient="" data-opacity="0.4" data-color="#1e1d2d">
                    </div>
                    <div class="container text-center" style="text-align:center !important;">
                        <h2 class="gla_h2_title">Our happy clients</h2>
                        <div class="gla_team_slider_single">
                            <div class="gla_reviews_item">
                                <p> It’s a large area for any social function as both hall and an open area is
                                    available. </p>
                                </p>
                                <div class="gla_reviews_item_img"> <img src="images/testimonial/Testimonial-1.png"
                                        alt="Glanz"> </div>
                                <p>Client 1</p>
                            </div>
                            <div class="gla_reviews_item">
                                <p> Very good place for party or other family function near Karansad area </p>
                                <div class="gla_reviews_item_img"> <img src="images/testimonial/Testimonial-1.png"
                                        alt="Glanz"> </div>
                                <p>Client 2</p>
                            </div>
                            <div class="gla_reviews_item">
                                <p> Staff is so soft n the plot location is so easy to found </p>
                                <div class="gla_reviews_item_img"> <img src="images/testimonial/Testimonial-1.png"
                                        alt="Glanz"> </div>
                                <p>Client 3</p>
                            </div>
                        </div>
                    </div>
                </section> <!--Block-5-->
                <section class=" gla_section gla_image_bck" style="background-color:#efe5dd30">
                    <div class="container text-center">
                        <h2 class="gla_h2_title">Celebrate Wedding At [company name] Hall</h2>




                    </div>
                </section> <!--Block-6-->
                <section class=" gla_section gla_image_bck gla_wht_txt gla_fixed "
                    style='background-image:url(images/bg/Thank-You-bg.jpg)' ; data-stellar-background-ratio="0.2">
                    <div class="gla_over" data-gradient="" data-opacity="0.4" data-color="#000000"></div>
                    <div class="container text-center">
                        <p> <img class="gla_animated_flower" src="themes/glanztheme/images/animations/thnyou_wh.gif"
                                height="180" style="height: 180px!important" alt=""> </p>
                    </div>
                </section>
            </div>
        </section> <!--Footer-->



    </div>


    <!-- 360 chalu -->
    <div class="tour-para" id="gallery">
        <div class="tour">360° Tour</div>
    </div>
    <div id="panorama"></div>
    <!-- 360 puru -->




    <!-- footer -->
    <section class="gla_footer">
        <div class="fw-page-builder-content">
            <section class=" gla_section gla_image_bck gla_wht_txt " style="background-color:#282828;margin-top: 60px;">
                <div class="container ">
                    <div class="fw-col-xs-12 fw-col-sm-4 gla_bordered_block gla_grey_border gla_col">
                        <div class=" ">
                            <div class="gla_text_block">
                                <h4>Contact Us</h4>
                                <p> Party Plot & Banquet Hall rajot,.... Road, ..... - 360003, Gujarat, India. <br>
                                    <b>Call :</b> <a href="mailto:hello@glanztheme.com">+91 9999999999</a> <br>
                                    <b>Whatsapp :</b><a
                                        href="https://api.whatsapp.com/send?phone=919999999999&text=i%20want%20to%20inquiry%20about%20your%20product%20at%20jigyam.com%0A%F0%9F%98%8D">
                                        +91 9999999999 </a> <br> <b>Email :</b> <a
                                        href="mailto:XYZemail.com">XYZemail.com</a>
                                </p>
                            </div>
                            <div class=" ">
                                <h4 style="text-align: center;">Follow On</h4>
                                <div class="gla_social_btns"> <a href="#" target="_blank"> <i
                                            class='bx bxl-facebook-circle'></i> </a> <a href="#" target="_blank"> <i
                                            class="bx bxl-instagram-alt"></i> </a> <a href="#" title="Send Mail"> <i
                                            class="bx bxl-gmail"></i> </a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="fw-col-xs-12 fw-col-sm-4 gla_bordered_block gla_grey_border gla_col">
                        <div class=" ">
                            <div class="gla_text_block">
                                <h4> Quick Links </h4>
                            </div>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li> <a href="#about">About Company</a> </li>
                                <li> <a href="#testimonial">Testimonials</a> </li>
                                <li> <a href="#gallery">Gallery</a> </li>
                                <li> <a href="contact.php">Contact Us</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="fw-col-xs-12 fw-col-sm-4 gla_bordered_block gla_grey_border gla_col">
                        <div class="">
                            <div class="gla_text_block">
                                <h4>Map Location</h4>
                            </div>
                            <div class="gla_twitter"> <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.111239962061!2d70.77596467503216!3d22.273775643856812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca1174175325%3A0xae66e4d877db1f23!2sSD%20Vision%20Art!5e0!3m2!1sen!2sin!4v1716191204377!5m2!1sen!2sin"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class=" gla_section gla_image_bck gla_section_sml_padding" style="background-color:#e5e5e5;">
        <div class="container ">
            <div class="fw-col-xs-12 fw-col-sm-12 gla_bordered_block gla_grey_border gla_col">
                <div>
                    <div class="gla_text_block">Party Plot &amp; Banquet. Developed by <a href="http://sdvisionart.com/"
                            target="_blank">SD vision art</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="text-align: center;">
                    <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        style="margin-top: -20px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <!-- form -->
                    <form id="bookingForm" action="insert.php" method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Client Name:</label>
                            <input type="text"  style="width: 88vw;" class="form-control" id="recipient-name" name="fname" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-email" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" style="width: 88vw;" id="recipient-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-mobile" class="col-form-label">Mobile Number:</label>
                            <!-- <input type="tel" class="form-control" id="recipient-mobile" style="width: 40vw;" name="num" required> -->
                            <!-- <input type="nummber" pattern="/^-?\d+\.?\d*$/" class="form-control" id="recipient-mobile" style="width: 40vw;" name="num" required onKeyPress="if(this.value.length==10) return false;" /> -->
                            <input type="tel" pattern="[0-9]{10}" style="width: 88vw;" class="form-control" id="recipient-mobile" name="num" required oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);" />
                        </div>
                        <div style="display: flex;gap: 4vw;">
                            <div class="form-group">
                                <label for="booking-from-date" class="col-form-label">From Date:</label>
                                <input type="date" class="form-control" id="booking-from-date" name="fromdt"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="booking-to-date" class="col-form-label">To Date:</label>
                                <input type="date" class="form-control" id="booking-to-date" name="till"
                                    required>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit"   name="submit" class="btn btn-primary" form="bookingForm"> Book</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <script>
        pannellum.viewer('panorama', {
            "type": "equirectangular",
            "panorama": "images/Gallery/image1.jpeg",
            "autoLoad": true
        });
    </script>
    <!-- 360 nu js chalu -->
    <!-- <script src="pjs/three.min.js"></script>
    <script src="pjs/panolens.min.js"></script>
    <script src="pjs/main.js"></script> -->




    <!-- <script>
        const panoramaImage = new PANOLENS.ImagePanorama("images/Gallery/image1.jpeg");
        const panoramaModal = document.querySelector("#panoramaModal");
        const imageContainer = panoramaModal;

        const viewer = new PANOLENS.Viewer({
            container: imageContainer,
            autoRotate: true,
            autoRotateSpeed: 0.3,
            controlBar: false,
        });

        viewer.add(panoramaImage);

        const openPanoramaBtn = document.getElementById("openPanoramaBtn");
        const closeModal = document.getElementById("closeModal");

        openPanoramaBtn.addEventListener("click", () => {
            panoramaModal.style.display = "flex";
        });

        closeModal.addEventListener("click", () => {
            panoramaModal.style.display = "none";
        });
    </script> -->
    <!-- 360 js puru -->



    <!-- Script Section-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js"
        integrity="sha512-uWKImujbh9CwNa8Eey5s8vlHDB4o1HhrVszkympkm5ciYTnUEQv3t4QHU02CUqPtdKTg62FsHo12x63q6u0wmg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <script>
  document.getElementById('recipient-mobile').addEventListener('keypress', function(event) {
    // Ensure that only digits are entered
    if (!/[0-9]/.test(event.key)) {
      event.preventDefault();
    }
  });
</script>
    <script type='text/javascript' src='libs/jquery.min.js' defer='defer'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js' defer='defer'></script>
    <script type='text/javascript' src='plugins/rsvp/rsvp_plugin.js' defer='defer'></script>
    <script type='text/javascript' src='plugins/contact-form-7/includes/js/scripts.js' defer='defer'></script>
    <script type='text/javascript' src='plugins/instagram-feed/js/sb-instagram.min.js' defer='defer'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'
        defer='defer'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'
        defer='defer'></script>
    <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'
        defer='defer'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/woocommerce.min.js'
        defer='defer'></script>
    <script type='text/javascript' src='plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'
        defer='defer'></script>
    <script type='text/javascript' src='wp-includes/js/imagesloaded.min.js' defer='defer'></script>
    <script type='text/javascript' src='themes/glanztheme/js/glanztheme_library.js' defer='defer'></script>
    <script type='text/javascript' src='plugins/unyson/framework/static/js/fw-form-helpers.js' defer='defer'></script>
    <script type='text/javascript' src='themes/glanztheme/js/navigation.js' defer='defer'></script>
    <script type='text/javascript' src='themes/glanztheme/js/skip-link-focus-fix.js' defer='defer'></script>
    <script type='text/javascript' src='libs/jquery-ui.min.js' defer='defer'></script>
    <script type='text/javascript' src='themes/glanztheme/js/glanztheme_script.js' defer='defer'></script>
    <script type='text/javascript' src='speed-booster-pack/inc/js/jquery.unveil.min.js' defer='defer'></script>
    <script type='text/javascript'
        src='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/core.js'
        defer='defer'></script>
    <script type='text/javascript'
        src='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/transition.js'
        defer='defer'></script>
    <script type='text/javascript'
        src='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/background.js'
        defer='defer'></script>
    <script type='text/javascript'
        src='plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/background.init.js'
        defer='defer'></script>
    <script type='text/javascript' src='wp-includes/js/wp-embed.min.js' defer='defer'></script>
    <script
        type="text/javascript"> (function () { var $$ = function (selector, context) { var context = context || document; var elements = context.querySelectorAll(selector); return [].slice.call(elements); }; function _fncSliderInit($slider, options) { var prefix = ".fnc-"; var $slider = $slider; var $slidesCont = $slider.querySelector(prefix + "slider__slides"); var $slides = $$(prefix + "slide", $slider); var $controls = $$(prefix + "nav__control", $slider); var $controlsBgs = $$(prefix + "nav__bg", $slider); var $progressAS = $$(prefix + "nav__control-progress", $slider); var numOfSlides = $slides.length; var curSlide = 1; var sliding = false; var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000; var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000; var autoSlidingActive = false; var autoSlidingTO; var autoSlidingDelay = 5000; var autoSlidingBlocked = false; var $activeSlide; var $activeControlsBg; var $prevControl; function setIDs() { $slides.forEach(function ($slide, index) { $slide.classList.add("fnc-slide-" + (index + 1)); }); $controls.forEach(function ($control, index) { $control.setAttribute("data-slide", index + 1); $control.classList.add("fnc-nav__control-" + (index + 1)); }); $controlsBgs.forEach(function ($bg, index) { $bg.classList.add("fnc-nav__bg-" + (index + 1)); }); }; setIDs(); function afterSlidingHandler() { $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide"); $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg"); $activeSlide.classList.remove("m--before-sliding"); $activeControlsBg.classList.remove("m--nav-bg-before"); $prevControl.classList.remove("m--prev-control"); $prevControl.classList.add("m--reset-progress"); var triggerLayout = $prevControl.offsetTop; $prevControl.classList.remove("m--reset-progress"); sliding = false; var layoutTrigger = $slider.offsetTop; if (autoSlidingActive && !autoSlidingBlocked) { setAutoslidingTO(); } }; function performSliding(slideID) { if (sliding) return; sliding = true; window.clearTimeout(autoSlidingTO); curSlide = slideID; $prevControl = $slider.querySelector(".m--active-control"); $prevControl.classList.remove("m--active-control"); $prevControl.classList.add("m--prev-control"); $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control"); $activeSlide = $slider.querySelector(prefix + "slide-" + slideID); $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID); $slider.querySelector(".m--active-slide").classList.add("m--previous-slide"); $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg"); $activeSlide.classList.add("m--before-sliding"); $activeControlsBg.classList.add("m--nav-bg-before"); var layoutTrigger = $activeSlide.offsetTop; $activeSlide.classList.add("m--active-slide"); $activeControlsBg.classList.add("m--active-nav-bg"); setTimeout(afterSlidingHandler, slidingAT + slidingDelay); }; function controlClickHandler() { if (sliding) return; if (this.classList.contains("m--active-control")) return; if (options.blockASafterClick) { autoSlidingBlocked = true; $slider.classList.add("m--autosliding-blocked"); } var slideID = +this.getAttribute("data-slide"); performSliding(slideID); }; $controls.forEach(function ($control) { $control.addEventListener("click", controlClickHandler); }); function setAutoslidingTO() { window.clearTimeout(autoSlidingTO); var delay = +options.autoSlidingDelay || autoSlidingDelay; curSlide++; if (curSlide > numOfSlides) curSlide = 1; autoSlidingTO = setTimeout(function () { performSliding(curSlide); }, delay); }; if (options.autoSliding || +options.autoSlidingDelay > 0) { if (options.autoSliding === false) return; autoSlidingActive = true; setAutoslidingTO(); $slider.classList.add("m--with-autosliding"); var triggerLayout = $slider.offsetTop; var delay = +options.autoSlidingDelay || autoSlidingDelay; delay += slidingDelay + slidingAT; $progressAS.forEach(function ($progress) { $progress.style.transition = "transform " + (delay / 1000) + "s"; }); } $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control"); }; var fncSlider = function (sliderSelector, options) { var $sliders = $$(sliderSelector); $sliders.forEach(function ($slider) { _fncSliderInit($slider, options); }); }; window.fncSlider = fncSlider; }()); fncSlider(".example-slider", { autoSlidingDelay: 10000 }); </script>
</body>

</html>