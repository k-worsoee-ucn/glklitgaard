</main>
<footer class="grid grid-cols-12 z-10">
    <?php wp_footer(); ?>
    <img src="<?php echo get_theme_file_uri("/assets/svg/dragon-scales.svg") ?>" alt="" class="w-full col-start-1 col-span-12 row-span-1 row-start-1 -mt-40">
    <div class="footer-contact row-start-1 row-span-1 col-start-2 col-span-3">
        <h2 class="text-white text-4xl">Kontakt</h2>
        <div class="text-white text-lg mt-5">
            <p>Gl. Klitgaard Camping & Hytteby</p>
            <p>Lyngbyvej 331, 9480 Løkken</p>
        </div>
        <div class="grid grid-cols-8 gap-2 text-lg text-white mt-5">
            <i class="fa-solid fa-phone col-start-1 col-span-1 mt-auto"></i>
            <p class="col-start-2 col-span-5">+45 98 99 65 66</p>
            <i class="fa-solid fa-envelope col-start-1 col-span-1 mt-auto"></i>
            <p class="col-start-2 col-span-5">camping@gl-klitgaard.dk</p>
        </div>
    </div>
    <div class="footer-logo-container row-start-1 row-span-1 col-start-5 col-span-4 z-10">
        <img src="<?php echo get_theme_file_uri("/assets/logos/glklitgaard.png") ?>" alt="" class="mx-auto mt-6">
        <div class="grid grid-cols-3 mx-28 mt-5">
            <img src="<?php echo get_theme_file_uri("/assets/logos/tripadvisor.png") ?>" alt="" class="m-auto w-3/4">
            <img src="<?php echo get_theme_file_uri("/assets/logos/facebook.png") ?>" alt="" class="m-auto w-3/4">
            <img src="<?php echo get_theme_file_uri("/assets/logos/instagram.png") ?>" alt="" class="m-auto w-3/4">
        </div>
    </div>
    <div class="footer-nav col-start-10 col-span-2 row-start-1 row-span-1">
        <ul class="text-right text-white text-lg">
            <li><a class="hover:underline" href="#">NAV POINT</a></li>
            <li><a class="hover:underline" href="#">NAV POINT</a></li>
            <li><a class="hover:underline" href="#">NAV POINT</a></li>
            <li><a class="hover:underline" href="#">NAV POINT</a></li>
            <li><a class="hover:underline" href="#">NAV POINT</a></li>
        </ul>
    </div>
</footer>
</body>