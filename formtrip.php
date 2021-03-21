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
                <option value=1>Froid</option>
                <option value=2>Chaud</option>
                <option value=3>Tempéré</option>
                <option value=4>Polaire</option>
                <option value=5>Humide</option>
                <option value=6>Aride</option>
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

    <?php
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
    ?>

    <?php

    foreach ($destinations as $destination => $content) {

        if ($_POST['climat'] === $content['wheather'] && $_POST['depay'] === $content['changeOfScenery'] && $_POST['budget'] >= $content['costByDay'] * $_POST['duree'] * $_POST['person']) {
        }
    }
    ?>