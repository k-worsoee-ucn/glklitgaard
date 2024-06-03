<?php get_header() ?>
<section class="hestpaaferie-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-32 text-6xl"><?php the_title() ?></h1>
</section>
<div class="col-span-12 grid grid-cols-12 -mt-32 w-full">
    <div class="col-span-12 text-center text-lg py-20 mt-10 horse-intro grid grid-cols-12">
        <p class=" col-start-4 col-span-6">Som en af de få campingpladser i Danmark tilbyder vi, at man kan tage sin egen hest med på camping - Det være sig i enten kortere eller længere perioder.</p>
    </div>
    <div class="col-span-12 grid lg:grid-cols-3 grid-cols-2 lg:gap-10 gap-5 px-10 pb-20 bg-[#F4F4F4] grid-rows-4 lg:grid-rows-1">
        <div class="foldContainer bg-white lg:px-5 px-2 lg:pt-10 pt-2 lg:pb-20 pb-5 col-start-1 lg:w-9/12 w-full shadow-lg -rotate-12 grid text-center lg:ml-20 ml-5 z-10 row-start-1 row-span-2 lg:row-span-1 lg:row-start-1">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/folde.png") ?>" alt="">
            <h2 class="lg:text-4xl text-2xl lg:mt-10">Folde</h2>
            <p class="lg:text-lg">pr. overnatning pr. hest 75,-</p>
        </div>
        <div class="boksContainer bg-white lg:px-10 px-2 lg:pt-10 pt-2 lg:pb-20 pb-5 col-start-2 lg:w-9/12 w-full shadow-lg rotate-12 grid text-center lg:-ml-10 ml-5 row-start-2 row-span-2 lg:row-span-1 lg:row-start-1">
            <img class="aspect-square object-cover" src="<?php echo get_theme_file_uri("/assets/images/bokse.png") ?>" alt="">
            <h2 class="lg:text-4xl text-2xl lg:mt-10">Bokse</h2>
            <p class="lg:text-lg">pr. overnatning pr. hest 150,-</p>
        </div>
        <p class="text-xl lg:mr-40 my-auto lg:col-span-1 col-span-2">Din hest kommer til at gå på fold alene, eller hvis du har flere heste med, kan de gå på en lidt større fold sammen. Der er også et begrænset antal bokse til rådighed.</p>
        <div class="bg-[#F4F4F4] h-56"></div>
    </div>
</div>
<section class="col-span-12 py-40 weatherAndActivities z-20 grid grid-cols-12 -mt-96">
    <svg class="fill-brand-lightgreen w-full my-auto slideLeft row-start-2 row-span-1 col-start-1 col-span-1"><?php echo file_get_contents(get_theme_file_uri("/assets/svg/caret-left-solid.svg")) ?></svg>
    <h2 class="row-start-1 col-span-12 text-center text-4xl font-normal lg:mt-20 mt-40">Ruter</h2>
    <div class="col-start-2 lg:col-span-6 col-span-10 grid grid-cols-8 lg:grid-rows-5">
        <img src="<?php echo get_theme_file_uri("assets/images/rute1.png") ?>" alt="" class="imgMask w-full lg:row-start-1 lg:row-span-4 lg:col-start-1 lg:col-span-6 col-start-1 col-span-8 routeImg1">
        <img src="<?php echo get_theme_file_uri("/assets/images/rute1-sub.png") ?>" alt="" class="imgMask w-full lg:row-start-3 lg:row-span-3 lg:mt-16 lg:col-start-5 col-start-2 lg:col-span-4 col-span-6 z-10 lg:ml-10 routeImg2">
    </div>
    <div class="lg:col-start-9 col-start-2 lg:col-span-3 col-span-10 text-center px-20 lg:mt-28">
        <h3 class="text-3xl font-normal mb-5 routeTitle">Stranden</h3>
        <p class="text-lg routeText">En af vores populære ruter er på stranden, hvor der er massere af plads og mulighed for at ride hele vejen til Løkken eller endda endnu længere. Går du med drømmen om at bade sammen med din hest, så er muligheden her - Du skal bare gribe den.</p>
    </div>
    <svg class="fill-brand-lightgreen w-full my-auto slideRight row-start-2 row-span-1 col-start-12 col-span-1 "><?php echo file_get_contents(get_theme_file_uri("/assets/svg/caret-right-solid.svg")) ?></svg>
