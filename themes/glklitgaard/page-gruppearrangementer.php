<?php get_header() ?>
<div class="singleact-hero col-span-12">
    <div class="contact-hero-h p-20 lg:p-0 lg:pt-20 absolute h-60">
        <h1 class="text-4xl wrap max-w"><?php the_title() ?></h1>
    </div>
    <img src="<?php echo get_theme_file_uri("/assets/images/gruppehero.png") ?>" alt="" class="w-full object-cover">
</div>
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5 z-10 lg:py-20 lg:pb-20">
    <div class="lg:col-start-2 col-start-2 lg:col-span-6 col-span-10 text-left text-lg mt-10 lg:row-span-5">
        <p>Ønsker i at afholde et større arrangement og overnatte i hytter eller campingvogn, så er Gl. Klitgaard Camping den helt oplagte mulighed.</p>
        <p class="mt-5">Vores pejsestue, som er en ombygget lade, emmer af atmosfære og stemning. Her er plads til hele storfamilien - Lige fra oldefar til oldebarn.</p>
        <p class="mt-5">Skoler, firmaer, idræts- og rideklubber benytter ofte de hyggelige omgivelser til festlige arrangementer og der er plads til alle.</p>
        <p class="mt-5">Vi er gerne behjælpelig med de praktiske detaljer omkring bestilling af mad, udflugtsmål og andre sjove aktiviteter.</p>
        <p class="mt-5">I er altid velkommen til at kontakte os for mere information med henblik på vilkårene omkring gruppearrangementer, priser og andet.</p>
    </div>
    <div class="singleact-paper lg:col-start-9 col-start-2 lg:col-span-4 col-span-11 lg:pt-10 pt-5 lg:pb-10 lg:pl-20 pl-10 grid lg:gap-5 w-full mt-5 lg:mt-0 mb-10 lg:mb-0 lg:row-span-3">
        <h2 class="text-4xl font-normal">Kontakt os her</h2>
        <div>
            <i class="fa-solid fa-phone"></i>
            <a href="tel:+4598996566">+45 98 99 65 66</a>
        </div>
        <div>
            <i class="fa-solid fa-envelope"></i>
            <a href="mailto:camping@gl-klitgaard.dk">camping@gl-klitgaard.dk</a>
        </div>
    </div>
</div>
<div class="h-20 col-span-12 bg-[#F4F4F4] -mt-10 lg:hidden"></div>
<div class="col-span-12 gruppesect h-60 lg:-mt-20 mt-0 z-10 bg-[#F4F4F4]">
    <h2 class="text-4xl text-center mt-32">Her kan du lave dit gruppearrangement</h2>
</div>
<div class="bg-[#F2CD5C] col-span-12 lg:grid-cols-2 grid grid-cols-12 lg:gap-52 gap-10 lg:px-80 px-0 pb-32 -mt-1">
    <div class="bg-white px-5 py-5 grid grid-cols-1 lg:col-span-1 shadow-lg mx-10 col-start-2 col-span-10">
        <img class="aspect-[4/3] object-cover " src="<?php echo get_theme_file_uri("/assets/images/klithuset.jpg") ?>" alt="">
        <h3 class="text-center text-3xl mt-5">Klithuset</h3>
        <a href="" class="mt-5 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold mx-10 text-center">Læs mere</a>
    </div>
    <div class="bg-white px-5 py-5 grid grid-cols-1 lg:col-span-1 shadow-lg mx-10 col-start-2 col-span-10">
        <img class="aspect-[4/3] object-cover" src="<?php echo get_theme_file_uri("/assets/images/pejsestuen.png") ?>" alt="">
        <h3 class="text-center text-3xl mt-5">Pejsesuten</h3>
        <a href="" class="mt-5 knap bg-main-interaction-color px-10 py-2 rounded-full font-bold mx-10 text-center">Læs mere</a>
    </div>

</div>
<?php get_footer() ?>