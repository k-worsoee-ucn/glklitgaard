<?php get_header() ?>
<div class="bookhorse-hero col-span-12 text-center">
    <h1 class="mt-60 text-6xl"><?php echo get_the_title() ?></h1>
</div>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4">
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5">
    <div class="col-start-4 col-span-6 text-center text-lg py-20 mt-10">
        <p>På Gl. Klitgaard camping er vi meget glade for den islandskhest. Vi har en lille flok på omkring 25 heste. som går fordelt på flere af vores mange store folde. Om sommeren kommer nogle ud i klitterne, helt ud til vandet, da det er her de har det bedst om sommeren.</p>
        <p>De fleste af hestene er det muligt at prøve en tur på, hvis du finder en som du synes er særlig sød, kom og prøv ham eller hende i din ferie hos os. De elsker at komme ud i naturen.</p>
    </div>
</div>
<div class="how-to-book-horse col-span-12 py-20 grid grid-cols-12 -mt-10">
    <h2 class="col-span-12 text-5xl text-main-brand-color text-center">Hvordan man booker en ridetur</h2>
    <div class="col-start-2 col-span-4 grid grid-cols-6 row-start-2 row-span-3 mt-20">
        <img src="<?php echo get_theme_file_uri("/assets/svg/horseshoe-single.svg") ?>" alt="" class="col-span-1 col-start-1">
        <p class="text-3xl col-start-2 col-span-5 row-start-1 row-span-2">Kigger på vores aktivitetskalender, for at se om der er nogle relevante ride aktiviteter.</p>
        <a class="row-start-3 col-start-4 col-span-3" href=""><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full font-bold text-xl">Se aktivitetskalenderen</button></a>
    </div>
    <div class="col-start-7 col-span-4 grid grid-cols-6 row-start-4 row-span-3">
        <img src="<?php echo get_theme_file_uri("/assets/svg/horseshoe-single.svg") ?>" alt="" class="col-span-1 col-start-1">
        <p class="text-3xl col-start-2 col-span-5 row-start-1 row-span-2">Skriv i mailen lidt om hvem (navn, alder og erfaring) det er der skal ud at ride. Også gerne et mobiltelefonnr. og skal I bo på pladsen, så henvis til jeres reservation.</p>
        <a class="row-start-3 col-start-4 col-span-3" href=""><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full font-bold text-xl">Kontakt os</button></a>
    </div>
    <div class="col-start-2 col-span-4 grid grid-cols-6 row-start-7 row-span-3">
        <img src="<?php echo get_theme_file_uri("/assets/svg/horseshoe-single.svg") ?>" alt="" class="col-span-1 col-start-1">
        <p class="text-3xl col-start-2 col-span-5 row-start-1 row-span-2">Hvis ikke det er en planlagt aktivitet, så skriv hvornår det kunne passe jer at komme ud at ride. Vi vil forsøge at arrangere noget efter det..</p>
    </div>
    <div class="col-start-7 col-span-4 grid grid-cols-6 row-start-10 row-span-3">
        <img src="<?php echo get_theme_file_uri("/assets/svg/horseshoe-single.svg") ?>" alt="" class="col-span-1 col-start-1">
        <p class="text-3xl col-start-2 col-span-5 row-start-1 row-span-2">Bemærk at der kan være perioder, hvor gæster på campingpladsen foretrækkes frem for dem, som ikke bor på pladsen – Vi håber på forståelse for dette.</p>
    </div>
</div>
<div class="bottom-cta col-span-12 py-32 -mt-5 z-20 grid grid-cols-12">
    <div class="col-start-1 col-span-7 grid grid-cols-11">
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-2 col-span-4 -rotate-6 shadow-lg ">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg1.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-5 col-span-4 rotate-12 shadow-lg">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg2.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        <div class="pt-6 px-6 pb-10 bg-white w-10/12 row-start-1 row-span-1 col-start-8 col-span-4 shadow-lg -ml20 z-10">
            <img src="<?php echo get_theme_file_uri("/assets/images/ctaimg3.png") ?>" alt="" class="w-full h-3/5 object-cover">
        </div>
        
    </div>
    <div class="col-start-8 col-span-4 text-center my-auto">
        <h2 class="text-4xl">Vil du vide mere?</h2>
        <p class="text-lg">Har du spørgsmål til vores hest eller ønsker du at booke en ridetur på en af dem, så du velkommen til at kontakte os.</p>
        <a href="#" class="button"><button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Kontakt os</button></a>
        <h3>Vi håber vi ses på Gl. Klitgaard Camping.</h3>
    </div>
</div>
<?php get_footer() ?>