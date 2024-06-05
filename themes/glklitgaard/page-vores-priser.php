<?php get_header() ?>
<section class="relative col-span-12 text-center text-4xl h-fit bg-gray-200 min-h-96">
    <h1 class="top-1/3 w-full text-3xl absolute z-20">Vores Priser</h1>
    <img class="top-0 absolute opacity-50 object-cover object-center w-full h-full" src="<?php echo get_theme_file_uri("/assets/images/glklit-i-sand.jpg") ?>" alt="Gammel klitgaard skrevet i sandet">
    <div class="h-fit w-full absolute bottom-10 rip -mb-10 fill-gray-200 rotate-180">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
</section>
<section class="wavey-section col-span-12 grid grid-cols-12 -mt-5 pb-20 relative bg-gray-200">
    <div class="col-start-2 col-span-10 md:col-start-3 md:col-span-8 text-center z-10 text-lg py-5 mt-10 bg-white relative p-5 md:p-10">
        <h2 class="text-2xl w-full text-center my-3">Udregn Din Pris</h2>
            <form action="#" class="flex flex-wrap w-full justify-center gap-5">
                <div class="w-full inline-flex lg:flex-nowrap justify-center flex-wrap gap-6">
                <div class="grid grid-cols-2 gap-4">
                    <select name="overnatning" id="overnatning" class="col-span-2 col-start-1 px-3 py-2 bg-brand-lightgreen rounded-2xl">
                        <option value="1">Overnatning</option>
                        <option value="1">1 dag</option>
                        <option value="2">2 dage</option>
                        <option value="3">3 dage</option>
                        <option value="4">4 dage</option>
                    </select>
                    <select name="antal voksne" id="voksne" class="px-3 py-2 bg-brand-lightgreen rounded-2xl">
                        <option value="0">- Antal Voksne -</option>    
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                    </select>
                    <select name="antal børn" id="born" class="px-3 py-2 bg-brand-lightgreen rounded-2xl">
                        <option value="0">- Antal Børn -</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="grid grid-cols-7">
                    <input type="date" name="Start Date" id="StartDate" class="col-start-1 col-span-3 px-3 py-2 h-fit my-auto bg-brand-lightgreen rounded-2xl">
                    <p class="col-start-4 w-full text-center h-fit my-auto">-</p>
                    <input type="date" name="End Date" id="EndDate" class="col-start-5 col-span-3 px-3 py-2 h-fit my-auto bg-brand-lightgreen rounded-2xl">
                </div>
            </div>
            <input type="submit" value="Beregn Pris" class="knap h-fit py-2 px-4">
            </form>
        <h3 class="text-2xl inline-flex gap-3 mt-5 text-center">Vejledende pris: <div>450,-</div></h3>
        <div class="mx-auto my-3 w-10/12 md:8/12 lg:6/12">
        <?php the_content()?></div>
        
        <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
    </div>
    <div class="Waves -z-10 absolute top-1/4 h-fit overflow-x-hidden w-full ease-linear duration-150">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
