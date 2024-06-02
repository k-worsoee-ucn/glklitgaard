<?php get_header(); ?>
<section class="w-full h-fit min-h-96 relatvie">
    <h1 class="text-4xl text-center pt-8 w-full"><?php echo post_type_archive_title( '', false );?></h1>
    <img class="absolute top-0 left-0 h-full w-full -z-10 opacity-50 object-cover object-center" src="<?php echo get_theme_file_uri("/assets/images/strand.jpg") ?>" alt="Den vidungerlige strand i nærheden af gammel klitgaard">
</section>
<section class="bg-gray-200 relative w-full z-30 grid gap-5 grid-cols-1 lg:grid-cols-2 pt-10 pb-14">
        <div class="Waves absolute top-2 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
        </div>
        <div class="w-full rip rotate-180 absolute bottom-full h-6 -top-6 z-20 fill-gray-200">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
        </div>
        <div class="col-start-1 mx-auto w-10/12 lg:mx-0 md:w-8/12 lg:ml-auto">
            <p>Nr. Lyngby er en perle beliggende på den nordjyske kyststrækning i Danmark. Kendt for sine imponerende klitter og brede sandstrande, tilbyder Nr. Lyngby enestående naturoplevelser for besøgende i alle aldre.</p> 
            <p class="mt-2">Klitterne danner en imponerende baggrund for de lange strækninger af uberørt sandstrand, der indbyder til afslappende gåture, solbadning og leg i bølgerne.</p>
            <hr class="hidden-push">
        </div>
        <div class="hidden md:block row-start-1 lg:col-start-2 mx-auto md:w-7/12 lg:w-10/12 lg:mr-auto h-full min-h-52 relative z-20 mb-4 lg:mb-0">
            <div class="absolute bg-slate-50 p-5 pb-24 bottom-0 left-0 lg:left-10 -rotate-12 drop-shadow-md"><img class="w-60 h-48 object-cover object-center" src="<?php echo get_theme_file_uri("/assets/images/bookridetur.png") ?>" alt="vidunderlig stand udsyn ved Nr. Lyngby"></div>
            <div class="absolute bg-slate-50 p-5 pb-24 bottom-0 right-0 rotate-6 drop-shadow-md z-10"><img class="w-60 h-48 object-cover object-center" src="<?php echo get_theme_file_uri("/assets/images/solnedgang-baggrund.jpg") ?>" alt="Solen som dvaler ned til vandets overflade"></div>
        </div>
</section>
<section class="h-fit bg-gray-200 relative w-full pt-20 pb-10 box-content">
    <div class="relative w-10/12 md:w-1/2 lg:w-1/3 mx-auto md:ml-auto md:mr-10 z-40">
        <div class="px-10 py-16"><h2 class="text-center text-3xl">Oplev den smukkeste strand</h2>
        <p class="w-full text-xl text-center mt-2 mb-5">...Hvis vi selv skulle sige det.</p>
        <p>Vores campingplads ligger 400 m fra stranden, hvor der hvert år bliver sat en trappe op. Der er også mulighed for at køre på stranden, ved Nr. Lyngbys nedkørsel.</p>
        <p>Vores skønne strand er bred og med klart lækkert vand. Derudover kan man opleve den smukkeste solnedgang.</p>
        </div>
        <div class="absolute w-full h-full top-0 left-0 -z-10 opacity-75 fill-slate-50">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/footer-paper.svg"));?>
        </div>
    </div>
    <img class="absolute z-30 top-0 h-full w-full object-cover object-top" src="<?php echo get_theme_file_uri("/assets/images/newsbg.png")?>" alt="Solnedgangen tager endgelig fat, da solen kun er få meter over vandet">
