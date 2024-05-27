<!DOCTYPE html>
<html class="m-0">

<head>
    <meta charset="<?php bloginfo("charset") ?>">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?> class="w-full">

    <header class="grid grid-cols-12 grid-rows-1 z-50 fixed h-fit drop-shadow-md w-full">
        <div class=" opacity-90 col-span-12 col-start-1 row-start-1 row-span-1 bg-gradient-to-r from-brand-lightgreen to-brand-darkgreen -z-10"></div>
        <div class="col-start-1 col-span-2 row-start-1">
            <a href="<?php echo site_url() ?>" class="header-logo grid grid-rows-1">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/logo-paper.svg"));?>
                <img src="<?php echo get_theme_file_uri("/assets/logos/glklitgaard.png") ?>" alt="Gl. Klitgaard logo" class="logo z-10 w-9/12 h-auto max-h-20 align-center row-span-1 row-start-1 col-start-1 col-span-1 object-contain">
            </a>
        </div>
        <nav class="row-span-1 row-start-1 overflow-hidden inline-flex flex-wrap justify-center col-start-3 col-span-8">
            <div class="dropdown float-left overflow-hidden inline-block border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Praktisk info
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Camping Turister</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Vores Hytter</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Fastligger</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Dyr med på camping</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Gruppearrangementer</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Pladskort</a>
                </div>
            </div>
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Udlejning
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Luksushytter 45kvm</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Luksushytter 25kvm</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Hytter med toilet og bad (L5)</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Hytter uden toilet og bad (K5)</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Klithuset</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Luksus campingvogn</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Luksustelt med trægulv</a>
                </div>
            </div>
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Islandske heste
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Vores heste</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Book ridetur</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Tag din hest med på ferie</a>
                </div>
            </div>
            <a href="#" class="float-left text-black text-center px-4 py-3 my-3 no-underline hover:bg-main-brand-color hover:text-white ">Aktivitetskalender</a>
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Oplevelser
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Naturguide</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Seværdigheder</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Feriebyer</a>
                </div>
            </div>
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Faciliteter
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Minizoo</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Swimmingpool</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Køkken og udekøkken</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Baderum og toiletter</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Butik og information</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Pejsestuen</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Legepladser og sport</a>
                </div>
            </div>
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
                <button class="drop-btn border-none outline-none bg-inherit m-0 px-4 py-3 group-hover:bg-main-brand-color group-hover:text-white">Priser
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content hidden absolute min-w-40 z-10 shadow-lg group-hover:block">
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Tilbud</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Vores priser</a>
                    <a href="#" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Betal online</a>
                </div>
            </div>
            <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));//ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>"
            class="knap md:hidden text-center px-3 py-1 mx-auto mt-auto font-semibold col-start-11 col-span-2">Book nu</a>
        </nav>
        <div class="col-start-11 col-span-2 w-full my-auto relative row-start-1">
            <a href="<?php echo file_get_contents( get_theme_file_uri("/assets/links/Booking-site.txt"));//ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap w-fit min-w-1/2 my-auto relative hidden md:block text-center px-5 py-1 mx-auto font-semibold">Book nu</a>
            <div id="Book-sol" class="absolute w-1/3 h-auto -z-10 left-1/2 -translate-x-1/2">
                <svg class="fill-yellow-200 w-full relative" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z"/></svg>
                <svg class="fill-orange-800 w-1/3 opacity-50 relative z-10 top-1/2 -translate-y-1/2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
            </div>
        </div>
    </header>
    <main class="grid grid-cols-12 max-w-full">