</section>
<section class="bg-gray-200 pt-5 relative">
    <h2 class="text-2xl text-center w-full grid-rows-1 h-fit mb-3 z-10">Pris på hytter</h2>
    <div class="relative grid w-10/12 mx-auto mt-5 mb-16 gap-y-12 z-10 grid-cols-2 md:flex md:justify-center md:flex-nowrap">
    <?php $Hytte = new WP_Query(array(
        'posts_per_page'    => -1,
        'post_type' => "Udlejning",
        'meta_key'      => 'udlejnings_type',
        'meta_value'    => 'hytter'
    )); $amount = 1; $dates = 1;
    while($Hytte->have_posts()){
        $Hytte->the_post();
        if($amount == 1){?>
        <div class="row-span-2 grid grid-cols-1 h-fit mt-auto md:row-start-1 w-full md:w-7/12 lg:w-5/12">
            <p class="bold text-lg mt-auto row-start-1 text-center">Datoer:</p>
            <div class="grid grid-cols-1 row-start-2 border-main-brand-color mt-auto">
            <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                while(have_rows('dates_'.$dates) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                    $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                    $dateEnd = get_sub_field('date_end');?>
                    <p class="text-center h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                    <?php
               $dates++; } $dates = 1; ?>
            </div>
        </div>
        <?php };}else{ $datesTemp = 1;?>
            <div class="row-span-2 h-fit md:hidden mt-auto md:row-start-1 w-full md:w-7/12 lg:w-5/12">
                <p class="bold text-lg block md:hidden mt-auto row-start-1 text-center">Datoer:</p>
                <div class="grid grid-cols-1 md:hidden row-start-2 border-main-brand-color mt-auto">
                <?php if(have_rows('dates_'.$datesTemp)){ // hvis denne bruppe findes og har underpunkter
                    while(have_rows('dates_'.$datesTemp) ){ the_row(); // så imens den har, gør dette. minder om din post while loop
                        $dateStart = get_sub_field('date_start'); // tildel alle disee en varriabel.
                        $dateEnd = get_sub_field('date_end');?>
                        <p class="text-center h-fit w-full border-inherit border-0 rounded-l border-t-4"><?php echo $dateStart ." - ".$dateEnd?></p>
                        <?php
                   $datesTemp++; } $datesTemp = 1; ?>
                </div>
                </div>
            <?php };};?>
            <div class="row-span-2 md:row-start-1 w-full">
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
    <?php $dates++; }} $dates = 1;?> <div class="col-span-2 absolute top-full mt-2 w-full grid"><a class="knap mx-auto w-fit px-3 py-1" href="<?php echo get_the_permalink();?>">Se Hytte</a></div></div></div>  <?php $amount++; }; wp_reset_postdata(); ?>
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
                <div class="grid grid-cols-2 row-start-2 border-main-brand-color border-0 border-l-4 rounded-t">
                <?php if(have_rows('dates_'.$dates)){ // hvis denne bruppe findes og har underpunkter
                    while(have_rows('dates_'.$dates) ){ the_row();
                        $DayPrice = get_sub_field('pris_per_dag');
                        $WeekPrice = get_sub_field('pris_per_uge');
                        ?><div class="col-start-1 col-span-2 border-0 border-t-4 grid-cols-2 grid border-inherit">
                            <p class="h-full w-full border-inherit border-0 border-r-4 border-dotted text-center"><?php echo $DayPrice?>,-</p>
                            <p class="text-center h-full w-full"><?php echo $WeekPrice?>,-</p>
                        </div>
        <?php $dates++; }}?> <div class="col-span-2 absolute top-full mt-2 w-fit left-1/2 -translate-x-1/2"><a class="knap px-3 py-1" href="<?php echo get_the_permalink();?>">SeHuset</a></div></div>  <?php $amount++; }}}} wp_reset_postdata();?>
        </div>
</section>

<div class="h-fit w-full rip fill-gray-200">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>