</section>
<section class="bg-yellow-200 relative w-full h-fit z-40">
    <div class="paper-crumb absolute -top-6 h-full w-full">
        <img class="w-full h-6 object-cover object-top opacity-90" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
        <img class="w-full h-full object-cover opacity-35" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
    </div>
    <h2 class="text-center relative w-full mt-10 mb-3 z-10">Biodiversitet</h2>
    <p class="text-center relative mx-auto w10/12 md:w-9/12 lg:w-8/12 z-10">Naturen omkring Nr. Lyngby er også rig på biodiversitet. På de frodige klitter og i det omkringliggende landskab kan man opleve et rigt dyreliv, herunder sjældne fuglearter og spændende flora. Området er ideelt til fugleobservation, særligt under trækruterne om foråret og efteråret.</p>
    <?php $pattern = "/<img.*?src[^\>]+>/";
    $Plante = new WP_Query(array(
            'posts_per_page'    => -1,
            'orderby'    => "title",
            'post_type' => "naturguide",
            'meta_key'      => 'dyre_type',
            'meta_value'    => 'planteliv',
            'order' => 'ASC',
        )); if($Plante->have_posts()){?>
        <div class="mt-20 mx-auto w-11/12 grid grid-cols-1 lg:grid-cols-2 lg:gap-5 md:gap-2 gap-y-10">
            <h2 class="text-center text-2xl mx-auto w-full z-10">Planteliv</h2>
        <?php while($Plante->have_posts()){
            $Plante->the_post();
            $hasIMG = false; ?>
            <div class="relative md:w-10/12 md:mx-auto lg:w-full h-fit row-span-2 z-20 grid grid-cols-2 grid-rows-1 gap-2">
            <div class="fill-main-brand-color opacity-65 absolute h-full w-10/12 top-0 left-0 -z-10">
                        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/footer-paper.svg")); ?>
            </div>
            <img class="z-20 paper-overlay relative w-full object-cover object-center -bottom-1/4 md:-bottom-5 lg:-bottom-1/2 right-0 col-start-2 col-span-1 row-start-1 row-span-1" src="<?php echo get_the_post_thumbnail_url();?>" alt="Closeup af planten <?php echo get_the_title(); ?>">
                <div class="py-10 pl-10 w-full col-start-1 col-span-1 row-start-1 row-span-1">
                    <h3 class="text-xl"><?php echo get_the_title(); ?></h3>
            <?php 
            if(preg_match($pattern, get_the_content())){ $hasIMG = true;}
            if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
        }?></div></div><?php }?>
    </div><hr class="hidden-push">
    <?php }; wp_reset_postdata(); ?>

    <?php   $Fugl = new WP_Query(array(
            'posts_per_page'    => -1,
            'orderby'    => "title",
            'post_type' => "naturguide",
            'meta_key'      => 'dyre_type',
            'meta_value'    => 'Fugle',
            'order' => 'ASC',
        )); if($Fugl->have_posts()){?>
        <div class="mt-20 mx-auto w-11/12 grid grid-cols-1 lg:grid-cols-2 lg:gap-5 md:gap-2 gap-y-10">
            <h2 class="text-center text-2xl mx-auto w-full z-10">Fugle</h2>
        <?php while($Fugl->have_posts()){
            $Fugl->the_post();
            $hasIMG = false; ?>
            <div class="relative md:w-10/12 md:mx-auto lg:w-full h-fit row-span-2 z-20 grid grid-cols-2 grid-rows-1 gap-2">
            <div class="fill-main-brand-color opacity-65 absolute h-full w-10/12 top-0 left-0 -z-10">
                        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/footer-paper.svg")); ?>
            </div>
            <img class="z-20 paper-overlay relative w-full object-cover object-center -bottom-1/4 md:-bottom-5 lg:-bottom-1/2 right-0 col-start-2 col-span-1 row-start-1 row-span-1" src="<?php echo get_the_post_thumbnail_url();?>" alt="Closeup en <?php echo get_the_title(); ?> fugl">
                <div class="py-10 pl-10 w-full col-start-1 col-span-1 row-start-1 row-span-1">
                    <h3 class="text-xl"><?php echo get_the_title(); ?></h3>
            <?php 
            if(preg_match($pattern, get_the_content())){ $hasIMG = true;}
            if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
        }?></div></div><?php }?>
    </div><hr class="hidden-push">
    <?php }; wp_reset_postdata(); ?>

    <?php   $Pat = new WP_Query(array(
            'posts_per_page'    => -1,
            'orderby'    => "title",
            'post_type' => "naturguide",
            'meta_key'      => 'dyre_type',
            'meta_value'    => 'Pattedyr',
            'order' => 'ASC',
        )); if($Pat->have_posts()){?>
        <div class="mt-20 mx-auto w-11/12 grid grid-cols-1 lg:grid-cols-2 lg:gap-5 md:gap-2 gap-y-10">
            <h2 class="text-center text-2xl mx-auto w-full z-10">Pattedyr</h2>
        <?php while($Pat->have_posts()){
            $Pat->the_post();
            $hasIMG = false; ?>
            <div class="relative md:w-10/12 md:mx-auto lg:w-full h-fit row-span-2 z-20 grid grid-cols-2 grid-rows-1 gap-2">
            <div class="fill-main-brand-color opacity-65 absolute h-full w-10/12 top-0 left-0 -z-10">
                        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/footer-paper.svg")); ?>
            </div>
            <img class="z-20 paper-overlay relative w-full object-cover object-center -bottom-1/4 md:-bottom-5 lg:-bottom-1/2 right-0 col-start-2 col-span-1 row-start-1 row-span-1" src="<?php echo get_the_post_thumbnail_url();?>" alt="Closeup en <?php echo get_the_title(); ?> fugl">
                <div class="py-10 pl-10 w-full col-start-1 col-span-1 row-start-1 row-span-1">
                    <h3 class="text-xl"><?php echo get_the_title(); ?></h3>
            <?php 
            if(preg_match($pattern, get_the_content())){ $hasIMG = true;}
            if($hasIMG == false){echo get_the_content();} else{
               $UnimgCont = preg_replace($pattern," ",get_the_content());
               echo $UnimgCont;
        }?></div></div><?php }?>
    </div><hr class="hidden-push">
    <?php }; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>