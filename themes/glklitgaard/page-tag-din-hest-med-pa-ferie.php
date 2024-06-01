<?php get_header() ?>
<section class="hestpaaferie-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-32 text-6xl"><?php the_title() ?></h1>
</section>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5 pb-56">
    <div class="col-start-4 col-span-6 text-center text-lg py-20 mt-10">
        <p>Som en af de få campingpladser i Danmark tilbyder vi, at man kan tage sin egen hest med på camping - Det være sig i enten kortere eller længere perioder.</p>
    </div>
    <div class="col-span-12 grid grid-cols-3 gap-10 mx-10">
        <div class="bg-white px-10 pt-10 pb-20 col-start-1 w-9/12 shadow-lg -rotate-12 grid text-center ml-20 z-10">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/folde.png") ?>" alt="">
            <h2 class="text-4xl mt-10">Folde</h2>
            <p class="text-lg">pr. overnatning pr. hest 75,-</p>
        </div>
        <div class="bg-white px-10 pt-10 pb-20 col-start-2 w-9/12 shadow-lg rotate-12 grid text-center -ml-10">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/bokse.png") ?>" alt="">
            <h2 class="text-4xl mt-10">Bokse</h2>
            <p class="text-lg">pr. overnatning pr. hest 150,-</p>
        </div>
        <p class="text-xl mr-40 my-auto">Din hest kommer til at gå på fold alene, eller hvis du har flere heste med, kan de gå på en lidt større fold sammen. Der er også et begrænset antal bokse til rådighed.</p>
    </div>
</div>
<section class="col-span-12 py-40 weatherAndActivities  z-20 grid grid-cols-12 -mt-64">
    <i class="fa-solid fa-caret-left text-8xl col-span-1 m-auto text-brand-lightgreen hover:cursor-pointer hover:text-brand-darkgreen slideLeft"></i>
    <h2 class="row-start-1 col-span-12 text-center text-4xl font-normal mt-20">Ruter</h2>
    <div class="col-start-2 col-span-6 grid grid-cols-8">
        <img src="<?php echo get_theme_file_uri("assets/images/rute1.png") ?>" alt="" class="imgMask row-start-1 row-span-4 col-start-1 col-span-6 routeImg1">
        <img src="<?php echo get_theme_file_uri("/assets/images/rute1-sub.png") ?>" alt="" class="imgMask row-start-3 row-span-3 col-start-5 col-span-4 z-10 ml-10 routeImg2">
    </div>
    <div class="col-start-9 col-span-3 text-center px-20 mt-28">
        <h3 class="text-3xl font-normal mb-5 routeTitle">Stranden</h3>
        <p class="text-lg routeText">En af vores populære ruter er på stranden, hvor der er massere af plads  og mulighed for at ride hele vejen til Løkken eller endda endnu længere. Går du med drømmen om at bade sammen med din hest, så er muligheden her - Du skal bare gribe den.</p>
    </div>
    <i class="fa-solid fa-caret-right text-8xl col-span-1 m-auto text-brand-lightgreen hover:cursor-pointer hover:text-brand-darkgreen"></i>
</section>
<?php get_footer() ?>