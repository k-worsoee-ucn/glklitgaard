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
</main>
<?php get_footer() ?>