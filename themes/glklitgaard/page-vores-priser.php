<?php get_header() ?>
<section class="relative col-span-12 text-center text-4xl h-1/2 bg-gray-200">
    <h1 class="top-1/2 w-full text-3xl">Vores Priser</h1>
    <img class="absolute -z-10 opacity-50 object-cover object-center" src="<?php get_theme_file_uri("/assets/images/glklit-i-sand.jpg") ?>" alt="Gammel klitgaard skrevet i sandet">
</section>
<div class="h-fit w-full rip  -mb-10 fill-gray-200 rotate-180">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="col-span-12 grid grid-cols-12 -mt-5 pb-20 relative bg-gray-200">
    <div class="col-start-3 col-span-7 text-center text-lg py-20 mt-10 bg-white relative p-5">
        <h2 class="text-xl w-full text-center mt-3">Udregn Din Pris</h2>

        <div id="Udregner" class="w-full inline-flex flex-nowrap justify-between">
            <div>
                
            </div>

        </div>

        <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <div class="Waves absolute top-1/2 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
</section>
<section class="bg-gray-200 pt-5 grid grid-rows-2">
    <h2 class="text-2xl text-center w-full grid-rows-1">Pris på hytter</h2>
    <?php $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'hytter'
    )); $amount = 1; $dates = 1;
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if($amount == 1){?>
            <div class="grid grid-cols-1 row-start-2 border-main-brand-color">
                <p class="bold text-lg my-auto">Datoer:</p>
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                    $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                    $dateEnd = get_sub_field('date_end');?>
                    <p class="h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                    <?php $dates++;
                ?>
            </div>
        <?php } $dates = 0; ?>
            <div class="grid grid-cols-1">
                    <div class="grid grid-cols-2">
                        <i></i>
                        <p class="h-full w-full border-inherit border-0 border-r-4 rounded-t border-dotted text-center">Pr. Dag</p>
                        <p class="text-center h-full w-full">Pr. Uge</p>
                    </div>
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row();
                    $DayPrice = get_sub_field('pris_per_dag');
                    $WeekPrice = get_sub_field('pris_per_uge');
                    ?>
                    <div class="h-fit w-full border-inherit border-0 border-l-4">
                        <p class="h-full w-full border-inherit border-0 border-r-4 rounded-t border-dotted text-center"><?php echo $DayPrice?></p>
                        <p class="text-center h-full w-full"><?php echo $WeekPrice?></p>
                    </div>
            </div>
    <?php }} $amount++; }}}?>
</section>

<?php get_footer() ?>