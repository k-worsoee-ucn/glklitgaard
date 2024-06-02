<?php get_header() ?>
<section class="relative col-span-12 text-center text-4xl h-fit bg-gray-200 min-h-96">
    <h1 class="top-1/3 w-full text-3xl absolute z-20">Vores Priser</h1>
    <img class="top-0 absolute opacity-50 object-cover object-center w-full h-full" src="<?php echo get_theme_file_uri("/assets/images/glklit-i-sand.jpg") ?>" alt="Gammel klitgaard skrevet i sandet">
    <div class="h-fit w-full absolute bottom-10 rip -mb-10 fill-gray-200 rotate-180">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
</section>
<section class="wavey-section col-span-12 grid grid-cols-12 -mt-5 pb-20 relative bg-gray-200">
    <div class="col-start-3 col-span-7 text-center z-10 text-lg py-5 mt-10 bg-white relative p-10">
        <h2 class="text-xl w-full text-center mt-3">Udregn Din Pris</h2>

        <div id="Udregner" class="w-full inline-flex flex-nowrap justify-between">
        <form action="#" class="inline-flex w-full justify-between">
            <div class="grid grid-cols-2 gap-4">
            <select name="overnatning" id="overnatning" class="col-span-2 col-start-1 px-3 py-2 bg-brand-lightgreen rounded-md">
                <option class="hover:bg-brand-darkgreen" value="1">1 dag</option>
                <option value="2">2 dage</option>
                <option value="3">3 dage</option>
                <option value="4">4 dage</option>
            </select>
            <select name="antal børn" id="born">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            </div>
        <input type="submit" value="Submit">
        </form>
        <h3 class="text-lg inline-flex gap-3">Vejledende pris: <div>450,-</div></h3>
        <div class="mx-auto my-3 w-10/12 md:8/12 lg:6/12">
        <?php the_content()?></div>
        </div>

        <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <div class="Waves absolute top-1/4 h-fit overflow-x-hidden w-full ease-linear duration-150">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