<section class="relative bg-yellow-100 grid grid-cols-1 md:grid-cols-2 gap-12 -mt-6 py-10 overflow-hidden">
<img src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg") ?>" alt="crumpled paper" class="absolute w-full h-full object-fill opacity-20 top-0 left-0">
<?php $Info = get_field("ekstra_information"); if($Info){
    $SecAmnt = 1; ?>
    <div class="row-span-2 w-10/12 ml-auto relative z-10">
    <?php foreach($Info as $Type){ if($SecAmnt == 1){?>
        <div class="h-fit grid grid-cols-4 gap-4 w-full border-b-4 border-main-brand-color">
    <?php } else {?>
        <div class="h-fit grid grid-cols-4  gap-4 w-full border-t-4 border-b-4 border-main-brand-color">
            <?php } ?>
            <div class="w-fit col-start-1 h-fit TypeInfo my-auto mr-auto">
                <?php echo $Type["ikon_for_sektion"];
                $amount = 1;?>
            </div>
            <div class="w-full col-span-4 col-start-2 h-fit border-inherit grid grid-cols-3">
            <?php foreach($Type as $specifics){
                if($specifics == $Type["sektion_".$amount]){
                if($amount == 1){?>
                <div class="py-2 border-dotted border-inherit col-span-2">
                    <p><?php echo $specifics["label"]?></p>
                    <?php if($specifics["underpunkt"]){?>
                    <li><?php echo $specifics["underpunkt"]?></li>
                    <?php }; ?>
                </div>
                <?php } else{?>
                    <div class="py-2 border-t-4 border-inherit col-span-2">
                    <p><?php echo $specifics["label"]?></p>
                    <?php if($specifics["underpunkt"]){?>
                    <li><?php echo $specifics["underpunkt"]?></li>
                    <?php }; ?>
                </div>
                <?php }; if($amount == 1){?>
                    <div class="text-center py-2 h-full border-inherit border-l-4">
                    <p class="bold"><?php echo $specifics["pris"]?>,-</p>
                    <?php if($specifics["underpunkt"]){?>
                    <p class="bold"><?php echo $specifics["underpunkt_pris"]?>,-</p>
                    <?php }; ?>
                </div>
                <?php } else{?>
                <div class="text-center py-2 h-full border-t-4 border-inherit border-l-4">
                    <p class="bold"><?php echo $specifics["pris"]?>,-</p>
                    <?php if($specifics["underpunkt"]){?>
                    <p class="text-bold"><?php echo $specifics["underpunkt_pris"]?>,-</p>
                    <?php }; ?>
                </div>
                <?php } $amount++; } $SecAmnt++; } ?>
            </div>
        </div>
    <?php }?>
    </div>
<?php } ?>

