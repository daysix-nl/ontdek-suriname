<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>





<footer class="overflow-hidden suriname-footer">
<section class="bg-[#07773C]">
    <div class="mx-[auto] lg:mx-[40px] max-w-[390px] px-2 md:px-[unset] md:max-w-[600px] lg:max-w-[unset] pt-[45px] md:pt-[60px] xl:pt-[65px]">
        <a href="/" class="">
            <?php include get_template_directory() . '/img/icon/logo-wit.php'; ?>
        </a>

        <div class="hidden lg:flex justify-between max-w-[800px] py-3">
            <div class="w-[190px]">
                 <div class="col-span-1 grid content-start">
                 <?php
                    if (have_rows('informatie_menu', 'option')) :
                        while (have_rows('informatie_menu', 'option')) : the_row();
                            $link = get_sub_field('link_informatie', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                            <a href="<?php echo $link_url; ?>" class="text-16 leading-30 font-karlsen text-white hover:text-white duration-300 w-fit" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="w-[190px]">
                <div class="col-span-1 grid content-start">
                    <?php
                    if (have_rows('menu_items', 'option')) :
                        while (have_rows('menu_items', 'option')) : the_row();
                            $link = get_sub_field('link', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                    ?>
                            <a href="<?php echo $link_url; ?>" class="text-16 leading-30 font-karlsen text-white hover:text-white duration-300 w-fit" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <div class="w-[290px]">
                <div class="grid content-start">
                    <p class="text-16 leading-30 font-karlsen text-white font-bold w-fit"><?php echo get_field('titel_openingstijden', 'option');?></p>
                    <div class="text-16 leading-30 font-karlsen text-white w-fit"><?php echo get_field('tekst_openingstijden', 'option');?></div>
                </div>
            </div>
            
        </div>

        <div class="mt-2 lg:hidden">
            <div class="accordion-item"> 
                <button class="accordion text-16 leading-32 font-karlsen font-semibold text-white py-[25px] flex">Algemeen</button>
                <div class="panel  ">
                    <div class="px-1.5 flex flex-col pb-4">
                         <?php
                        if (have_rows('informatie_menu', 'option')) :
                            while (have_rows('informatie_menu', 'option')) : the_row();
                                $link = get_sub_field('link_informatie', 'option');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                                <a href="<?php echo $link_url; ?>" class="text-16 leading-30 font-karlsen text-white hover:text-white duration-300 w-fit" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item"> 
                <button class="accordion text-16 leading-32 font-karlsen font-semibold text-white py-[25px] flex">Menu</button>
                <div class="panel  ">
                    <div class="px-1.5 flex flex-col pb-4">
                         <?php
                        if (have_rows('menu_items', 'option')) :
                            while (have_rows('menu_items', 'option')) : the_row();
                                $link = get_sub_field('link', 'option');
                                $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                                $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                                $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                        ?>
                                <a href="<?php echo $link_url; ?>" class="text-16 leading-30 font-karlsen text-white hover:text-white duration-300 w-fit" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item"> 
                <button class="accordion text-16 leading-32 font-karlsen font-semibold text-white py-[25px] flex">Klantenservice</button>
                <div class="panel  ">
                    <div class="px-1.5 flex flex-col pb-4">
                        <p class="text-16 leading-30 font-karlsen text-white font-bold w-fit"><?php echo get_field('titel_openingstijden', 'option');?></p>
                        <div class="text-16 leading-30 font-karlsen text-white w-fit"><?php echo get_field('tekst_openingstijden', 'option');?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-footer pb-7 md:pb-4">
            <p class="text-16 leading-30 font-karlsen text-white pb-1.5 text-center lg:text-left pt-3 lg:pt-0">Schrijf je in voor de nieuwsbrief!</p>
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 pb-4">
            <p class="text-[#fff] text-18 leading-32 font-karlsen opacity-[0.5] order-1 md:order-0">© Studio Freek 2012-<?php echo date("Y") ?></p>
            <div class="flex space-x-1 md:justify-end order-0  pb-3 md:pb-0 md:order-1">
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
</section>

</footer>


<?php wp_footer(); ?>
</body>
</html>
