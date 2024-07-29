<?php 
/**
 * The main template file
 * 
 * @package Day Six theme
 */


get_header('notitle'); ?>

<main>
    <div class="container pt-[80px] md:pt-10 min-h-[calc(100dvh-80px)] pb-[80px]">
         <form action="/" method="get">
            <div class="border-b-[1px] border-[#B5BBB8] w-full flex pb-[20px]">
                <input class="w-[21.74px] mr-[35px]" type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/icon/search.svg" />
                <input class="w-full font-karlsen font-normal text-18 md:text-24 text-[#38241B]" type="text" name="s" id="search" placeholder="Waar ben je naar opzoek?" value="<?php the_search_query(); ?>" />
            </div>
        </form>

       
        
        <!-- NIEUWS -->
        <?php
        $search = get_search_query();
        if ($search) {
            // Aangepaste query om alle producten op te halen
            $args = array(
                'post_type' => 'nieuws', // Het posttype van producten
                'posts_per_page' => -1,   // Toon alle producten
                's' => $search, // Zoekterm vanuit de querystring
            );
      
            $products_query = new WP_Query($args);
            if ($products_query->have_posts()) : ?>
            <h2 class="font-tanker font-normal text-25 text-[#0A1F16] pt-[50px] pb-[35px] w-fit mx-auto md:mx-[unset]">Nieuws</h2>
            <div class="search-producten-section team-block list-b-none">
            <div class="w-full grid gap-[25px]">
            <?php
                while ($products_query->have_posts()) : $products_query->the_post();
                $post_id = get_the_ID();
                ?>
                <?php
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                $thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = isset($thumbnail_info[0]) ? esc_url($thumbnail_info[0]) : '';
                $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>


                <a href="<?php the_permalink();?>" class="w-full bg-[#EFE7DE] p-[15px] md:p-[30px]">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="w-full h-[175px] md:w-[147px] md:h-[136px] lg:h-[179px] lg:w-[303px] xl:w-[335px]">
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center">
                        </div>
                        <div class="md:w-[333px] lg:w-[610px] mt-[15px] md:mt-[unset]">
                            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-black md:line-clamp-1 px-[10px] md:px-[unset]"><?php the_title();?></h3>
                            <div class="flex items-end justify-between px-[10px] pb-[10px] md:px-[unset] md:pb-[unset]">
                                <div class="w-[calc(100%-30px)]">
                                    <!-- <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen font-normal text-black tracking-wider my-[10px] uppercase"><?php echo get_the_date('j F Y');?></p> -->
                                    <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-black md:mt-[15px] lg:mt-[30px] line-clamp-3 md:line-clamp-2"><?php echo get_field('teaser_tekst', $post_id);?></p>
                                </div>
                                <div class="w-[17.5px] h-[14.68px] md:hidden">
                                    <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="Group" stroke="#000000" stroke-width="3">
                                                <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                                <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                                <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-[17.5px] lg:w-[35px] h-full md:flex justify-center hidden ">
                            <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                    <g id="Group" stroke="#000000" stroke-width="3">
                                        <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                        <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                        <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php
            endwhile; ?>
            </div>
            
            <div class="flex justify-center pt-4">
                <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-black hover:bg-[#07773C] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white button-posts">Laad meer</button>
            </div>
            </div>
                    <?php
                // Herstel de oorspronkelijke query
                wp_reset_postdata();
            else :
                
            endif;
        }
        ?>

         <!-- PAGINA'S -->
        <?php
        $search = get_search_query();
        if ($search) {
            // Aangepaste query om alle producten op te halen
            $args = array(
                'post_type' => 'page', // Het posttype van producten
                'posts_per_page' => -1,   // Toon alle producten
                's' => $search, // Zoekterm vanuit de querystring
            );
      
            $products_query = new WP_Query($args);
            if ($products_query->have_posts()) : ?>
            <h2 class="font-tanker font-normal text-25 text-[#0A1F16] pt-[50px] pb-[35px] w-fit mx-auto md:mx-[unset]">Overige</h2>
            <div class="search-producten-section team-block list-b-none">
            <div class="w-full grid gap-[25px]">
            <?php
                while ($products_query->have_posts()) : $products_query->the_post();
                $post_id = get_the_ID();
                ?>
                <?php
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                $thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = isset($thumbnail_info[0]) ? esc_url($thumbnail_info[0]) : '';
                $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>


                <a href="<?php the_permalink();?>" class="w-full border-b-[1px] border-[#0A1F16] pb-[15px] md:pb-[30px] mb-[15px] md:mb-[30px]">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="w-full md:w-[333px] lg:w-[610px] mt-[15px] md:mt-[unset]">
                            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-black md:line-clamp-1 px-[10px] md:px-[unset] w-full"><?php the_title();?></h3>
                            <div class="flex items-end justify-between px-[10px] pb-[10px] md:px-[unset] md:pb-[unset]">
                                <div class="w-[calc(100%-30px)]">
                                    <?php 
                                     $meta_description = get_post_meta(get_the_ID(), 'rank_math_description', true);
                                    // Als er een meta-omschrijving is, toon deze, anders toon de standaard excerpt
                                    if (!empty($meta_description)) { ?>
                                    <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-black mt-[15px] lg:mt-[30px] line-clamp-3 md:line-clamp-2">
                                        <?php
                                        echo esc_html($meta_description);?>
                                        </p>
                                    <?php } else {
                                        } ?>
                                </div>
                                <div class="w-[17.5px] h-[14.68px] md:hidden">
                                    <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="Group" stroke="#000000" stroke-width="3">
                                                <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                                <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                                <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="w-[17.5px] lg:w-[35px] h-full md:flex justify-center hidden ">
                            <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                    <g id="Group" stroke="#000000" stroke-width="3">
                                        <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                        <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                        <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php
            endwhile; ?>
            </div>
            
         
            </div>
                    <?php
                // Herstel de oorspronkelijke query
                wp_reset_postdata();
            else :
                
            endif;
        }
        ?>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
            }
        } else { ?>
         <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-black mt-[15px] lg:mt-[30px] line-clamp-3 md:line-clamp-2">Geen resultaten gevonden voor deze zoekterm.</p>
        <?php
        }
        ?>
       
    </div>
   
</main>



<?php get_footer(); ?>