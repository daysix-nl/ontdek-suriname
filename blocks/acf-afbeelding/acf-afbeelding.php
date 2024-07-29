<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/ontdek-suriname/img/preview/afbeelding.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- AFBEELDING -->
<section class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> relative overflow-hidden z-[2]">
   <div class="relative aspect-[16/7] overflow-hidden">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center bg-[#2B2828]">
   </div>     
</section>
<?php endif; ?>