<?php get_header(); ?>

<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron colorGreen">
        <div class="container">
            <h1 class="display-3">Piękna Helena</h1>
            <p><h2>Kosmetyki wegetariańskie i wegańskie. </h2><br><h3>Z miłości do Córki.<br> Inspirowane wyzwaniami.</h3></p>
            <div class="line"></div>
            <p><a class="btn btn-primary btn-lg btnLearnMore" href="http://localhost/PieknaHelena/wordpress/index.php/category/whatinside/" role="button">Chcę wiedzieć więcej... &raquo;</a>
                <a class="btn btn-primary btn-lg btnLearnMore peel" href="#" role="button">Robię sobie peeling! Już! &raquo;</a></p>
        </div>
    </div>




<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
            <div class="whiteBorder">
                <div class="img imgRaspberry"></div>
                <h2><b>Kocha, lubi, szanuje</b></h2>
                <p>Skąd to wszystko i kto za tym stoi, po co i na co i czy na pewno dla mnie?</p>
                <p><a class="btn btn-secondary btnReadMore" href="http://localhost/PieknaHelena/wordpress/index.php/category/aboutme/" role="button">Czytaj więcej... &raquo;</a></p>
            </div>
        </div>


        <div class="col-md-4 col-sm-6 col-12">
            <div class="whiteBorder">
                <div class="img imgCream"></div>
                <h2><b>Co jest w słoiku</b></h2>
                <p>Zioła, oleje, olejki, cukier i ocet czyli prawie jak w kuchni, ale jednak nie do końca... </p>
                <p><a class="btn btn-secondary btnReadMore" href="http://localhost/PieknaHelena/wordpress/index.php/category/whatinside/" role="button">Czytaj więcej... &raquo;</a></p>
            </div>
        </div>


        <div class="col-md-4 col-sm-6 col-12">
            <div class="whiteBorder">
                <div class="img imgBucket"></div>
                <h2><b>Można kupić</b></h2>
                <p>Sklepik. Kupić, wypróbować, przekonać się samemu.</p>
                <p><a class="btn btn-secondary btnReadMore" href="http://localhost/PieknaHelena/wordpress/index.php/shop/" role="button">Czytaj więcej... &raquo;</a></p>
            </div>
        </div>
    </div>

    <hr>

</div> <!-- /container -->

</main>


<!--modal code below-->

 Modal
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class=" modal-lg modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><h2><b>Peeling do ciała specjalnie dla mnie</b></h2></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="myModal">
                    <div class="imgSugar small"></div>
                    <p>
                        Weź miskę i wsyp do niej cukier - tyle, ile chcesz mieć peelingu. Do cukru dodaj ulubionego oleju - może być
                        oliwa z oliwek, olej słonecznikowy, sezamowy albo kokosowy (ten lepiej rozpuść wcześniej w garnuszku).
                        Ile oleju? Tyle, żeby po wymieszaniu uzyskać konsystencję piasku na babki. Zawsze możesz dodać cukru lub oleju. Dobrze wymieszaj i właściwie peeling jest już gotowy, chyba że jeszcze chcesz dodać nutkę egzotyki...</p>
                    <label for="ch1"><input type="checkbox" id="ch1"><span>Czy masz i lubisz świeże cytrusy (pomarańcza, cytryna, grapefruit?)</span></label>
                </div>

                <div class="modalHide1 modalHide">
                    <hr>
                    <div class="imgLemon small"></div>
                    <p>
                        Jeśli tak, to wyciśnij z nich sok - w zależności od ilości peelingu wystarczy sok z połowy owoca. Można zmieszać soki według upodobania. Możliwe, że po dodaniu do wcześniejszej mieszanki trzeba będzie dodać jeszcze cukru. Dobrze wszystko wymieszaj i właściwie cytrusowy peeling jest już gotowy, chyba że jeszcze chcesz go troszkę podkręcić...</p>
                    <label for="ch2"><input type="checkbox" id="ch2"><span>Niech będzie że podkręcam</span></label>

                </div>

                <br>

                <div class="modalHide2 modalHide">
                    <hr>
                    <div class="imgHerbs small"></div>
                    <p>
                        Tutaj rządzi wyobraźnia i zawartość kuchennych szafek. Jeśli masz ulubiony olejek eteryczny - dodaj 3 do 6 kropelek (więcej nie polecam). Najlepiej prawdzi się któryś z zapachów cytrusowych, lub uniwersaalna lawenda. Nie zaszkodzi łyżka płynnego miodu. Albo szczypta ulubionych przypraw - na przykład cynamonu albo sproszkowanych goździków. Kto lubi może też dodać suszonych płatków kwiatów zmielonych w młynku do kawy - zawsze sprawdzą się płatki róż.
                        I już!
                        Teraz przełóż wyprodukowane wspaniałości do szczelnego słoja. Bierz dobrą garść na myjkę i używaj, pilnując żeby do słoja nie dostała się woda (bo kosmetyk się zbryli i rozpuści, albo jedno i drugie). Jeśli do wyrobu zostały użyte świeże soki owocowe to zużyj proszę peeling w ciągu około miesiąca. A może chcesz się nim z kimś podzielić?
                    </p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btnReadMore" data-dismiss="modal">Zamknij</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of modal-->


<?php get_footer(); ?>
