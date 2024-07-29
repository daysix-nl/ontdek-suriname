<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/ontdek-suriname/img/preview/formulier.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- FORMULIER -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    
    <div class="container formulier">
        <div class="w-full md:w-[480px] lg:w-[448px] mx-auto">
            <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
</section>
<?php endif; ?>
