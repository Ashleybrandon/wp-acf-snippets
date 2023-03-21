<?php
if( have_rows('columns') ): 
    while( have_rows('columns') ): the_row(); ?>

    <section <?php if(get_sub_field('section_id')) { echo 'id="'. get_sub_field('section_id') . '"'; } ?> class="flex-columns-section <?php echo get_sub_field('classes');?>" <?php if(get_sub_field('styles')) { echo 'style="'. get_sub_field('styles') . '"'; } ?>>

    <?php if( have_rows('column_rows') ): 
    while( have_rows('column_rows') ): the_row(); ?>

        <?php if( get_row_layout() == 'one_column' ): ?>
            <div class="row">   
               <div class="col-12"><?php echo get_sub_field('column_one'); ?></div>
           </div>
        <?php endif; ?>

        <?php if( get_row_layout() == 'two_columns' ): ?>
            <div class="row">   
               <div class="col-6"><?php echo get_sub_field('column_one'); ?></div>
               <div class="col-6"><?php echo get_sub_field('column_two'); ?></div>
           </div>
        <?php endif; ?>
        
        <?php if( get_row_layout() == 'three_columns' ): ?>
            <div class="row">   
               <div class="col-4"><?php echo get_sub_field('column_one'); ?></div>
               <div class="col-4"><?php echo get_sub_field('column_two'); ?></div>
               <div class="col-4"><?php echo get_sub_field('column_three'); ?></div>
           </div>
        <?php endif; ?>

<?php  endwhile; endif; ?> 

    </section>
 
<?php  endwhile; endif; ?> 