<?php
/**
 * Template name: XXX
 */


 get_header(); ?>
 
<div class="fixed z-[998] right-[74px] top-[50px] md:hidden">
    <h1 class="w-full text-center text-16 leading-26 font-tanker text-black"><?php the_title();?></h1>
    <div class="h-[2px] w-[70px] bg-[#78B047] mx-auto rounded-[full]"></div>         
</div>
<main class="">
    <!-- TITEL -->
    <section class="container hidden md:grid pt-[80px]">
        <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker text-black"><?php the_title();?></h1>        
        <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>    
    </section>

    <!-- SUBMENU -->
    <section class="pt-[40px] md:pt-[unset]">
        <!-- MOBIEL SUBMENU -->
        <div class="swiper mySwiper-navigatie md:hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek op TV</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek in de VU</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek en Naturalis</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Chief Scout</a></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- DESKTOP SUBMENU -->
        <div class="hidden md:flex md:space-x-[30px] lg:space-x-[30px] xl:space-x-[65px] mx-auto w-fit md:mt-[50px]">
            <a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek op TV</a>
            <a href="#item-2" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek in de VU</a>
            <a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Freek en Naturalis</a>
            <a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Chief Scout</a>
        </div>
    </section> 
    
    <!-- AFBEELDING - CONTENT -->
    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 mt-[30px] md:mt-[50px] lg:mt-[80px]">
            <!-- AFBEELDING -->
            <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw] overflow-hidden">
                <img src="https://www.freekvonk.nl/wp-content/uploads/2020/05/DSC2768-b3.jpg" alt="" class="h-full w-full object-cover object-center">
            </div>
            <!-- CONTENT -->
            <div class="lg:aspect-square bg-[#EFE7DE] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[50px] lg:py-[unset]">
                    <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">Prof. Dr. Freek vonk</h2>
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">Prof. dr. Freek Vonk (1983), hoogleraar aan de Vrije Universiteit Amsterdam en verbonden aan Naturalis Biodiversity Center</h3>
                    <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                </div>
                <img src="/wp-content/themes/ontdek-suriname/img/local/patroon-1.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0">
            </div>
        </div>
    </section>

    <!-- TITEL -->
    <section id="item-1">
        <div class="container py-[80px]">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider text-center">Freek op TV</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black text-center"> Freeks Wilde Wereld is al jaren lang een van de best bekeken kinder-televisieprogramma’s op Zapp/VPRO. </h3>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto mt-2 rounded-full"></div>   
        </div>
    </section>

    <!-- TEKST -->
    <section class="bg-[#0A1F16] relative">
        <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto py-[80px] z-[40]">
            <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white md:text-center">Naar aanleiding van zijn mediaoptredens wordt Freek in 2012 door de Nederlandse Publieke Omroep gevraagd een nieuw televisieprogramma te maken. Daarna volgen ‘Freek in ‘t Wild’ (2012/2013, Zapp/VPRO), ‘Freeks Wilde Wereld’ (vanaf 2014 tot heden, Zapp/VPRO), ‘Freek Vonk in Australië’ (2014, BNN-VARA), ‘Freek Vonk in Latijns-Amerika’ (2015, BNN-VARA), ‘Freek tegen de Stropers’ (2016, BNN-VARA), ‘De Super Freek Show’ (2016, BNN-VARA), ‘Freek naar de Haaien’ (2017, BNN-VARA) en ‘Freeks Jungle School’ (2020 tot heden, Zapp/BNN-VARA). <br><br>Ook wordt hij vaste deskundige in “De Wereld Draait Door’. In december 2014 geeft hij een uniek college voor DWDD University met als onderwerp gif. De uitzending trekt ruim 1,5 miljoen kijkers. In 2016 krijgt dit een vervolg met een college voor DWDD over “Evolutie”. En in 2017 geeft Freek zijn laatste college voor DWDD over “Superzintuigen”.<br><br>Sinds 2022 is Freek de nieuwe stem van de EO natuurseries op NPO 1. EO natuur krijgt een mooie prominente plek op de zender, te beginnen met de serie ‘The Mating Game; hoe dieren versieren’. De vooravond van de zaterdag wordt het nieuwe tijdslot voor natuurseries en daarin zijn weergaloos mooie BBC series te zien zoals ‘The Mating Game’, ‘Eden’ en ‘The Green Planet’.</p>
        </div>
        <img src="/wp-content/themes/ontdek-suriname/img/local/patroon-2.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0">
    </section>



    <!-- AFBEELDING - CONTENT SLIDER -->
    <section class="relative w-screen overflow-hidden mySwiper-over-freek-section ">
        <div class="swiper mySwiper-over-freek">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/logo-super-freek-show.png" alt="" class="z-[30] absolute top-[30px] lg:top-[50px] right-[30px] lg:right-[50px] h-[145px]">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#142C2B] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/logo-super-freek-show.png" alt="" class="z-[30] absolute top-[30px] lg:top-[50px] right-[30px] lg:right-[50px] h-[145px]">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#142C2B] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/logo-super-freek-show.png" alt="" class="z-[30] absolute top-[30px] lg:top-[50px] right-[30px] lg:right-[50px] h-[145px]">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#142C2B] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                            <img src="/wp-content/themes/ontdek-suriname/img/local/logo-super-freek-show.png" alt="" class="z-[30] absolute top-[30px] lg:top-[50px] right-[30px] lg:right-[50px] h-[145px]">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#142C2B] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="swiper-button-next-over-freek"></div>
        <div class="swiper-button-prev-over-freek"></div>
         <div class="swiper-pagination"></div>
    </section>


     <!-- TITEL EN TEKST -->
    <section id="item-2" class="bg-[#EFE7DE]">
        <div class="container py-[80px]">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider text-center">Freek in de VU</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black text-center">Prof. dr. Freek Vonk (1983), hoogleraar aan de Vrije Universiteit Amsterdam.</h3>
            <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto z-[40] pt-[30px]">
                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black md:text-center">Het College van Bestuur van de Vrije Universiteit Amsterdam benoemt bioloog Freek Vonk per 1 februari 2020 tot bijzonder hoogleraar ‘Evolutionary Biochemistry’. Deze leerstoel is mogelijk gemaakt door Naturalis Biodiversity Center en richt zich op de aanknopingspunten die natuurlijke gifstoffen bieden bij de ontwikkeling van nieuwe medicijnen en op een nieuwe generatie antistoffen voor slangengiffen. De bijzondere leerstoel wordt ingebed bij de afdeling Scheikunde & Farmaceutische Wetenschappen (S&F) van de Faculteit der Bètawetenschappen.</p>
            </div>
        </div>
    </section>


     <!-- AFBEELDING - CONTENT -->
    <section id="item-3">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <!-- CONTENT -->
            <div class="lg:aspect-square bg-white h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative order-2 lg:order-1">
                <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[50px] lg:py-[unset]">
                    <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">Freek en Naturalis</h2>
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">Freek is tevens verbonden aan Naturalis Biodiversity Center in Leiden.</h3>
                    <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Waar hij het boegbeeld is richting het publiek. In 2012 krijgt Freek de prestigieuze Eurekaprijs van NWO (Nederlandse Organisatie voor Wetenschappelijk Onderzoek) en de KNAW (Koninklijke Nederlandse Akademie van Wetenschappen), omdat hij zijn wetenschappelijk onderzoek op een uitstekende manier naar een breed publiek kan uit dragen.<br><br>In 2016 begeleidt hij de tyrannosaurus “Trix” naar Naturalis voor de tentoonstelling “T. rex in Town”. In 2017 heeft Freek zijn eigen tentoonstelling Gif!. In 2019, tijdens de opening van het nieuwe Naturalis, kan je en tour volgen langs Freeks favorieten.</p>
                </div>
                <img src="/wp-content/themes/ontdek-suriname/img/local/patroon-3.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0">
            </div>
            <!-- AFBEELDING -->
            <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw] overflow-hidden order-1 lg:order-2">
                <img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="h-full w-full object-cover object-center">
            </div>
        </div>
    </section>

    <!-- TITEL EN PLAATJES-->
    <section id="item-4" class="bg-[#523904] relative">
        <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto pt-[80px] pb-[50px] relative z-[40]">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase mb-[15px] tracking-wider text-center">Chief Scout</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white text-center">Prof. dr. Freek Vonk is vanaf september 2021 de nieuwe Chief scout van Scouting Nederland.</h3>
        </div>

        <!-- image Desktop -->
        <div class="container grid-cols-3 gap-[11px] relative pb-[50px] z-[40] hidden md:grid">
            <img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] overflow-hidden object-cover object-center">
            <img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] object-cover object-center">
            <img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] object-cover object-center">
        </div>

        <!-- Image Slider -->
        <div class="mySwiper-over-freek-image swiper md:hidden relative z-[40] pb-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide w-fit"><img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] object-cover object-center w-full max-w-[235px]"></div>
                <div class="swiper-slide w-fit"><img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] object-cover object-center w-full max-w-[235px]"></div>
                <div class="swiper-slide w-fit"><img src="/wp-content/themes/ontdek-suriname/img/local/Freek-gier.png" alt="" class="aspect-square lg:aspect-[4/3] object-cover object-center w-full max-w-[235px]"></div>
            </div>
        </div>

         <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto pb-[80px] z-[40]">
            <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white text-center">Prof. dr. Freek Vonk is vanaf september 2021 de nieuwe Chief scout van Scouting Nederland. Scouting staat voor avontuur in de natuur, waarbij kinderen en jongeren hun leiderschapskwaliteiten ontwikkelen en zelfvertrouwen opdoen. Zo draagt Scouting actief bij aan de ontwikkeling van jeugd in Nederland. Freek Vonk kan als Chief scout als geen ander iedere Nederlander inspireren om op avontuur te gaan in de natuur en zijn of haar grenzen te verleggen. De Chief scout is het gezicht van Scouting, de belangrijkste ambassadeur die kinderen en jongeren, zowel scouts als niet-scouts, inspireert om hun grenzen te verleggen en uitdagende avonturen te beleven.</p>
        </div>
         <img src="/wp-content/themes/ontdek-suriname/img/local/patroon-4.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 opacity-[0.01]">
    </section>

</main>




<?php get_footer(); ?>



