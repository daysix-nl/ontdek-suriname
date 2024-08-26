<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preload" as="font" href="/wp-content/themes/ontdek-suriname/fonts/Tanker-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/wp-content/themes/ontdek-suriname/fonts/Karlsen-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/wp-content/themes/ontdek-suriname/fonts/Karlsen-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'page-block' ); ?>>
<header class="fixed z-[999]">
    <!-- LIVE NOW BALK -->
    <div class="h-[33px] w-screen bg-[#07773C] relative overflow-x-hidden swiper swiperhero z-[9999]">
        <div id="scroll-text" class="flex w-full swiper-wrapper">
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <!-- LIVE NOW TITEL -->
        <div class="absolute left-0 top-0 bottom-0 bg-[#B40A2D] w-[110px] flex items-center justify-center z-[2] live-now">
            <h3 class="text-13 leading-15 font-karlsen font-bold text-[#ECC81D] flex items-center justify-center uppercase">Nu live
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7" class="ml-[15px]">
                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="4" cy="3.5" rx="4" ry="3.5" fill="#ECC81D"/>
                </svg>
            </h3>
        </div>
    </div>
    <!-- NAVIGATIE -->
     <div class="bg-transparent h-[12px]"></div>
    <div class="mx-[20px] lg:mx-[40px] h-[38px] md:h-[33px] flex items-center justify-between">
        <a href="/" class="mb-[0px] md:mb-[0px]">
            <?php include get_template_directory() . '/img/icon/logo-wit.php'; ?>
        </a>
        <div class="flex items-center space-x-[20px]">
            <div class="md:hidden h-[18px] flex items-center relative">
                <h1 class="w-full text-center text-16 leading-18 pb-[2px] font-tanker text-black">
                       
                    </h1>
                    <div class="absolute bottom-[-5px] h-[5px] w-full overflow-hidden">
                    <svg class="h-[5px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65.854" height="5.471" viewBox="0 0 65.854 5.471">
                            <defs>
                                <clipPath id="clip-path">
                                <rect id="Rectangle_14" data-name="Rectangle 14" width="65.854" height="5.471" fill="#07773C"/>
                                </clipPath>
                            </defs>
                            <g id="Group_503" data-name="Group 503" transform="translate(0 0)">
                                <g id="Group_13" data-name="Group 13" transform="translate(0 0)" clip-path="url(#clip-path)">
                                <path id="Path_14" data-name="Path 14" d="M65.366,1.459c-.643.087-1.286.126-1.933.169s-1.283.115-1.925.184q-1.93.208-3.865.374a77.276,77.276,0,0,1-7.73.321,42.652,42.652,0,0,1-7.489-.729A33.545,33.545,0,0,1,38.709.837,12.872,12.872,0,0,0,34.845,0c-2,.005-3.591,1.174-5.11,2.314a13.662,13.662,0,0,1-2.2,1.44,3.429,3.429,0,0,1-2.143.34,6.339,6.339,0,0,1-2.363-1.241,12,12,0,0,0-2.456-1.528,4.787,4.787,0,0,0-3.034-.171,18.348,18.348,0,0,0-3.032,1.269,6.688,6.688,0,0,1-3.2.707,18.5,18.5,0,0,1-3.72-.778c-2.006-.528-4.284-.875-6.212.11A4.192,4.192,0,0,0,.182,3.38c-.578.639.359,1.58.96.947,1.309-1.38,3.458-1.282,5.183-.9,2.454.551,4.917,1.549,7.439.734a32.34,32.34,0,0,0,3-1.314,4.459,4.459,0,0,1,2.753-.457,6.637,6.637,0,0,1,2.319,1.25A11.673,11.673,0,0,0,24.3,5.159a5.325,5.325,0,0,0,5.037-.9c1.413-.954,2.752-2.293,4.4-2.762a6.122,6.122,0,0,1,3.445.261c1.22.363,2.423.761,3.665,1.049a39.91,39.91,0,0,0,7.575.953,61.317,61.317,0,0,0,7.657-.243,73.307,73.307,0,0,0,7.607-.985c.631-.124,1.256-.248,1.894-.333a.385.385,0,0,0,.271-.47.4.4,0,0,0-.477-.267" transform="translate(0 0)" fill="#07773C"/>
                                </g>
                            </g>
                        </svg>
                    </div>

     
            </div>
            <a href="/?s=" class="hidden lg:block">
                <svg class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 16.0580325 16.6270055" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M15.8135231,15.1424942 L11.8555231,11.0254942 C13.8777749,8.61414444 13.9531014,5.12153413 12.0366948,2.62523778 C10.1202881,0.128941426 6.72679989,-0.7006599 3.87484193,0.629921031 C1.02288397,1.96050196 -0.521649616,5.09393728 0.160004901,8.1663072 C0.841659418,11.2386771 3.56644353,13.4248959 6.71352307,13.4244942 C8.09080283,13.4280835 9.43514766,13.0034983 10.5605231,12.2094942 L14.5485231,16.3574942 C14.7655619,16.5834647 15.0866679,16.6764811 15.3908835,16.6015052 C15.6950991,16.5265293 15.9362067,16.2949516 16.0233835,15.9940052 C16.1105603,15.6930588 16.0305619,15.3684647 15.8135231,15.1424942 L15.8135231,15.1424942 Z M6.71352307,1.74649417 C9.45438204,1.74704643 11.6758912,3.9693017 11.675523,6.7101607 C11.6751549,9.4510197 9.45304883,11.6726781 6.71218981,11.6724941 C3.97133079,11.67231 1.74952307,9.4503532 1.74952307,6.70949417 C1.75283021,3.96948563 3.97351393,1.74924928 6.71352307,1.74649417 Z" id="search" fill="#fff"" fill-rule="nonzero"></path>
                    </g>
                </svg>
            </a>
            <button id="hamburger" class="pointer">
                <svg class="h-[18px] md:h-[12.5px]" width="auto" height="100%" viewBox="0 0 21.611 12.496" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <rect id="path-utg7ymm8rw-1" x="0" y="0" width="21.611" height="12.496"></rect>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(-1340.07, -3.6947)">
                            <g id="Group_332-Clipped" transform="translate(1340.07, 3.6947)">
                                <mask id="mask-utg7ymm8rw-2" fill="white">
                                    <use xlink:href="#path-utg7ymm8rw-1"></use>
                                </mask>
                                <g id="Rectangle_44"></g>
                                <g id="Group_332" mask="url(#mask-utg7ymm8rw-2)" fill="#fff"" fill-rule="nonzero">
                                    <g transform="translate(-0.0036, -0.0001)">
                                        <path d="M21.282618,0.990104562 C20.7925477,0.771840216 20.282053,0.602680247 19.758618,0.485104562 C19.2426809,0.375032386 18.7192111,0.303832473 18.192618,0.272104562 C17.2087322,0.223290734 16.2224511,0.262782138 15.245618,0.390104562 C14.594618,0.465104562 13.945618,0.558104562 13.294618,0.646104562 L13.471618,0.622104562 C12.667618,0.730104562 11.858618,0.830104562 11.046618,0.869104562 C10.2402487,0.908437204 9.43197506,0.874968318 8.63161799,0.769104562 L8.80861799,0.793104562 C6.65561799,0.500104562 4.50861799,-0.186895438 2.31561799,0.0481045624 C1.69278207,0.10494016 1.08034949,0.244847878 0.494617994,0.464104562 C0.328888554,0.515362085 0.18699092,0.624268519 0.0946179942,0.771104562 C0.00540264716,0.92690741 -0.01867701,1.11163791 0.0276179942,1.28510456 C0.0744389489,1.45308896 0.184456368,1.59643413 0.334617994,1.68510456 C0.489249352,1.77774272 0.675406271,1.80200831 0.848617994,1.75210456 C1.31371801,1.57280681 1.7984337,1.44927816 2.29261799,1.38410456 L2.11561799,1.40810456 C3.03046349,1.30369632 3.95507277,1.32017118 4.86561799,1.45710456 L4.68861799,1.43310456 C5.91261799,1.59810456 7.11461799,1.89010456 8.33661799,2.06210456 C9.00436668,2.1628068 9.6783499,2.21660516 10.353618,2.22310456 C10.9737638,2.21921177 11.5932797,2.18282856 12.209618,2.11410456 C12.967618,2.03410456 13.721618,1.92510456 14.475618,1.82310456 L14.298618,1.84710456 C15.8209927,1.58640731 17.3713706,1.53024394 18.908618,1.68010456 L18.731618,1.65610456 C19.3963388,1.74307784 20.0470502,1.91550291 20.667618,2.16910456 L20.509618,2.10010456 L20.609618,2.14310456 C20.7669575,2.22765311 20.9498623,2.25149478 21.123618,2.21010456 C21.2913207,2.1627208 21.4344768,2.0528485 21.523618,1.90310456 C21.613683,1.74758899 21.6378079,1.56251133 21.590618,1.38910456 C21.5467999,1.21963797 21.435988,1.07525761 21.283618,0.989104562" id="Path_130"></path>
                                        <path d="M21.282618,11.2541046 C20.7925524,11.035828 20.2820565,10.8666676 19.758618,10.7491046 C19.2426809,10.6390324 18.7192111,10.5678325 18.192618,10.5361046 C17.2090647,10.4873506 16.223121,10.5268419 15.246618,10.6541046 C14.595618,10.7291046 13.946618,10.8221046 13.295618,10.9101046 L13.472618,10.8861046 C12.666618,10.9941046 11.858618,11.0941046 11.046618,11.1331046 C10.2402487,11.1724535 9.43197365,11.1389846 8.63161799,11.0331046 L8.80861799,11.0571046 C6.65561799,10.7671046 4.50861799,10.0811046 2.31561799,10.3161046 C1.69278207,10.3729402 1.08034949,10.5128479 0.494617994,10.7321046 C0.328888554,10.7833621 0.18699092,10.8922685 0.0946179942,11.0391046 C0.00540264716,11.1949074 -0.01867701,11.3796379 0.0276179942,11.5531046 C0.0744389489,11.721089 0.184456368,11.8644341 0.334617994,11.9531046 C0.489249352,12.0457427 0.675406271,12.0700083 0.848617994,12.0201046 C1.31369795,11.8407439 1.79842122,11.7172133 2.29261799,11.6521046 L2.11561799,11.6761046 C3.03046349,11.5716963 3.95507277,11.5881712 4.86561799,11.7251046 L4.68861799,11.7011046 C5.91261799,11.8661046 7.11461799,12.1581046 8.33661799,12.3301046 C9.00436743,12.4308003 9.67835019,12.4845986 10.353618,12.4911046 C10.9737632,12.4871935 11.5932781,12.4508103 12.209618,12.3821046 C12.967618,12.3021046 13.721618,12.1931046 14.475618,12.0911046 L14.298618,12.1151046 C15.8209927,11.8544073 17.3713706,11.7982439 18.908618,11.9481046 L18.731618,11.9241046 C19.396341,12.0110669 20.0470538,12.1834923 20.667618,12.4371046 L20.508618,12.3701046 L20.608618,12.4131046 C20.7659575,12.4976531 20.9488623,12.5214948 21.122618,12.4801046 C21.2903673,12.4328138 21.4335545,12.3229176 21.522618,12.1731046 C21.612683,12.017589 21.6368079,11.8325113 21.589618,11.6591046 C21.5457999,11.489638 21.434988,11.3452576 21.282618,11.2591046" id="Path_131"></path>
                                        <path d="M0.335617994,6.36510456 C0.825683587,6.58338117 1.33617946,6.75254155 1.85961799,6.87010456 C2.37555509,6.98017674 2.89902488,7.05137665 3.42561799,7.08310456 C4.4091713,7.13184777 5.39511405,7.09235651 6.37161799,6.96510456 C7.02261799,6.89010456 7.67161799,6.79710456 8.32261799,6.70910456 L8.14561799,6.73310456 C8.95161799,6.62510456 9.75961799,6.52510456 10.571618,6.48610456 C11.3779874,6.44677736 12.1862605,6.48024623 12.986618,6.58610456 L12.809618,6.56210456 C14.962618,6.85210456 17.109618,7.53810456 19.302618,7.30310456 C19.925452,7.2462571 20.5378831,7.10634974 21.123618,6.88710456 C21.2893474,6.83584704 21.4312451,6.72694061 21.523618,6.58010456 C21.6130883,6.42736169 21.6381718,6.24531779 21.5933435,6.07407016 C21.5485153,5.90282254 21.4374525,5.75641825 21.284618,5.66710456 C21.1299866,5.5744664 20.9438297,5.55020081 20.770618,5.60010456 C20.305518,5.77940232 19.8208023,5.90293097 19.326618,5.96810456 L19.503618,5.94410456 C18.5887731,6.04852442 17.6641623,6.03204953 16.753618,5.89510456 L16.930618,5.91910456 C15.706618,5.75410456 14.504618,5.46210456 13.282618,5.29010456 C12.6148686,5.18940884 11.9408858,5.13561051 11.265618,5.12910456 C10.643418,5.13379658 10.0218943,5.17118146 9.40361799,5.24110456 C8.64561799,5.32110456 7.89161799,5.43010456 7.13761799,5.53210456 L7.31461799,5.50810456 C5.79224334,5.76880182 4.24186536,5.82496519 2.70461799,5.67510456 L2.88161799,5.69910456 C2.21689714,5.61213128 1.56618577,5.43970622 0.945617994,5.18610456 L1.10461799,5.25310456 L1.00461799,5.21010456 C0.847278448,5.12555601 0.664373684,5.10171434 0.490617994,5.14310456 C0.32291532,5.19048832 0.17975923,5.30036062 0.0906179942,5.45010456 C0.0005530163,5.60562013 -0.0235718934,5.7906978 0.0236179942,5.96410456 C0.0674361037,6.13357115 0.178248036,6.27795152 0.330617994,6.36410456" id="Path_132"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <!-- <div class="bg-white h-[12px]"></div> -->

</header>

<?php include get_template_directory() . '/componenten/hamburger-menu.php'; ?>