</section>
<section class="wave-sect col-span-12 grid grid-cols-12 pt-20 bg-[#F4F4F4]">
    <div class="lg:col-start-2 col-start-2 lg:col-span-5 col-span-10 grid grid-cols-5 grid-rows-1">
        <div class="rectRip p-10 lg:col-span-3 lg:col-start-1 col-start-1 col-span-12 lg:row-start-1 lg:row-span-1 row-start-2 row-span-1 lg:-mt-0 -mt-72">
            <h3 class="lg:mr-40 text-2xl lg:text-left text-center lg:mt-0 mt-5">Hytter</h3>
            <p class="lg:mr-40 my-10">Vi har 24 hytter, som står klar til at huse jer alle og har I brug for viden omkring området, så er det kun at spørge os til råds.</p>
            <a href="" class="mt-5 ml-20 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold text-lg mr-30">Se hytter</a>
        </div>
        <img src="<?php echo get_theme_file_uri("/assets/images/HytterImg.png") ?>" alt="" class="rectImgRip lg:col-start-3 col-start-2 lg:col-span-2 col-span-5 row-start-1 row-span-1 z-10 lg:mt-14">
    </div>
    <div class="lg:col-start-8 col-start-1 -ml-5 lg:-ml-0 lg:col-span-5 col-span-10 grid grid-cols-5 row-start-2 grid-rows-1 lg:-mt-32">
        <div class="rectRip p-10 lg:col-span-3 lg:col-start-1 col-start-1 col-span-12 lg:row-start-1 row-start-2 row-span-1 lg:-mt-0 -mt-72">
            <h3 class="lg:mr-40 text-2xl lg:text-left text-center lg:mt-0 mt-5">Rideklubben på tur</h3>
            <p class="lg:mr-40 my-10">Er det hele rideklubben, som skal på tur, så er det heller ikke noget problem. I er meget velkommen til at kontakte os og høre mere.</p>
            <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="lg:mt-5 ml-20 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold text-lg mr-30">Kontakt os</a>
        </div>
        <img src="<?php echo get_theme_file_uri("/assets/images/HytterImg.png") ?>" alt="" class="rectImgRip lg:col-start-3 col-start-2 lg:col-span-2 col-span-5 row-start-1 row-span-1 z-10 lg:mt-14">
    </div>
    <div class="lg:col-start-2 col-start-2 lg:col-span-5 col-span-10 grid grid-cols-5 row-start-3 grid-rows-1 lg:-mt-32">
        <div class="rectRip p-10 lg:col-span-3 lg:col-start-1 col-start-1 col-span-12 lg:row-start-1 row-start-2 row-span-1 lg:-mt-0 -mt-72">
            <h3 class="lg:mr-40 text-2xl lg:text-left text-center lg:mt-0 mt-5">Fastligger</h3>
            <p class="lg:mr-40 my-2 mb-3">Som fastligger kan du også have din hest med. Du betaler et beløb pr. hest, så kan du frit medbringe hesten henover hele sæsonen. Har du flere heste med, så falder prisen for disse efterfølgende heste.</p>
            <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="mt-5 ml-20 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold text-lg mr-30">Kontakt os</a>
        </div>
        <img src="<?php echo get_theme_file_uri("/assets/images/HytterImg.png") ?>" alt="" class="rectImgRip lg:col-start-3 col-start-2 lg:col-span-2 col-span-5 row-start-1 row-span-1 z-10 lg:mt-14">
    </div>
</section>
<section class="col-span-12 bg-[#F4F4F4]">
    <h2 class="text-4xl text-center py-10">Ovalbane</h2>
    <img src="<?php echo get_theme_file_uri("/assets/images/ovalbane.png") ?>" alt="" class="w-full object-cover ovalbaneImg">
    <div class="grid lg:grid-cols-12 py-20">
        <p class="lg:col-start-3 lg:col-span-3 lg:mx-0 mx-10 my-5 lg:my-0">Ovalbanen er lavet med en solid base af Stabilgrus og "Dansk Stenmel", hvilket sikrer optimale forhold. Med 6 lysmaster kan du nyde ridning selv når mørket falder på. Banen rummer en 20 x 60 meter ridebane samt en rondel på 14 meter midt på banen.</p>
        <p class="lg:col-start-8 lg:col-span-3 lg:mx-0 mx-10 my-5 lg:my-0">Udover almindelig brug tilbyder vi muligheden for at leje banen til stævner, kurser, undervisning og mere. Og for vores campister er banen åben til brug, medmindre den er udlejet eller i brug af campingpladsen til undervisning.</p>
    </div>
</section>
<div class="bottom-cta col-span-12 py-32 -mt-8 z-20 grid grid-cols-12">
    <div class="lg:col-start-1 lg:col-span-7 col-start-2 col-span-10 grid lg:grid-cols-11 grid-cols-9">
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-2 col-start-1 lg:col-span-4 col-span-3 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg1.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-5 col-start-4 lg:col-span-4 col-span-3 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg2.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="lg:pt-6 lg:px-6 lg:pb-10 px-2 pt-2 bg-white lg:w-10/12 w-full row-start-1 row-span-1 lg:col-start-8 col-start-7 lg:col-span-4 col-span-3 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg3.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>

    </div>
    <div class="lg:col-start-8 lg:col-span-4 col-start-2 col-span-10 text-center my-auto lg:mt-0 mt-10">
        <h2 class="text-4xl">Spørgsmål?</h2>
        <p class="text-lg">Har du spørgsmål eller en forespørgsel, så er er du meget velkommen til at kontakte os og høre mere.</p>
        <a href="<?php echo get_site_url() . "/kontakt-os" ?>" class="knap"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>