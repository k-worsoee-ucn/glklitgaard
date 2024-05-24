<?php get_header() ?>
<main class="grid grid-cols-12 -mt-20">
    <section class="fp-hero col-span-12 text-center text-4xl">
        <h1 class="col-span-12 mt-32">Velkommen til</h1>
        <h1 class="col-span-12 text-secondary-brand-color">Gl. Klitgaard Camping & Hytteby</h1>
    </section>
    <section class="fp-welcome col-span-12 grid grid-cols-12 text-center z-10 pb-16 -mt-5">
        <p class="col-start-4 col-span-6 text-lg mt-12">
            Gl. Klitgaard Camping er en smukt beliggende campingplads ved det dejlige Vesterhav med en skøn strand, perfekt til aktiviteter. Stemningen er afslappet og imødekommende, hvor der er plads til alle. Om du bare vil ud i naturen, ride heste, bare vil deltage i vores aktiviteter eller besøge vores Mini-Zoo.
        </p>
        <p class="col-start-4 col-span-6 text-lg">Vi tilbyder et bredt udvalg af hytter, campingvogne og telte.</p>
        <p class="col-start-4 col-span-6 text-lg mb-12">Vi håber at byde jer velkommen!</p>
    </section>
    <section class="fp-news-container col-start-1 col-span-12 grid grid-cols-12 z-20">
        <img src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="" class="col-start-1 col-span-12 -z-10 row-start-1 row-span-1 w-full -mt-36">
        <div class="fp-news col-start-3 col-span-9 grid grid-cols-10 w-full pb-52 row-start-1 row-span-1">
            <div class="col-span-10 grid grid-cols-10 pt-44">
                <img src="https://unsplash.it/400" alt="" class="col-start-2 col-span-3 bg-white pt-6 px-6 pb-40 -rotate-6 shadow-md row-span-1 row-start-1 w-8/12 mr-28">
                <div class="col-start-5 col-span-4 row-span-1 row-start-1 grid grid-cols-4">
                    <h3 class="text-4xl col-span-4">Kr. Himmelfarts Tilbud</h3>
                    <p class="col-span-4 text-lg">Vi vil gerne give muligheden for jer og jeres nærmeste til at nyde de dejlige nye sommer dage og helligdage sammen i den dejlige natur, i nærheden af det kølige Vesterhav for at have mulighed for at køle ned.</p>
                    <p class="col-span-4 text-lg">Alle tilbuddene er gældende fra d. 8. maj til d. 12. maj 2024. </p>
                    <a href="#" class="col-start-2 col-span-2 w-9/12"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere</button></a>
                </div>
            </div>
            <div class="col-span-10 grid grid-cols-10 pt-28">
                <img src="https://unsplash.it/400" alt="" class="col-start-6 col-span-3 bg-white pt-6 px-6 pb-40 rotate-6 shadow-md row-span-1 row-start-1 w-8/12 ml-28">
                <div class="col-start-2 col-span-4 row-span-1 row-start-1 grid grid-cols-4">
                    <h3 class="text-4xl col-span-4">Kr. Himmelfarts Tilbud</h3>
                    <p class="col-span-4 text-lg">Vi vil gerne give muligheden for jer og jeres nærmeste til at nyde de dejlige nye sommer dage og helligdage sammen i den dejlige natur, i nærheden af det kølige Vesterhav for at have mulighed for at køle ned.</p>
                    <p class="col-span-4 text-lg">Alle tilbuddene er gældende fra d. 8. maj til d. 12. maj 2024. </p>
                    <a href="#" class="col-start-2 col-span-2 w-9/12"><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere</button></a>
                </div>
            </div>
        </div>
    </section>
    <section class="col-span-12 grid grid-cols-12 fam-kallmayer -mt-10 z-20">
        <img src="<?php echo get_theme_file_uri("/assets/images/famkallmayer.png") ?>" alt="" class="col-span-6 -mt-20 w-full">
        <div class="col-span-6 mx-10 text-center grid grid-rows-5 fam-wave">
            <h2 class="text-4xl font-normal row-start-1 mt-28">Vi er Familien Kallmayer</h2>
            <div class="row-start-2 text-lg">
                <p>
                    I 2005 valgte vores familie at forfølge vores drøm om at drive en campingplads. Efter at have overvejet flere muligheder, fandt vi os selv forelskede i Gl. Klitgaard Camping. Vi forlod vores jobs og kastede os ud i det ukendte.
                </p>
                <p class="mt-10">
                17 år senere er campingpladsen blevet vores hjem og arbejdsplads, hvor vi nyder livet blandt glade mennesker. Vores børn, Jonas, Maja og Emil, har også bidraget til pladsen gennem årene, hvilket har været en berigende oplevelse for os alle.
                </p>
            </div>
            <div class="row-start-3 mt-10">
                <a href=""><button class="bg-main-interaction-color px-10 py-2 rounded-full mx-auto">Læs mere om os</button></a>
            </div>
            <h3 class="row-start-4 mx-auto font-bold">Vi håber vi ses på Gl. Klitgaard Camping.</h3>
        </div>
    </section>
    <section class="col-span-12">
        <h2 class="row-start-1 row-span-1 col-span-5 text-center text-4xl font-normal">Kommende vejr</h2>
        <div class="forecastContainer grid gap-10 mx-40 grid-cols-6"></div>
    </section>
</main>
<?php get_footer() ?>