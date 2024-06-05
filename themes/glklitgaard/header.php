<!DOCTYPE html>
<html class="m-0">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
    <title><?php bloginfo('name') ?></title>
</head>

<body <?php body_class() ?> class="w-full">
    <header class="grid grid-cols-12 grid-rows-1 z-50 fixed h-fit drop-shadow-md w-full max-h-16 top-0">
        <div class="Backgroun opacity-90 col-span-12 col-start-1 row-start-1 row-span-1 h-full bg-gradient-to-r from-brand-lightgreen to-brand-darkgreen -z-10"></div>
        <div class="col-start-1 col-span-5 md:col-span-3 md:col-start-1 lg:col-span-2 lg:col-start-1 row-start-1 relative">
            <a href="<?php echo site_url() ?>" class="header-logo mx-auto w-full h-10/12 mt-3">
                <img src="<?php echo get_theme_file_uri("/assets/logos/glklitgaard.png") ?>" alt="Gl. Klitgaard logo" class="logo z-10 w-9/12 h-auto max-h-20 align-center row-span-1 row-start-1 col-start-1 col-span-1 object-contain">
            </a>
            <div class="logo-paper absolute w-full md:h-8/12 h-full top-0 -left-5 -z-10">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/logo-paper.svg"));?>
            </div>
        </div>
        <nav class="lg:my-auto pt-20 lg:pt-0 h-fit bg-brand-lightgreen lg:bg-transparent duration-300 ease-in-out row-span-1 row-start-1 -z-30 lg:z-0 w-full inline-flex flex-wrap justify-center col-start-1 col-span-12 lg:col-start-3 lg:col-span-8 lg:static absolute top-0 -right-full lg:right-0">
            <?php   $Praktik = new WP_Query(array(
                        "posts_per_page" => 1, // finder alle posts
                        "post_type" => "Page", // Finder posts med den type post type
                         "pagename" => "praktisk info"
                    )); $location = get_nav_menu_locations();
                    if($Praktik && $Praktik->found_posts != 0){ ?>
            <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                <?php
                        $Mmenu = wp_get_nav_menu_object( $location['praktisk_menu'] );
                        $Mmenuitems = null;
                        if($Mmenu){
                            $Mmenuitems = wp_get_nav_menu_items( $Mmenu->term_id, array( 'order' => 'DESC' ));
                        }
                        $parentID = null;
                    
                        while ($Praktik->have_posts()) {
                            $Praktik->the_post();
                            $parentID = get_the_ID();
                        }
                        if($parentID != null && $Mmenuitems != null){?>
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);
                            if($Mmenuitems){?> <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i> <?php };?> </a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right"><?php echo get_the_title($parentID); ?><i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <?php if($Mmenuitems){?> <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php foreach($Mmenuitems as $item){?>
                                    <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                                        <?php }; ?>
                            </ul> <?php };?>
                        <?php } else{?>
                            <a class="nav-main-point h-fit md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);?> </a>
                            <?php };?> </div> <?php }; wp_reset_postdata();
                    $Udlej = new WP_Query(array(
                        "posts_per_page" => -1, // finder alle posts
                        "post_type" => "Udlejning", // Finder posts med den type post type
                        "post_status" => "publish", // skal være published!
                    ));
                    if($Udlej && $Udlej->found_posts != 0){?>
                        <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo site_url("/udlejning")?>">Udlejning
                            <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i></a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right">Udlejning<i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php while ($Udlej->have_posts()) {
                                    $Udlej->the_post();?>
                                        <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php }; ?>
                            </ul>
                        </div> <?php }; ?>
            <?php
                    $Hest = new WP_Query(array(
                            "posts_per_page" => 1, // finder alle posts
                            "post_type" => "Page", // Finder posts med den type post type
                            "pagename" => "vores heste"
                        ));
            
            if($Hest && $Hest->found_posts != 0){ ?>
            <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                <?php   $Hmenu = wp_get_nav_menu_object( $location['heste_menu'] );
                        $Hmenuitems = null;
                        if($Hmenu){
                            $Hmenuitems = wp_get_nav_menu_items( $Hmenu->term_id, array( 'order' => 'DESC' ));
                        }
                        $parentID = null; // resætte den til nuller

                        while ($Hest->have_posts()) {
                            $Hest->the_post();
                            $parentID = get_the_ID();
                        if($parentID != null && $Hmenu != null){?>
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);
                            if($Hmenuitems){?> <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i> <?php };?> </a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right"><?php echo get_the_title($parentID); ?><i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <?php if($Hmenuitems){?> <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php foreach($Hmenuitems as $item){?>
                                    <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                                        <?php }; ?>
                            </ul> <?php };?>
                        <?php } else{?>
                            <a class="nav-main-point h-fit md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);?> </a>
                        <?php };}; wp_reset_postdata();?>
            </div>
            <?php   };
                    $Oplevelse = new WP_Query(array(
                        "posts_per_page" => 1, // finder alle posts
                        "post_type" => "Page", // Finder posts med den type post type
                        "pagename" => "Oplevelser"
                    ));
                    if($Oplevelse && $Oplevelse->found_posts != 0){?>
            <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                <?php   $Omenu = wp_get_nav_menu_object( $location['oplevelse_menu'] );
                        $Omenuitems = null;
                        if($Omenu){
                            $Omenuitems = wp_get_nav_menu_items( $Omenu->term_id, array( 'order' => 'DESC' ));
                        }
                        $parentID = null; // resætte den til nuller

                        while ($Oplevelse->have_posts()) {
                            $Oplevelse->the_post();
                            $parentID = get_the_ID();
                        if($parentID != null && $Omenu != null){?>
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);
                            if($Omenuitems){?> <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i> <?php };?> </a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right"><?php echo get_the_title($parentID); ?><i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <?php if($Omenuitems){?> <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php foreach($Omenuitems as $item){?>
                                    <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                                        <?php }; ?>
                            </ul> <?php };?>
                        <?php } else{?>
                            <a class="nav-main-point h-fit md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);?> </a>
                        <?php };};?>
            </div> <?php } wp_reset_postdata(); ?>
            <?php $Udlej = new WP_Query(array(
                        "posts_per_page" => -1, // finder alle posts
                        "post_type" => "Faciliteter", // Finder posts med den type post type
                        "post_status" => "publish", // skal være published!
                    ));
                    if($Udlej && $Udlej->found_posts != 0){?>
                        <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo site_url("/faciliteter")?>">Faciliteter
                            <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i></a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right">Faciliteter<i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php while ($Udlej->have_posts()) {
                                    $Udlej->the_post();?>
                                        <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php }; ?>
                            </ul>
                        </div> <?php }; wp_reset_postdata();
                    $Pris = new WP_Query(array(
                            "posts_per_page" => 1, // finder alle posts
                            "post_type" => "Page", // Finder posts med den type post type
                            "pagename" => "Priser"
                        ));
            
            if($Pris && $Pris->found_posts != 0){ ?>
            <div class="nav-point relative w-full lg:w-fit h-fit float-left inline-block border-none outline-none lg:m-1 px-3 py-2 my-auto rounded-none hover:rounded-t bg-brand-lightgreen hover:bg-brand-darkgreen hover:text-white lg:bg-transparent text-slate-950 lg:hover:text-slate-950 lg:hover:bg-brand-lightgreen duration-200">
                <?php   $Pmenu = wp_get_nav_menu_object( $location['pris_menu'] );
                        $Pmenuitems = null;
                        if($Pmenu){
                            $Pmenuitems = wp_get_nav_menu_items( $Pmenu->term_id, array( 'order' => 'DESC' ));
                        }
                        $parentID = null; // resætte den til nuller

                        while ($Pris->have_posts()) {
                            $Pris->the_post();
                            $parentID = get_the_ID();
                        if($parentID != null && $Pmenu != null){?>
                            <a class="nav-main-point h-0 md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);
                            if($Pmenuitems){?> <i class="fa fa-caret-down nav_arrow duration-200 opacity-0 lg:opacity-100"></i> <?php };?> </a>
                            <p class="fake-block cursor-pointer overflow-hidden h-fit block md:hidden w-full pr-10 text-right"><?php echo get_the_title($parentID); ?><i class="ml-2 fa fa-caret-down nav_arrow duration-200"></i></p>
                            <?php if($Pmenuitems){?> <ul class="relative underPoint w-full bg-brand-lightgreen lg:rounded-b grid grid-cols-1 md:inline-flex lg:grid lg:grid-cols-1 overflow-hidden h-0 md:h-fit lg:h-0 duration-200 lg:absolute top-full left-0">
                                <?php foreach($Pmenuitems as $item){?>
                                    <a class="w-full text-center lg:text-left px-3 py-2 hover:bg-brand-darkgreen hover:text-white text-slate-950" href="<?php echo $item->url ?>"><?php echo $item->title ?></a>
                                        <?php }; ?>
                            </ul> <?php };?>
                        <?php } else{?>
                            <a class="nav-main-point h-fit md:h-fit overflow-hidden block w-full relative text-right pr-10 md:pr-0 md:text-center lg:w-fit" href="<?php echo get_the_permalink($parentID);?>"><?php echo get_the_title($parentID);?> </a>
                        <?php };}; ?>
            </div> <?php }; wp_reset_postdata();?>
            <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));//ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>"
            class="knap z-20 md:hidden text-center px-3 py-1 mx-auto my-5 font-semibold">Book nu</a>
        </nav>
        <div id="Burg-Menu" class="col-start-8 col-span-4 md:col-start-4 md:col-span-7 md:row-start-1 lg:hidden text-slate-950 md:text-brand-darkgreen duration-300 hover:scale-110 hover:text-slate-900 drop-shadow-sm w-fit h-fit my-auto mr-8 ml-auto row-start-1 md:m-auto"><i class="fa-solid fa-bars text-3xl cursor-pointer"></i></div>
        <div class="col-start-11 col-span-2 w-full my-auto relative row-start-1">
            <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));//ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap w-fit min-w-1/2 my-auto relative hidden md:block text-center px-5 py-1 mx-auto font-semibold">Book nu</a>
            <div id="Book-sol" class="fill-yellow-200 hover:fill-yellow-400 hover:scale-110 hidden duration-300 ease-in-out md:block absolute -top-1/2 w-1/2 lg:w-1/4 h-auto -z-10 left-1/2 -translate-x-1/2">
                <svg id="Sun-figure" class="fill-inherit w-full max-h-full relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                <svg class="fill-orange-800 left-1/2 -translate-x-1/2 w-1/3 ease-in-out duration-300 opacity-50 absolute z-10 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>
        </div>
    </header>
    <main class="grid grid-cols-12 max-w-full">