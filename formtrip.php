<?php
include("header.php");
include("pagesComponents/destinations_data.php");
?>


<!-----------------
--    The Form   --
------------------>
<div class="formtrip-body">
    <form action="formtrip.php" method="POST">
        <div>
            <label for="inputTrip">Votre budget</label>
            <input type="number" name="budget" id="inputTrip">
            <!-- <option value="">En Euro jour/pers</option>
            <option value="1">0€ - 150€</option>
            <option value="2">150€ - 300€</option>
            <option value="3">300€ - 1000€</option> -->
            <!-- </select> -->
        </div>
        <div>
            <label for="inputDepaysement">Votre degré de dépaysement</label>
            <select name="depay" id="inputDepaysement">
                <option value="">Choix de 0 à 3</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
            </select>
        </div>
        <div>
            <label for="inputClimat">Dans quel coin du globe</label>
            <select name="climat" id="inputClimat">
                <option value="">Choix du climat</option>
                <option value="Froid">Froid</option>
                <option value="Chaud">Chaud</option>
                <option value="Tempéré">Tempéré</option>
                <option value="Polaire">Polaire</option>
                <option value="Humide">Humide</option>
                <option value="Aride">Aride</option>
            </select>
        </div>
        <div>
            <label for="inputPerson">Nombre de personne</label>
            <select name="person" id="inputPerson">
                <option value="">De 1 à 4</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
            </select>
        </div>
        <div>
            <label for="inputDuree">Quelle durée</label>
            <select name="duree" id="inputDuree">
                <option value="">En nombre de jour</option>
                <option value=2>Week-end (2 jours)</option>
                <option value=7>Semaine (7 jours)</option>
                <option value=14>Semaine (14 jours)</option>
                <option value=30>Mois (30 jours)</option>
            </select>
        </div>

        <input type="submit" id="submit" value="Mes choix" />
        
    </form>



    <!----------------
--   The cards   --
------------------>

    <!-- <?php
            echo "<div class ='tripPage'>";

            foreach ($destinations as $destination => $content) {
                echo "<div class='picturesContainer'>
         <h2> $destination </h2> " .
                    "<div class='destinationImage'>" .
                    $content['image'] .
                    "</div>
                <div class='descriptionParagraph'>" .
                    $content['description'] .
                    "</div>                
        </div>";
            }

            echo "<?div>";
            ?> -->

    <?php

    echo "<div class='form-trip-page'>";

    foreach ($destinations as $destination => $content) {
        if ($_POST['climat'] == $content['wheather'] && $_POST['depay'] == $content['changeOfScenery'] && $_POST['budget'] >= $content['costByDay'] * $_POST['duree'] * $_POST['person']) {
            $calcul = ($content['costByDay'] * $_POST['person']);
            $total = ($calcul * $_POST['duree']);
            echo "<div class='picturesContainer'>" .
                "<h3>$destination</h3>" .
                $content['image'] .
                $content['description'] .
                "<p>Dépaysement: {$content['changeOfScenery']}</br>
                            Climat: {$content['wheather']} </br>
                            Par jour/pers: {$content['costByDay']} €</br>
                            <b>Coût total: {$total} € </b></p>" .
                "</div>";
        }
    }
    echo "</div>";
    ?>

    <?php
    include("footer.php");
    ?>