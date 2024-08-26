


<!-- HAMBURGER MENU -->
<section id="hamburger-menu" class="fixed top-0 left-0 bottom-0 right-0 h-full w-full z-[9999] hidden overflow-hidden">
    <!-- NAVIGATIE -->
    <div class="absolute top-0 left-0 right-0 z-[999]">
        <div class="mx-[20px] lg:mx-[40px] h-[27px] mt-[8px] mb-[18px] md:mt-[8px] md:mb-[18px] flex items-center"></div>
        <div class="mx-[20px] lg:mx-[40px] h-[18px] md:h-[17.67px] flex items-end justify-between">
            <a href="/" class="mb-[-12px] md:mb-[-10px] z-[999]">
                <?php include get_template_directory() . '/img/icon/logo-wit.php'; ?>
            </a>
            <div class="flex items-center space-x-[20px]">

                <a href="/?s=" class="">
                    <svg class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 16.0580325 16.6270055" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M15.8135231,15.1424942 L11.8555231,11.0254942 C13.8777749,8.61414444 13.9531014,5.12153413 12.0366948,2.62523778 C10.1202881,0.128941426 6.72679989,-0.7006599 3.87484193,0.629921031 C1.02288397,1.96050196 -0.521649616,5.09393728 0.160004901,8.1663072 C0.841659418,11.2386771 3.56644353,13.4248959 6.71352307,13.4244942 C8.09080283,13.4280835 9.43514766,13.0034983 10.5605231,12.2094942 L14.5485231,16.3574942 C14.7655619,16.5834647 15.0866679,16.6764811 15.3908835,16.6015052 C15.6950991,16.5265293 15.9362067,16.2949516 16.0233835,15.9940052 C16.1105603,15.6930588 16.0305619,15.3684647 15.8135231,15.1424942 L15.8135231,15.1424942 Z M6.71352307,1.74649417 C9.45438204,1.74704643 11.6758912,3.9693017 11.675523,6.7101607 C11.6751549,9.4510197 9.45304883,11.6726781 6.71218981,11.6724941 C3.97133079,11.67231 1.74952307,9.4503532 1.74952307,6.70949417 C1.75283021,3.96948563 3.97351393,1.74924928 6.71352307,1.74649417 Z" id="search" fill="#fff" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                </a>
    
                <button id="hamburger-close" class="pl-[4px] pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 15.983 15.983">
                    <g id="Group_283" data-name="Group 283" transform="translate(2.121 2.121)">
                        <line id="Line_29" data-name="Line 29" y2="16.603" transform="translate(11.74 0) rotate(45)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                        <line id="Line_30" data-name="Line 30" y2="16.603" transform="translate(11.74 11.74) rotate(135)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                    </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- CONTENT -->
    <div class="flex w-screen h-[100dvh]">
        <div class="w-full lg:w-[60%] h-[100dvh] bg-[#07773C]">
            <div class="relative h-[100dvh] w-full">
                <div class="absolute top-[110px] md:top-[150px] lg:top-[110px] left-[20px] md:left-[80px] lg:left-[40px] right-[20px] h-[calc(100vh-100px)] z-[40]">
                    <div class="pt-[20px] pb-[120px] flex flex-col space-y-[15px]">
                        <?php
                        if (have_rows('menu_items', 'option')) :
                            $count = 0;
                            while (have_rows('menu_items', 'option')) : the_row();
                              
                                $link = get_sub_field('link', 'option');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                                <a  id="menuHref-<?php echo $count; ?>" href="<?php echo $link_url; ?>" class="text-55 leading-48 md:text-60 md:leading-53 lg:text-60 lg:leading-53 xl:text-60 xl:leading-53 font-tanker text-white hover:text-[#FADE6C] duration-300 w-fit menu-hover">
                                    <span><?php echo $link_text; ?></span>
                                </a>
                        <?php
                          $count++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="absolute left-0 bottom-0 right-0 top-[unset] hidden lg:block z-[60]">
                    <div class="bg-gradient-to-b from-[transparent] via-[#07773C9b] to-[#07773C] h-[50px]"></div>
                    <div class="bg-[#07773C]">
                        <div class="px-4 pb-3 pt-2 flex space-x-[70px]">
                            <?php
                            if( have_rows('submenu', 'option') ):
                                while( have_rows('submenu', 'option') ) : the_row(); ?>
                                <?php
                                $link = get_sub_field('link', 'option');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                                ?>
                                <a href="<?php echo $link_url; ?>" class="text-16 leading-32 text-white font-karlsen" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                <?php
                                endwhile;
                            else :
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
                <img src="/wp-content/themes/ontdek-suriname/img/local/ham-bg.png" alt="" class="absolute min-h-full object-cover right-0 z-[30]">
            </div>
            
        </div>
        <!-- RECHTER BLOK -->
        <div class="w-[40%] h-full relative z-[-1] hidden lg:block bg-[#0A1F161A]">
              <?php
                if (have_rows('menu_items', 'option')) :
                    $count = 0;
                    $first_image_displayed = false; // Om bij te houden of het eerste item is weergegeven
                    while (have_rows('menu_items', 'option')) : the_row();
                        
                        $image = get_sub_field('afbeelding', 'option');
                        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                        ?>
                            <div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1] <?= $count !== 0 ? "hidden" : "" ?> menu-background" id="menubackground-<?php echo $count; ?>">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center">
                            </div>
                        <?php
                
                        $count++;
                    endwhile;
                endif;
                ?>
        </div>
        <div class="absolute bottom-2 left-2 lg:left-[50vw] right-2 z-[60]">
            <div class="flex justify-between">
                <div class=""></div>
                <div class="flex space-x-1 md:justify-end">
                    <?php if (get_field('tiktok', 'option')): ?>   
                    <a href="<?php echo get_field('tiktok', 'option');?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.326" height="29.325" viewBox="0 0 29.326 29.325">
                            <path id="Path_441" data-name="Path 441" d="M14.663,0A14.663,14.663,0,1,0,29.325,14.663,14.663,14.663,0,0,0,14.663,0m8.058,12.984a7.183,7.183,0,0,1-1.617-.195,7.744,7.744,0,0,1-2.541-1.095c-.041-.027-.084-.084-.128-.065s-.026.1-.026.147c0,2.1.008,4.206,0,6.309a6.016,6.016,0,0,1-5.319,5.978,5.954,5.954,0,0,1-3.424-.6,3.153,3.153,0,0,1-.5-.305l-.148-.131h0a1.413,1.413,0,0,1-.31-.214A5.975,5.975,0,0,1,6.42,17.713,5.971,5.971,0,0,1,10.353,12.5a5.959,5.959,0,0,1,1.589-.337,6.161,6.161,0,0,1,1.181.027c.053.006.084.017.083.08,0,.218,0,.437-.006.655,0,0,.032,1.66.032,2.418,0,.027,0,.053,0,.08,0,.076-.042.1-.114.081a2.883,2.883,0,0,0-.635-.1,2.42,2.42,0,0,0-.971.144,2.695,2.695,0,0,0-.608,4.8c.075.052.153.1.224.16l.051.046a3.693,3.693,0,0,0,.642.211,2.721,2.721,0,0,0,3.293-2.709q0-6.335,0-12.669c0-.2-.028-.172.169-.172h2.99c.1,0,.1,0,.1.1a6.509,6.509,0,0,0,.1.8c.421,2.135,2.91,3.441,3.677,3.556a4.023,4.023,0,0,0,.638.055c.089,0,.092,0,.091.088,0,.2.039,2.24.038,2.987,0,.171-.023.18-.2.18" fill="#fff"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (get_field('facebook', 'option')): ?>   
                    <a href="<?php echo get_field('facebook', 'option');?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.195" height="29.017" viewBox="0 0 29.195 29.017">
                            <path id="Path_138" data-name="Path 138" d="M14.6.41a14.6,14.6,0,0,0-2.281,29.017v-10.2H8.61v-4.22h3.706V11.791c0-3.658,2.179-5.679,5.514-5.679A22.455,22.455,0,0,1,21.1,6.4V9.989H19.257a2.11,2.11,0,0,0-2.379,2.28v2.738h4.049l-.647,4.22h-3.4v10.2A14.6,14.6,0,0,0,14.6.41" transform="translate(0 -0.41)" fill="#fff"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (get_field('instagram', 'option')): ?>   
                    <a href="<?php echo get_field('instagram', 'option');?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.195" height="29.194" viewBox="0 0 29.195 29.194">
                            <g id="Group_1099" data-name="Group 1099" transform="translate(-40.834)">
                                <g id="Group_1100" data-name="Group 1100">
                                <path id="Path_135" data-name="Path 135" d="M245.228,53.333a3.064,3.064,0,1,0,3.064,3.064,3.064,3.064,0,0,0-3.064-3.064" transform="translate(-189.795 -41.799)" fill="#fff"/>
                                <path id="Path_136" data-name="Path 136" d="M236.189,34.772a3.048,3.048,0,0,0-1.744-1.744,5.082,5.082,0,0,0-1.707-.316c-.969-.044-1.26-.054-3.714-.054s-2.745.009-3.714.054a5.082,5.082,0,0,0-1.707.316,3.046,3.046,0,0,0-1.744,1.744,5.086,5.086,0,0,0-.316,1.707c-.044.969-.054,1.26-.054,3.714s.009,2.745.054,3.714a5.086,5.086,0,0,0,.316,1.707,3.043,3.043,0,0,0,1.744,1.744,5.086,5.086,0,0,0,1.707.316c.969.044,1.26.054,3.714.054s2.745-.009,3.714-.054a5.086,5.086,0,0,0,1.707-.316,3.044,3.044,0,0,0,1.744-1.744,5.086,5.086,0,0,0,.316-1.707c.044-.969.054-1.26.054-3.714s-.01-2.745-.054-3.714a5.086,5.086,0,0,0-.316-1.707m-7.165,10.14a4.72,4.72,0,1,1,4.72-4.72,4.72,4.72,0,0,1-4.72,4.72m4.906-8.523a1.1,1.1,0,1,1,1.1-1.1,1.1,1.1,0,0,1-1.1,1.1" transform="translate(-173.591 -25.596)" fill="#fff"/>
                                <path id="Path_137" data-name="Path 137" d="M203.428,0a14.6,14.6,0,1,0,14.6,14.6A14.6,14.6,0,0,0,203.428,0m9.136,18.387a6.743,6.743,0,0,1-.427,2.231,4.7,4.7,0,0,1-2.688,2.688,6.748,6.748,0,0,1-2.231.427c-.98.045-1.293.055-3.789.055s-2.809-.011-3.789-.055a6.745,6.745,0,0,1-2.231-.427,4.7,4.7,0,0,1-2.688-2.688,6.748,6.748,0,0,1-.427-2.231c-.045-.98-.055-1.293-.055-3.789s.011-2.809.055-3.789a6.748,6.748,0,0,1,.427-2.231,4.7,4.7,0,0,1,2.688-2.688,6.746,6.746,0,0,1,2.231-.427c.98-.045,1.293-.055,3.789-.055s2.809.011,3.789.055a6.749,6.749,0,0,1,2.231.427,4.7,4.7,0,0,1,2.688,2.688,6.743,6.743,0,0,1,.427,2.231c.045.98.055,1.293.055,3.789s-.011,2.809-.055,3.789" transform="translate(-147.995)" fill="#fff"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                    <?php endif; ?>
                    <?php if (get_field('youtube', 'option')): ?>   
                    <a href="<?php echo get_field('youtube', 'option');?>" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29.195" height="29.194" viewBox="0 0 29.195 29.194">
                            <path id="Path_1127" data-name="Path 1127" d="M431.931,59.839l5.056-2.919L431.931,54Z" transform="translate(-419.279 -42.322)" fill="#fff"/>
                            <path id="Path_1128" data-name="Path 1128" d="M388.029,0a14.6,14.6,0,1,0,14.6,14.6A14.6,14.6,0,0,0,388.029,0m9.325,19.282A2.437,2.437,0,0,1,395.633,21c-1.518.407-7.6.407-7.6.407s-6.086,0-7.6-.407a2.438,2.438,0,0,1-1.721-1.721A25.342,25.342,0,0,1,378.3,14.6a25.34,25.34,0,0,1,.406-4.685,2.438,2.438,0,0,1,1.721-1.721c1.518-.407,7.6-.407,7.6-.407s6.086,0,7.6.407a2.438,2.438,0,0,1,1.721,1.721,25.322,25.322,0,0,1,.407,4.685,25.324,25.324,0,0,1-.407,4.685" transform="translate(-373.432 0.001)" fill="#fff"/>
                        </svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
  // Haal een verwijzing naar het "hamburger" element op
  var hamburgerButton = document.getElementById("hamburger");

  // Haal een verwijzing naar het "hamburger-close" element op
  var hamburgerCloseButton = document.getElementById("hamburger-close");

  // Haal een verwijzing naar het "hamburger-menu" element op
  var hamburgerMenu = document.getElementById("hamburger-menu");

  // Voeg een klikgebeurtenisluisteraar toe aan het "hamburger" element
  hamburgerButton.addEventListener("click", function() {
    // Toggle de class "hidden" op het "hamburger-menu" element
    hamburgerMenu.classList.toggle("hidden");
  });

  // Voeg een klikgebeurtenisluisteraar toe aan het "hamburger-close" element
  hamburgerCloseButton.addEventListener("click", function() {
    // Toggle de class "hidden" op het "hamburger-menu" element
    hamburgerMenu.classList.toggle("hidden");
  });
</script>

