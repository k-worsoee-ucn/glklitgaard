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
        <nav class="row-span-1 row-start-1 overflow-hidden inline-block col-start-3 col-span-10">
            <div class="dropdown float-left overflow-hidden border-none outline-none bg-inherit m-0 px-4 py-3 group">
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
                    <a href="<?php echo get_site_url() . "/vores-heste" ?>" class="float-none px-4 py-3 no-underline block text-left text-black bg-white hover:bg-main-brand-color hover:text-white">Vores heste</a>
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
            <a href="#">
                <button class="bg-main-interaction-color px-10 py-2 my-4 rounded-full">Book Nu</button>
            </a>
        </nav>
    </header>
    <main class="grid grid-cols-12 max-w-full">