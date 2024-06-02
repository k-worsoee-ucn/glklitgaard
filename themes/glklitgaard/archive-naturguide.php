<?php get_header(); ?>
<section class="w-full h-fit min-h-96 relatvie">
    <h1 class="text-4xl text-center pt-4 w-full"><?php echo post_type_archive_title( '', false );?></h1>
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
<section class="h-1/4 bg-gray-200 relative w-full">
    <div class="relative w-1/5 ml-10 mr-auto mt-72 z-20">
        <div class="m-4"><h2 class="text-center text-3xl">Oplev den smukkeste strand</h2>
        <p class="w-full text-xl text-center">...Hvis vi selv skulle sige det.</p>
        <p>Vores campingplads ligger 400 m fra stranden, hvor der hvert år bliver sat en trappe op. Der er også mulighed for at køre på stranden, ved Nr. Lyngbys nedkørsel.</p>
        <p>Vores skønne strand er bred og med klart lækkert vand. Derudover kan man opleve den smukkeste solnedgang.</p>
        </div>
        <div class="absolute w-full h-full top-0 left-0 -z-10">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/logo-paper.svg"));?>
        </div>
    </div>
    <img class="absolute top-0 h-full w-full object-cover object-top z-10" src="<?php echo get_theme_file_uri("/assets/images/newsbg.png")?>" alt="Solnedgangen tager endgelig fat, da solen kun er få meter over vandet">
</section>
<section>
<div class="paper-crumb absolute -top-6 h-full w-full">
    <img class="w-full h-6 object-cover object-top opacity-90" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
    <img class="w-full h-full object-cover opacity-35" src="<?php echo get_theme_file_uri("/assets/images/crumpled-paper.jpg"); ?>" alt="krøllet papir texture">
</div>
<h2 class="text-center w-full mt-10 mb-3">Biodiversitet</h2>
<p class="text-center mx-auto w10/12 md:w-9/12 lg:w-8/12">Naturen omkring Nr. Lyngby er også rig på biodiversitet. På de frodige klitter og i det omkringliggende landskab kan man opleve et rigt dyreliv, herunder sjældne fuglearter og spændende flora. Området er ideelt til fugleobservation, særligt under trækruterne om foråret og efteråret.</p>
</section>

<?php get_footer(); ?>