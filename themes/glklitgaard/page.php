<?php get_header(); $content = get_the_content(); // fjerner alle tags, undtaget img
        $pattern = "/<img.*?src[^\>]+>/"; // REGEX til at finde billede ?>
<section class="bg-gray-200 wavey-section z-10 grid-cols-1 grid md:grid-cols-2 w-full pt-16 pb-10 relative overflow-hidden">
<img class="paper-overlay relative left-0 scale-110 md:-left-32 lg:-left-16 md:-top-12 w-full md:scale-150 object-center object-cover" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php get_the_title(); ?>">
<?php if(has_post_thumbnail()){?>
            <div class="w-10/12 md:w-9/12 ml-auto mr-10 mt-4">
            <h1 class="text-center text-4xl w-full mb-4"><?php echo get_the_title() ?></h1>
            <?php if(preg_match($pattern, $content)){
                echo preg_replace($pattern,"",$content);
            } else{ echo get_the_content(); }; ?>
        </div>
<?php } else{?>
    <div class="mx-auto py-10 w-10/12 md:w-8/12 lg:w-6/12">
            <?php if(preg_match($pattern, $content)){
                echo preg_replace($pattern,"",$content);
            } else{ echo get_the_content(); }; ?>
    </div>
<?php }?>
    <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <?php $title = strtolower(get_the_title());?>
    </section>
    <?php 
    
    if(str_contains($title, "turist") OR str_contains($title, "turister") OR str_contains($title, "fastligger")){ ?>
    <section class="relative w-full h-fit bg-yellow-100">
    <div class="h-fit w-full rip fill-gray-200 absolute top-0 z-20">
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="absolute h-full w-full">
        <img class="opacity-25 absolute h-full w-full" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg")?>">
    </div>
        <?php $priser = new WP_Query(array(
        'posts_per_page'    => 1,
        'post_type' => "page",
        'pagename' => 'vores-priser',
    )); 
    while($priser->have_posts()){ $priser->the_post();
        if( have_rows("camping_pris")){ // hvis denne bruppe findes og har underpunkter ?>
            <div class="relative flex flex-col flex-nowrap justify-center bg-slate-50 py-10 z-20 px-5 w-9/12 md:w-7/12 lg:w-5/12 mx-auto mt-20 mb-10 h-fit">
                <i class="fa-solid fa-coins text-main-brand-color text-5xl w-fit h-fit mx-auto"></i>
                <h3 class="w-full text-center text-2xl">Pris:</h3>
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
                    </div>
                </div>
                <a href="<?php echo get_site_url("/vores-priser");?>" class="knap relative z-20 flex w-fit col-start-2 text-center px-3 py-1 mx-auto mt-auto font-semibold mb-16">Se alle vores priser</a>
            <div class="h-fit w-full rip fill-gray-200 absolute -bottom-6 z-20 rotate-180">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
            </section>
<?php }}}; wp_reset_postdata();
if(str_contains($title, "turist") OR str_contains($title, "turister")){ ?>
<section class="bg-gray-200 wavey-section z-10 w-full pt-16 pb-2 relative">
    <div class="h-fit w-full rip fill-gray-200 absolute top-full z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <h2 class="text-3xl text-center mb-6">Skal vi opleve noget?</h2>
    <?php if(has_excerpt()){ ?><div class="w-10/12 md:w-8/12 lg:w-6/12 mx-auto mb-4" ><?php echo get_the_excerpt(); ?></div> <?php } ?>
    <?php $Sted = new WP_Query(array(
    'posts_per_page'    => 3,
    'orderby'    => "meta_key=kilometer_vaek", //find værdien på hvor langt væk stedet er
    'post_type' => "Sevaerdigheder",
    'order' => 'ASC', // og sorter efter afstand, fra lavest til højest.
));?>
    <div class="w-10/12 flex flex-wrap md:flex-nowrap justify-center md:justify-around gap-5 flex-col md:flex-row relative mx-auto mb-10"><?php if($Sted->have_posts()){
        while($Sted->have_posts()){
            $Sted->the_post()?>
        <div class="lg:w-3/12 md:w-4/12 w-8/12 mx-auto bg-slate-50 p-3">
            <img class="w-full h-auto max-h-40 object-cover object-center" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title(); ?>">
            <h3 class="text-center text-lg my-4" ><?php echo get_the_title(); ?></h3>
            <?php if(get_field("kilometer_vaek")){ ?>
            <p>Distance: <?php echo get_field("kilometer_vaek")?>Km væk</p> <?php }; ?>
        </div>
        <?php }} ?></div>
        <a href="<?php echo get_post_type_archive_link("Sevaerdigheder");?>" class="knap relative z-20 flex w-fit col-start-2 text-center px-3 py-1 mx-auto mt-auto font-semibold mb-16">Se andre sædverdigheder i nærheden</a>
</section>
<?php }; wp_reset_postdata();
if(str_contains($title, "fastligger")){ ?>
<section class="bg-gray-200 wavey-section z-10 w-full pt-16 pb-2 relative">
    <div class="h-fit w-full rip fill-gray-200 absolute top-full z-20">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
    <div class="Waves absolute top-5 h-fit overflow-x-hidden w-full -z-10 ease-linear duration-150">    
            <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Wave.svg")); ?>
    </div>
    <h2 class="text-3xl text-center mb-6">Vil du bare slappe af og nyde det grønne?</h2>
    <?php if(has_excerpt()){ ?><div class="w-10/12 md:w-8/12 lg:w-6/12 mx-auto mb-4" ><?php echo get_the_excerpt(); ?></div> <?php } ?>
    <?php $Natur = new WP_Query(array(
    'posts_per_page'    => 3,
    'orderby'    => "title", //find værdien på hvor langt væk stedet er
    'post_type' => "Naturguide",
    'order' => 'ASC', // og sorter efter afstand, fra lavest til højest.
));?>
    <div class="w-10/12 flex flex-nowrap justify-around gap-5 flex-col md:flex-row relative mx-auto mb-10"><?php if($Sted->have_posts()){
        while($Natur->have_posts()){
            $Natur->the_post()?>
        <div class="w-3/12 bg-slate-50 p-3">
            <img class="w-full h-auto max-h-40 object-cover object-center" src="<?php echo get_the_post_thumbnail_url()?>" alt="<?php echo get_the_title(); ?>">
            <h3 class="text-center text-lg my-4" ><?php echo get_the_title(); ?></h3>
            <?php if(get_field("dyre_type")){ ?>
            <p>Se <?php echo get_field("dyre_type")?> af forskellige slags her</p><?php }; ?>
        </div>
        <?php }} ?></div>
        <a href="<?php echo get_post_type_archive_link("Naturguide");?>" class="knap relative z-20 flex w-fit col-start-2 text-center px-3 py-1 mx-auto mt-auto font-semibold mb-16">Se andre sædverdigheder i nærheden</a>
</section>
<?php }; wp_reset_postdata();?>

<section class="relative w-full h-full overflow-hidden">
<img class="absolute w-full h-full object-cover object-center scale-150" src="<?php echo get_theme_file_uri("/assets/images/solnedgang-baggrund.jpg")?>" alt="Den vidunderlige solnedgang som set fra den nærliggende strand">
    <div class="drop-shadow-md relative mt-72 lg:w-6/12 md:w-8/12 w-10/12 mx-auto">
            <div class="bg-yellow-100 w-full h-fit flex flex-col gap-10 px-5 lg:px-10 py-3">
                <h2 class="text-center text-3xl pt-10">Skal vi være din nye desintation?</h2>
                <a href="<?php echo get_post_type_archive_link("udlejning");?>" class="knap text-center px-3 py-1 mx-auto mb-16 font-semibold">Se vores udlejnings muligheder</a>
            </div>
            <div class="h-5 w-full paper-rip absolute left-0 -top-5 rotate-180">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
            </div>
        </div>
</section>

<?php get_footer();?>