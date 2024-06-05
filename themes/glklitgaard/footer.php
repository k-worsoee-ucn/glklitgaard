</main>
<footer class="grid grid-cols-1 gap-7 md:grid-cols-10 lg:grid-cols-12  md:gap-3 lg:gap-0 z-40 relative bg-brand-darkgreen">
    <?php wp_footer();?>
    <div id="Foot-Rip" class="w-full col-start-1 col-span-1 md:col-span-10 lg:col-span-12 row-span-1 row-start-1 absolute -top-1">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="Footer-deco absolute top-0 w-full h-full overflow-hidden">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/scales.svg")); ?>
    </div>
    <div class="footer-contact mt-5 md:mt-8 lg:mt-10 row-start-1 my-0 row-span-1 w-8/10 mx-auto md:my-10 lg:my-10 lg:w-full md:w-10/12 md:ml-auto md:col-start-1 md:col-span-3 lg:col-start-2 lg:col-span-3">
        <h2 class="text-white text-4xl text-centered md:text-left lg:text-left">Kontakt</h2>
        <div class="text-white text-lg mt-5">
            <p><?php echo get_bloginfo("name") ?></p>
            <p><?php echo get_option("lokation") . ", " . get_option("by");?></p>
        </div>
        <div class="text-lg text-white mt-5">
            <?php if(get_option("mobil-nummer")){?>
                <div class="grid grid-cols-10 gap-2 hover-effect-foot mb-5 w-fit">
                    <i class="fa-solid fa-phone col-start-1 col-span-1 ml-auto h-fit w-full my-auto"></i>
                    <a href="tel:<?php echo get_option("mobil-nummer") ?>" class="col-start-2 col-span-9 w-fit">+45 <?php echo get_option("mobil-nummer") ?></a>
                </div>
                <?php }; if(get_option("kontakt-email")){?>
                <div class="grid grid-cols-10 gap-2 hover-effect-foot mb-5 w-fit">
                    <i class="fa-solid fa-envelope col-start-1 col-span-1 ml-auto h-fit w-full my-auto"></i>
                    <p href="mailto:<?php echo get_option("kontakt-email") ?>" class="col-start-2 col-span-9 w-fit"><?php echo get_option("kontakt-email") ?></p>
                </div>
                <?php };?>
        </div>
    </div>
    <div class="footer-logo-container w-8/12 lg:my-10 md:my-5 row-start-2 md:row-start-1 row-span-1 md:col-start-4 md:col-span-4 lg:col-start-5 z-1 md:w-10/12 mx-auto fill-slate-50">
            <svg class="w-full h-full"><?php echo file_get_contents( get_theme_file_uri("/assets/svg/footer-paper.svg")); ?></svg>
        <img src="<?php echo get_theme_file_uri("/assets/logos/glklitgaard.png") ?>" alt="Logo af Gammel Klitgaard" class="mx-auto mt-3 w-10/12">
        <div class="inline-flex justify-evenly flex-nowrap w-full mx-auto h-8 mt-4">
        <?php   $SM = new WP_Query(array(
                    'posts_per_page'    => -1,
                    'post_type' => "Social-Media",
                ));
                while($SM->have_posts()){
                    $SM->the_post();?>
                    <a class="SocialM" href="<?php the_field("link") ?>" target="blank"><?php the_field("icon"); ?></a>
                <?php }
            ?>
        </div>
    </div>
    <div class="footer-nav mt-4 mb-20 md:mb-0 md:mt-8 lg:mt-10 row-start-3 w-8/10 mx-auto row-span-1 md:col-span-3 lg:w-full lg:col-span-2 lg:row-start-1 md:row-start-1 md:w-10/12 md:mr-auto md:col-start-8 lg:col-start-10">
        <h2 class="text-center text-white mb-2  md:mb-0 md:hidden">Finder du hvad du leder efter?</h2>
        <ul class="text-right text-white text-lg">
            <?php
            $locations = get_nav_menu_locations();
            $menu = wp_get_nav_menu_object( $locations['footer_menu'] );
            $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'ASC' ) );

            foreach($menuitems as $item){?>
                <li class="mb-3 mx-auto md:ml-auto grid grid-cols-1 h-fit w-fit"><a href="<?php echo $item->url?>"><?php echo $item->title?></a><div class="hover-line h-0.5"></div></li>
            <?php }?>
        </ul>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>