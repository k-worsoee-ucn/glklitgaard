<?php get_header() ?>
<section class="glk-hero col-span-12 text-center text-4xl">
    <h1 class="col-span-12 mt-32">Velkommen til</h1>
    <h1 class="col-span-12 text-secondary-brand-color">Gl. Klitgaard Camping & Hytteby</h1>
</section>
<img src="<?php echo get_theme_file_uri("/assets/images/sol.png") ?>" alt="" class="col-span-1 absolute top-2/4 z-20">
<div class="col-span-12 grid grid-cols-12 horse-intro -mt-5 pb-20 ">
    <div class="col-start-4 col-span-6 text-center text-lg py-20 mt-10">
        <div class="bg-white">
            <h2>Udregn Din Pris</h2>
        </div>
    </div>
    <h2 class="col-span-12 text-center text-3xl mb-10">Pris på hytter</h2>
    <div class=" col-start-4 col-span-6 grid grid-cols-6">
        <table class="priceTable border-main-brand-color border-solid border col-span-1">
            <tr>
                <th>Datoer</th>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>1/1 - 29/6</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>29/6 - 6/7</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>6/7 - 13/7</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>13/7 - 3/8</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>3/8 - 10/8</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>10/8 - 17/8</td>
            </tr>
            <tr class="border-main-brand-color border-solid border">
                <td>17/8 - 31/12</td>
            </tr>
        </table>
        <?php
        $Prices = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'Priser',
            'order' => 'ASC'
        ));

        while ($Prices->have_posts()) {
            $Prices->the_post();
            $title = get_the_title();
            if ($title == "K5" || $title == "L5" || $title == "A5" || $title == "A45" || $title == "AA45") { ?>
                <table class="priceTable border-main-brand-color border-solid border col-span-1">
                    <tr class="border-main-brand-color border-solid border">
                        <th class="tableIcon"><?php the_field("icon") ?></th>
                        <th class="tableHeader"><?php the_title() ?></th>
                    </tr>
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                        $price_per_day = get_field('price_per_day')['date_range_' . $i];
                        $price_per_week = get_field('price_per_week')['date_range_' . $i];

                        if ($price_per_day && $price_per_week) { ?>
                            <tr class="border-main-brand-color border-solid border">
                                <td><?php echo $price_per_day; ?></td>
                                <td><?php echo $price_per_week; ?></td>
                            </tr>
                    <?php }
                    }
                    ?>
                </table>
            <?php
            } else if ($title == "Klithuset") {
            ?>
                <table class="priceTable border-main-brand-color border-solid border col-span-1">
                    <tr>
                        <th>Datoer</th>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>1/1 - 29/6</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>29/6 - 6/7</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>6/7 - 13/7</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>13/7 - 3/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>3/8 - 10/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>10/8 - 17/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>17/8 - 31/12</td>
                    </tr>
                </table>
                <table class="">
                    <tr class="border-main-brand-color border-solid border">
                        <th class="tableIcon"><?php the_field("icon") ?></th>
                        <th class="tableHeader"><?php the_title() ?></th>
                    </tr>
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                        $price_per_day = get_field('price_per_day')['date_range_' . $i];
                        $price_per_week = get_field('price_per_week')['date_range_' . $i];

                        if ($price_per_day && $price_per_week) { ?>
                            <tr class="border-main-brand-color border-solid border">
                                <td><?php echo $price_per_day; ?></td>
                                <td><?php echo $price_per_week; ?></td>
                            </tr>
                    <?php }
                    }
                    ?>
                </table>
            <?php
            } else if ($title == "Luksus Telt" || $title == "Luksus CV") {
            ?>
                <table class="priceTable border-main-brand-color border-solid border col-span-1 col-start-4">
                    <tr>
                        <th>Datoer</th>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>1/1 - 29/6</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>29/6 - 6/7</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>6/7 - 13/7</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>13/7 - 3/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>3/8 - 10/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>10/8 - 17/8</td>
                    </tr>
                    <tr class="border-main-brand-color border-solid border">
                        <td>17/8 - 31/12</td>
                    </tr>
                </table>
                <table class="">
                    <tr class="border-main-brand-color border-solid border">
                        <th class="tableIcon"><?php the_field("icon") ?></th>
                        <th class="tableHeader"><?php the_title() ?></th>
                    </tr>
                    <?php
                    for ($i = 1; $i <= 7; $i++) {
                        $price_per_day = get_field('price_per_day')['date_range_' . $i];
                        $price_per_week = get_field('price_per_week')['date_range_' . $i];

                        if ($price_per_day && $price_per_week) { ?>
                            <tr class="border-main-brand-color border-solid border">
                                <td><?php echo $price_per_day; ?></td>
                                <td><?php echo $price_per_week; ?></td>
                            </tr>
                    <?php }
                    }
                    ?>
                </table>
            <?php
            }
        }
        ?>
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