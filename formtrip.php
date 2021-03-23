<?php
include("header.php");
include("pagesComponents/destinations_data.php");


$budget = isset($_POST['budget']) ? $_POST['budget'] : '';
$depay = isset($_POST['depay']) ? $_POST['depay'] : '';
$climat = isset($_POST['climat']) ? $_POST['climat'] : '';
$person = isset($_POST['person']) ? $_POST['person'] : '';
$duree = isset($_POST['duree']) ? $_POST['duree'] : '';
?>


<!-----------------
--    The Form  ---
------------------>
<div class="formtrip-body">
    <form action="formtrip.php" method="POST">
        <div>
            <label for="inputTrip">Votre budget</label>
            <input type="number" name="budget" id="inputTrip" required value="<?= $budget ?>" />
        </div>
        <div>
            <label for="inputDepaysement">Votre degré de dépaysement</label>
            <select name="depay" id="inputDepaysement" required>
                <option value="">Choix de 1 à 3</option>
                <option value="1" <?= $depay == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?= $depay == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?= $depay == '3' ? 'selected' : '' ?>>3</option>
            </select>
        </div>
        <div>
            <label for="inputClimat">Dans quel coin du globe</label>
            <select name="climat" id="inputClimat" required>
                <option value="">Choix du climat</option>
                <option value="Froid" <?= $climat == 'Froid' ? 'selected' : '' ?>>Froid</option>
                <option value="Chaud" <?= $climat == 'Chaud' ? 'selected' : '' ?>>Chaud</option>
                <option value="Tempéré" <?= $climat == 'Tempéré' ? 'selected' : '' ?>>Tempéré</option>
                <option value="Polaire" <?= $climat == 'Polaire' ? 'selected' : '' ?>>Polaire</option>
                <option value="Humide" <?= $climat == 'Humide' ? 'selected' : '' ?>>Humide</option>
                <option value="Aride" <?= $climat == 'Aride' ? 'selected' : '' ?>>Aride</option>
            </select>
        </div>
        <div>
            <label for="inputPerson">Nombre de personne</label>
            <select name="person" id="inputPerson" required>
                <option value="">De 1 à 4</option>
                <option value="1" <?= $person == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?= $person == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?= $person == '3' ? 'selected' : '' ?>>3</option>
                <option value="4" <?= $person == '4' ? 'selected' : '' ?>>4</option>
            </select>
        </div>
        <div>
            <label for="inputDuree">Quelle durée</label>
            <select name="duree" id="inputDuree" required>
                <option value="">En nombre de jour</option>
                <option value="2" <?= $duree == '2' ? 'selected' : '' ?>>Week-end (2 jours)</option>
                <option value="7" <?= $duree == '7' ? 'selected' : '' ?>>Semaine (7 jours)</option>
                <option value="14" <?= $duree == '14' ? 'selected' : '' ?>>Semaine (14 jours)</option>
                <option value="30" <?= $duree == '30' ? 'selected' : '' ?>>Mois (30 jours)</option>
            </select>
        </div>

        <input type="submit" id="submit" value="Mes choix" />

    </form>
    <p class="form-instruction">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ratione molestiae, commodi veniam, dolores non hic deleniti blanditiis explicabo aut, voluptatibus labore vel atque reiciendis velit mollitia rerum maxime delectus.</p>

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


    $budget = $_POST['budget'];
    $depay = $_POST['depay'];
    $wheather = $_POST['climat'];
    $person = $_POST['person'];
    $duree = $_POST['duree'];

    echo "<div class='form-trip-page'>";

    foreach ($destinations as $destination => $content) {
        if ($wheather == $content['wheather'] && $depay == $content['changeOfScenery'] && $budget >= $content['costByDay'] * $duree * $person) {

            $total = ($content['costByDay'] * $person * $duree);
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