<?php if( have_rows("camping_pris")){ // hvis denne bruppe findes og har underpunkter ?>
<div class="relative bg-slate-50 py-10 px-5 w-9/12 md:w-11/12 lg:w-10/12 m-auto z-10 h-fit">
    <h3 class="w-full text-center text-2xl">Camping:</h3>
    <div class="w-full mx-auto h-fit border-main-brand-color grid grid-cols-4">
        <div class="h-full w-full border-inherit border-0"><p class="h-fit w-fit p-2 m-auto text-center">Datoer:</p></div>
        <div class="h-full w-full border-inherit border-l-4 rounded-t"><p class="h-fit w-fit p-2 m-auto text-center">Voksen:</p></div>
        <div class="h-full w-full border-inherit border-l-4 rounded-t"><p class="h-fit w-fit p-2 m-auto text-center">Børn (0-12):</p></div>
        <div class="h-full w-full border-inherit border-l-4 rounded-t"><p class="h-fit w-fit p-2 m-auto text-center">Pladsgebyr:</p></div>
    <?php while(have_rows("camping_pris")){ the_row(); // så imens den har, gør dette. minder om din post while loop
                $rows = get_row();
                if($rows){
                foreach($rows as $Row){ // laves med en for each, da det er nemmere til anden lag, udgiver en assertive array (eksempel: Array( "number" => 42))
                $Row = array_values($Row); // consitere til simpel array uden at rykke rundt på ting. (eksempel Array(42))
                $dateStart = $Row[0]; // tildel alle disee en varriabel.
                $dateEnd = $Row[1];
                $VoksenPris = $Row[2];
                $BornPris = $Row[3];
                $PladsPris = $Row[4];
                if($dateStart AND $dateEnd AND $VoksenPris AND $BornPris AND $PladsPris){ // check om alle har en value, dereft4er put det ind i disse v hvis de har. ?>
                    <div class="h-full w-full border-inherit border-0 rounded-l border-t-4"><p class="h-fit w-fit pr-2 py-2 m-auto text-center"><?php echo $dateStart." - ".$dateEnd; ?></p></div>
                    <div class="h-full w-full border-inherit border-l-4 border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $VoksenPris ?>,-</p></div>
                    <div class="h-full w-full border-inherit border-l-4 border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $BornPris ?>,-</p></div>
                    <div class="h-full w-full border-inherit border-l-4 rounded-r border-t-4 "><p class="h-fit w-fit p-2 m-auto text-center"><?php echo $PladsPris ?>,-</p></div>
                <?php };};};}; ?>
        </div>
        <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div>
        <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
        </div></div> <?php };?>


    <?php if(have_rows("gaestekort") OR have_rows("malerleje")){ // hvis denne bruppe findes og har underpunkter ?>
    <div class="relative z-10 bg-slate-50 py-10 px-5 w-9/12 md:w-11/12 lg:w-10/12 h-fit m-auto grid grid-cols-1">
    <i class="fa-solid fa-coins text-main-brand-color text-5xl w-fit h-fit mx-auto col-start-1 col-span-2"></i>
    <div class="inline-flex justify-between gap-3 no-wrap w-fit mx-auto">
    <?php if(have_rows("gaestekort")){
    while(have_rows("gaestekort")){ the_row();// så imens den har, gør dette. minder om din post while loop ?>
    <div class="w-full grid grid-cols-1 h-fit">
        <h3 class="w-full text-center text-2xl">Gæstekort:</h3>
        <div class="w-full mx-auto h-fit border-main-brand-color grid grid-cols-1">
            <div class="h-full w-full grid grid-cols-2 rounded-l rounded-r border-inherit"><p class="h-full rounded-l w-fit p-2 m-auto text-center">Helårsplads:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("helarsplads");?>,-</p></div>
            <div class="h-full w-full border-inherit grid grid-cols-2 rounded-l rounded-r border-t-4"><p class="h-full rounded-l w-fit p-2 m-auto text-center">Sæsonplads:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("saesonplads");?>,-</p></div>
            <div class="h-full w-full border-inherit grid grid-cols-2 rounded-l rounded-r border-t-4"><p class="h-full rounded-l w-fit p-2 m-auto text-center">Delsæson:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("delsaeson");?>,-</p></div>
            <div class="h-full w-full border-inherit grid grid-cols-2 rounded-l rounded-r border-t-4"><p class="h-full rounded-l w-fit p-2 m-auto text-center">Dagsgæst:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("dagsgaest");?>,-</p></div>
        </div>
    </div><?php }}; ?>
    <?php if(have_rows("malerleje")){
    while(have_rows("malerleje")){ the_row();// så imens den har, gør dette. minder om din post while loop ?>
    <div class="w-full grid grid-cols-1 h-fit">
        <h3 class="w-full text-center text-2xl h-fit">Målerleje:</h3>
        <div class="w-full mx-auto h-fit border-main-brand-color grid grid-cols-1">
            <div class="h-full w-full grid grid-cols-2 rounded-l rounded-r border-inherit"><p class="h-full w-fit p-2 m-auto text-center">Helårsplads:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("helarsplads");?>,-</p></div>
            <div class="h-full w-full border-inherit grid grid-cols-2 rounded-l rounded-r border-t-4"><p class="h-full w-fit p-2 m-auto text-center">Sæsonplads:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("saesonplads");?>,-</p></div>
            <div class="h-full w-full border-inherit grid grid-cols-2 rounded-l rounded-r border-t-4"><p class="h-full w-fit p-2 m-auto text-center">Delsæson:</p><p class="h-full w-full p-2 m-auto text-center border-inherit rounded-r border-l-4"><?php echo get_sub_field("delsaeson");?>,-</p></div>
        </div>
    </div><?php }}; ?></div>
    <div class="tape tape-left translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
    </div>
    <div class="tape tape-right -translate-x-6 md:translate-x-0">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/tape.svg")); ?>
    </div>
    </div>
    </div> <?php };?>
        
</section>
<?php get_footer() ?>