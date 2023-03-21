
<?php if( have_rows('new_ways_body') ):  
    while( have_rows('new_ways_body') ): the_row(); 

    $heading = get_sub_field('heading');
    $card_one = get_sub_field('card_one_image');
    
    ?>

<section id="new-ways">
      <div class="new-ways-intro">

        <?php echo $heading; ?>

        <svg id="new-ways-arrow" xmlns="http://www.w3.org/2000/svg" width="356" height="235" viewBox="0 0 427 282" fill="none">
          <path id="motionPath" d="M2 46.878C21.8386 25.4246 74.8236 -12.094 128.055 9.45923C194.594 36.4008 175.002 99.2642 146.169 99.2642C117.335 99.2642 129.164 36.8998 204.206 46.878C279.247 56.8563 331 129.698 331 221" stroke="#FBAF1D" stroke-width="5" />
          <path id="arrow" d="M354 211.348C346.333 207.666 331 207.151 331 234.543C331 210.685 316.333 209.139 309 211.348" stroke="#FBAF1D" stroke-width="5" />
        </svg>
      </div>

      <div class="card-grid site-width">
        <figure id="card-1">
          <img src="<?php echo $card_one['url']; ?>" alt="<?php echo $card_one['title']; ?>" />
        </figure>

        <?php if( have_rows('card') ):  ?>

        <?php while( have_rows('card') ): the_row(); 
            $icon = get_sub_field('icon');
            $card_heading = get_sub_field('card_heading');
            $card_body = get_sub_field('card_body');
            $card_class = get_sub_field('card_class');
            ?>

            <div class="card <?php if($card_class) { echo $card_class; } ?>">
                <div class="card-top">
                    <p><del><?php echo $card_heading; ?></del></p>
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['title']; ?>">
                </div>
                <div class="card-bottom">
                    <h3><?php echo $card_body; ?></h3>
                </div>
            </div>

            <?php endwhile;
              endif;
              endwhile;
              endif;
          ?>

            </div>

            <div class="contact">
              <div class="contact-inner">
                <strong><a href="#">Get in touch</a></strong>
                <svg id="contact-outline" width="265" height="71" viewBox="0 0 265 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path id="contact-path" d="M3 28.8128C11.2847 19.0528 50.4633 0.292077 140.9 3.3285C253.946 7.12403 315.681 60.2615 200.229 66.7681C84.778 73.2747 -5.01745 53.0404 39.0785 28.8128" stroke="#C22187" stroke-width="5.36585" />
                </svg>
              </div>
            </div>
        </section>
        



  