</section>
<section class="bg-gray-200 pt-5 relative">
    <h2 class="text-2xl text-center w-full grid-rows-1 h-fit mb-3 z-10">Pris på hytter</h2>
    <div class="grid w-10/12 mx-auto mt-5 mb-16 z-10">
    <?php $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'hytter'
    )); $amount = 1; $dates = 1;
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if($amount == 1){?>
            <p class="bold text-lg mt-auto row-start-1 col-start-1 text-center">Datoer:</p>
            <div class="grid grid-cols-1 row-start-2 border-main-brand-color mt-auto">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                    $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                    $dateEnd = get_sub_field('date_end');?>
                    <p class="text-center h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                    <?php $dates++;
               } ?>
            </div>
        <?php $dates = 1; ?>
            <div class="row-start-1 grid grid-cols-2 border-main-brand-color border-0 border-l-4 rounded-t">
                <div class="inline-flex col-start-1 col-span-2 w-10/12 mx-auto justify-evenly"><?php echo get_field("icon")?><h4><?php echo get_field("forkortet_navn")?></h4></div>
                    <p class="h-fit w-full border-inherit border-0 border-r-4 rounded-t border-dotted text-center">Pr. Dag</p>
                    <p class="text-center h-fit w-full">Pr. Uge</p>
            </div>
            <div class="grid grid-cols-2 row-start-2 relative border-main-brand-color border-0 border-l-4 rounded-t">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row();
                    $DayPrice = get_sub_field('pris_per_dag');
                    $WeekPrice = get_sub_field('pris_per_uge');
                    ?><div class="col-start-1 h-fit col-span-2 border-0 border-t-4 grid-cols-2 grid border-inherit">
                        <p class="h-fit w-full border-inherit border-0 border-r-4 border-dotted text-center"><?php echo $DayPrice?>,-</p>
                        <p class="text-center h-fit w-full"><?php echo $WeekPrice?>,-</p>
                    </div>
    <?php $dates++; }}?> <div class="col-span-2 absolute top-full mt-2 w-fit left-1/2 -translate-x-1/2"><a class="knap px-3 py-1" href="<?php echo get_the_permalink();?>">Se Hytte</a></div></div>  <?php $amount++; }}} wp_reset_postdata(); ?>
    </div>

    <div class="grid w-10/12 mx-auto my-5 grid-cols-3 gap-10">
    <div class="grid cols-col-start-1">
    <?php $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'andet',
        'name'     => 'klithuset'
    )); $amount = 1; $dates = 1;
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if($amount == 1){?>
            <p class="bold text-lg mt-auto row-start-1 col-start-1 text-center">Datoer:</p>
            <div class="grid grid-cols-1 row-start-2 border-main-brand-color mt-auto">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                    $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                    $dateEnd = get_sub_field('date_end');?>
                    <p class="text-center h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                    <?php $dates++;
               } ?>
            </div>
        <?php $dates = 1; ?>
            <div class="row-start-1 grid grid-cols-2 border-main-brand-color border-0 border-l-4 rounded-t">
                <div class="inline-flex col-start-1 col-span-2 w-10/12 mx-auto justify-evenly"><?php echo get_field("icon")?><h4><?php echo get_field("forkortet_navn")?></h4></div>
                    <p class="h-full w-full border-inherit border-0 border-r-4 rounded-t border-dotted text-center">Pr. Dag</p>
                    <p class="text-center h-full w-full">Pr. Uge</p>
            </div>
            <div class="grid grid-cols-2 row-start-2 border-main-brand-color border-0 border-l-4 rounded-t">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row();
                    $DayPrice = get_sub_field('pris_per_dag');
                    $WeekPrice = get_sub_field('pris_per_uge');
                    ?><div class="col-start-1 col-span-2 border-0 border-t-4 grid-cols-2 grid border-inherit">
                        <p class="h-full w-full border-inherit border-0 border-r-4 border-dotted text-center"><?php echo $DayPrice?>,-</p>
                        <p class="text-center h-full w-full"><?php echo $WeekPrice?>,-</p>
                    </div>
    <?php $dates++; }}?> <div class="col-span-2 absolute top-full mt-2 w-fit left-1/2 -translate-x-1/2"><a class="knap px-3 py-1" href="<?php echo get_the_permalink();?>">SeHuset</a></div></div>  <?php $amount++; }}} wp_reset_postdata();?>
    </div>

    <div class="grid cols-col-start-2 col-span-2">
    <?php $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'andet',
    )); $amount = 1; $dates = 1;
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if(get_the_title() != "Klithuset" AND get_the_title() != "klithuset" AND get_the_title() != "klit huset"){
        if($amount == 1){?>
            <p class="bold text-lg mt-auto row-start-1 col-start-1 text-center">Datoer:</p>
            <div class="grid grid-cols-1 row-start-2 border-main-brand-color mt-auto">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                    $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                    $dateEnd = get_sub_field('date_end');?>
                    <p class="text-center h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                    <?php $dates++;
               } ?>
            </div>
        <?php $dates = 1; ?>
            <div class="row-start-1 grid grid-cols-2 border-main-brand-color border-0 border-l-4 rounded-t">
                <div class="inline-flex col-start-1 col-span-2 w-10/12 mx-auto justify-evenly"><?php echo get_field("icon")?><h4><?php echo get_field("forkortet_navn")?></h4></div>
                    <p class="h-full w-full border-inherit border-0 border-r-4 rounded-t border-dotted text-center">Pr. Dag</p>
                    <p class="text-center h-full w-full">Pr. Uge</p>
            </div>
            <div class="grid grid-cols-2 row-start-2 border-main-brand-color border-0 border-l-4 rounded-t relative">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row();
                    $DayPrice = get_sub_field('pris_per_dag');
                    $WeekPrice = get_sub_field('pris_per_uge');
                    ?><div class="col-start-1 col-span-2 border-0 border-t-4 grid-cols-2 grid border-inherit">
                        <p class="h-full w-full border-inherit border-0 border-r-4 border-dotted text-center"><?php echo $DayPrice?>,-</p>
                        <p class="text-center h-full w-full"><?php echo $WeekPrice?>,-</p>
                    </div>
    <?php $dates++; }}?> <div class="col-span-2 absolute top-full mt-2 w-fit left-1/2 -translate-x-1/2"><a class="knap px-3 py-1" href="<?php echo get_the_permalink();?>">Se Mere</a></div></div>  <?php $amount++; }}}}?>
    </div>
    </div>
</section>
<section>

</section>
<?php get_footer() ?>