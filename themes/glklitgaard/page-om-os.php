<?php get_header() ?>
<section class="about-hero col-span-12"></section>
<section class="col-span-12 text-center grid grid-cols-12 pb-20">
    <h1 class="lg:mt-14 mt-10 text-4xl col-span-12">Om os</h1>
    <h1 class="text-secondary-brand-color text-4xl col-span-12">Familien Kallmayer</h1>
    <p class="my-5 lg:col-start-4 lg:col-span-6 col-start-2 col-span-10">I 2005 valgte vores familie at forfølge vores drøm om at drive en campingplads. Efter at have overvejet flere muligheder, fandt vi os selv forelskede i Gl. Klitgaard Camping. Vi forlod vores jobs og kastede os ud i det ukendte.</p>
    <p class="lg:col-start-4 lg:col-span-6 col-start-2 col-span-10">17 år senere er campingpladsen blevet vores hjem og arbejdsplads, hvor vi nyder livet blandt glade mennesker. Vores børn, Jonas, Maja og Emil, har også bidraget til pladsen gennem årene, hvilket har været en berigende oplevelse for os alle.</p>
</section>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4 z-20 hidden lg:block">
<div class="bottom-cta col-span-12 py-32 -mt-8 z-20 grid grid-cols-12">
    <div class="lg:col-start-1 lg:col-span-7 col-start-2 col-span-10 grid lg:grid-cols-11 grid-cols-9">
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-2 col-start-1 lg:col-span-4 col-span-3 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg4.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-5 col-start-4 lg:col-span-4 col-span-3 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg5.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-8 col-start-7 lg:col-span-4 col-span-3 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg6.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>

    </div>
    <div class="lg:col-start-8 lg:col-span-4 col-start-2 col-span-10 text-center my-auto lg:mt-0 mt-10">
        <h2 class="text-4xl">Vil du vide mere?</h2>
        <p class="text-lg">Har du spørgsmål, kommentarer eller feedback? Vi vil elske at høre fra dig!</p>
        <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="knap"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>