<?php get_header();
?>
<section class="bg-gray-200 wavey-section z-10 pt-16">

<h1 class="text-center text-3xl py-6"><?php the_title();?></h1>
</section>
<div class="h-fit w-full rip fill-gray-200 -mb-10">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
</div>
<section class="relative grid-cols-3 lg:grid-cols-4 grid gap-10 w-full py-10 bg-brand-darkgreen col-start-1 col-span-12">
<?php $content = strip_tags(get_the_content(), '<img>'); // fjerner alle tags, undtaget img
            $pattern = "/<img.*?src[^\>]+>/"; // REGEX til at finde billed ?>
            <div class="object-contain shadow-lg relative w-full h-fit my-auto col-start-1 col-span-3">
                <img class="w-full h-fit" src="<?php echo get_the_post_thumbnail_url();?>" alt="Pladskort over Gl. klitgaard">
                </div>
                <div class="relative -scale-x-100 col-start-4 mt-16">
            <div class="w-full mx-auto grid grid-cols-1 gap-3 bg-yellow-100 py-5 min-h-60 -scale-x-100">
                <?php if(have_rows("pladskort_maerker")){while(have_rows("pladskort_maerker")){
                    the_row();
                    $contentMark = get_row();
                    foreach($contentMark as $Mark){
                        $Array = array_values($Mark);?>
                        <div class="w-9/12 mx-auto inline-flex justify-between"><p class="bg-slate-100 p-5 rounded-full first-letter:capitalize"><?php echo $Array[0];?></p> <p class="h-fit my-auto text-right"><?php echo $Array[1];?></p></div>
                    <?php }
                }}?>
                <div class="w-9/12 mx-auto inline-flex justify-between"><p class="bg-gray-700 p-5 text-slate-100 rounded-full">x</p> <p class="h-fit my-auto text-right">Mulige campingpladser</p></div>
                <div class="h-fit w-full paper-rip absolute left-0 -bottom-5">
                <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
                </div>
            </div>
            <!-- cursed paper effects-->
            <svg class="drop-shadow-xl z-10 -ml-0.5 absolute left-full bottom-full w-8 h-8" preserveAspectRatio="none" width="15" height="19" viewBox="0 0 15 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.18631 9.58405C12.3191 9.58405 14.8859 19 14.8859 19C14.8859 19 15.9125 9.07867 11.8061 4.53958C7.69962 0.000492576 0 0 0 0V19C0 19 2.05352 9.58405 7.18631 9.58405Z" class="fill-yellow-100"/>
            </svg>
            <svg class="absolute -z-10 -ml-0.5 left-full bottom-full w-8 h-5" preserveAspectRatio="none" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 10C0 10 1.5 0 8.25 0C15 0 15 10 15 10H0Z" class="fill-amber-200 saturate-50 brightness-75"/>
            </svg>
            <svg class=" z-20 absolute bottom-full left-0 w-full h-8 pr-0.5 box-content" preserveAspectRatio="none" width="52" height="8" viewBox="0 0 52 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="52" height="8" class="fill-yellow-100"/>
            </svg>
            <div class="grid grid-cols-1 absolute top-0 left-full w-8 h-10">
                <svg class="w-8 h-auto max-h-72 min-h-44" preserveAspectRatio="none" width="10" height="60" viewBox="0 0 10 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="10" height="60" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>
                <svg class="w-8 h-8" preserveAspectRatio="none" width="39" height="23" viewBox="0 0 39 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 22.9512H0.135742L0.599121 22.499L0.952637 22.6641L1.69824 22.4482L2.44385 22.6641V22.2109L3.18945 21.7578V21.9961L4.12939 21.7578L3.93506 21.9961H4.68066L5.07129 21.5938L5.42627 21.543L6.19287 21.5938L9.9209 20.6191L11.4121 18.8789L15.1401 19.4219L15.6011 19.3311L16.3467 18.8789L17.0923 19.3311L18.1016 18.5898L18.5835 18.4258H19.3291V17.9727L20.666 17.8252L20.8203 18.4258H21.5659L21.8506 18.8789H22.5967L23.3418 19.3311L24.4395 19.4219L24.833 19.7832L25.5791 19.4219L26.3242 20.2363H27.0703V20.6885H28.5615L29.5298 21.8164L39 18.2246V0H0V22.9512Z" class="fill-amber-200 saturate-50 brightness-75"/>
                </svg>
            </div>
        </div>
</section>

<section class="w-full relative pt-24 bg-brand-darkgreen">
    <div class="mt-48 mx-auto relative w-10/12 md:w-8/12 lg:w-6/12 bg-yellow-100 z-20 pb-28 pt-5 px-10">
    <div class="h-fit w-full rip fill-yellow-100 rotate-180 absolute bottom-full left-0">
        <?php echo file_get_contents( get_theme_file_uri("/assets/svg/Paper-rip.svg")); ?>
    </div>
        <h3 class="text-4xl text-center">Skal vi være dig nye campingsted?</h3>
        <a href="<?php echo get_post_type_archive_link("Udlejning") //ligende med tidligere ting, men vi henter linket fra en seperat fil og sætter ind som href'en.?>" class="knap text-center px-3 py-1 mx-auto w-fit mt-5 font-semibold grid">Se vores udlejnings muligheder her</a>
    </div>
    <img class="absolute top-0 left-0 w-full h-full object-cover object-top" src="<?php echo get_theme_file_uri("/assets/images/newsbg.png") ?>" alt="Vidunderlig solneddang over vesterkysten">
</section>

<?php get_footer();?>