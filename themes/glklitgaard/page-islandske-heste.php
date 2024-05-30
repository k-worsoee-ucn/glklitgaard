<?php get_header() ?>
<h1 class="col-span-12 mt-40 py-10 text-6xl text-center"><?php the_title() ?></h1>
<img class="col-span-12 w-full" src="<?php echo get_theme_file_uri("/assets/images/solnedgang.png") ?>" alt="">
<div class="rating-sect col-span-12 -mt-10 py-20">
<div class="grid grid-cols-2 gap-10 mt-32 pb-10">
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-1 col-span-1 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo get_site_url() . "/vores-heste" ?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                    ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo get_theme_file_uri("/assets/images/voreshestehref.png"); ?>" alt="">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit">Vores heste</h3>
                <p>Vi har omkring 30 islandske heste. De fleste af hestene er det muligt at prøve en tur på, hvis du finder en som du synes er særlig sød.</p>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto mr-0 inline-flex">
                <a href="<?php echo get_site_url() . "/vores-heste" ?>" class="knap text-center px-3 py-1 mx-auto mt-auto font-semibold">Se vores heste</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                </svg>
            </div>
        </div>
        <div class="drop-shadow bg-yellow-100 grid grid-cols-1 lg:grid-cols-2 md:grid-cols-2 lg:col-start-1 col-span-1 col gap-5 gap-y-15 shadow-sm relative w-10/12 mx-auto mt-20 row-start-2">
            <a class="simple-pic-drop min-h-60 relative -top-5 -left-5 h-2/3 w-auto max-h-20 z-10" href="<?php echo get_site_url() . "/book-ridetur" ?>">
                <div class="absolute w-fit left-1/2 right-1/2 -top-5 -translate-x-1/2 z-20">
                    <?php echo file_get_contents(get_theme_file_uri("/assets/svg/tac.svg")); //henter og indsætter inholdet fra theme mappen/assets/svg/tac 
                    ?>
                </div>
                <img class="drop-shadow-sm h-full min-h-60 md:min-h-52 lg:min-h-40 w-full object-cover" src="<?php echo get_theme_file_uri("/assets/images/bookrideturhref.png");?>" alt="">
            </a>
            <div class="col-start-1 md:col-span-2 lg:col-span-2 h-10 lg:h-6 absolute bg-yellow-800 opacity-20 row-start-1 row-span-1 w-full"></div>
            <div class="mt-40 md:mt-10 lg:mt-7 w-10/12 mx-auto md:mx-0 lg:mx-0 md:min-h-40 lg:min-h-32">
                <h3 class="text-center h-fit">Book ridetur</h3>
                <p>Der er mulighed for at booke en ridetur på nogle af vores skønne islandske heste. Der er mange ting, som er muligt omkring booking af ridetur, og vi har den skønneste natur at ride i. </p>
            </div>
            <div class="lg:col-span-2 md:col-span-2 w-8/12 mx-auto mr-0 inline-flex">
                <a href="<?php echo get_site_url() . "/book-ridetur" ?>" class="knap text-center px-3 py-1 mx-auto mt-auto font-semibold">Se hvordan her</a>
            </div>

            <div class="absolute inline-flex w-full top-full lg:col-span-2 flex-nowrap -mt-0.5">
                <div class="bg-yellow-100 h-10 w-full -mr-0.5 pr-0.5"></div>
                <svg class="h-10 w-10 -rotate-90" width="59" height="57" viewBox="0 0 59 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M58.5 0.819336L58.5 56.5L0.0952523 0.819356L58.5 0.819336Z" class="fill-yellow-200" />
                </svg>
            </div>
        </div>
        <div class="bg-white mx-32 px-10 pb-10 grid row-span-2 -rotate-6">
            <h2 class="text-center text-3xl font-normal py-5">Tag din hest med på ferie</h2>
            <img src="<?php echo get_theme_file_uri("/assets/images/taghest.png") ?>" alt="" class="aspect-square object-cover">
            <p class="text-lg">Som en af de få campingpladser i Danmark tilbyder vi, at man kan tage sin egen hest med på camping - Det være sig i enten kortere eller længere perioder.</p>
            <a href="#" class="knap"><button class="text-center px-3 py-1 mx-auto mt-auto font-semibold">Læs mere her</button></a>
            <img class="absolute -right-12 -top-12" src="<?php echo get_theme_file_uri("/assets/svg/tape_slim.svg") ?>" alt="">
            <img class="absolute -left-12 -bottom-12" src="<?php echo get_theme_file_uri("/assets/svg/tape_slim.svg") ?>" alt="">
        </div>
    </div>
</div>
<?php get_footer() ?>