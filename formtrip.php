<?php
include("header.php");
include("pagesComponents/destinations_data.php");

//   The vars    //
$budget = isset($_POST['budget']) ? $_POST['budget'] : '';
$depay = isset($_POST['depay']) ? $_POST['depay'] : '';
$wheather = isset($_POST['climat']) ? $_POST['climat'] : '';
$person = isset($_POST['person']) ? $_POST['person'] : '';
$duree = isset($_POST['duree']) ? $_POST['duree'] : '';

$filteredDestinations = [];

// Application des critères sur la liste de voyage
foreach ($destinations as $destination => $content) {
    if (!empty($budget) && !empty($person) && !empty($duree) && $budget < $content['costByDay'] * $duree * $person) {
        continue;
    }

    if (!empty($wheather) && $wheather !== $content['wheather']) {
        continue;
    }

    if (!empty($depay) && $depay != $content['changeOfScenery']) {
        continue;
    }

    $content['total'] = $content['costByDay'] * $person * $duree;
    $filteredDestinations[$destination] = $content;
}

// Si aucun critère n'a été renseigné, on affiche tous les voyages
if (empty($_POST)) {
    $filteredDestinations = $destinations;
}
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
            <select name="depay" id="inputDepaysement">
                <option value="">Choix de 1 à 3</option>
                <option value="1" <?= $depay == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?= $depay == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?= $depay == '3' ? 'selected' : '' ?>>3</option>
            </select>
        </div>
        <div>
            <label for="inputClimat">Chois du climat</label>
            <select name="climat" id="inputClimat">
                <option value="">Choix du climat</option>
                <option value="Froid" <?= $wheather == 'Froid' ? 'selected' : '' ?>>Froid</option>
                <option value="Chaud" <?= $wheather == 'Chaud' ? 'selected' : '' ?>>Chaud</option>
                <option value="Tempéré" <?= $wheather == 'Tempéré' ? 'selected' : '' ?>>Tempéré</option>
                <option value="Polaire" <?= $wheather == 'Polaire' ? 'selected' : '' ?>>Polaire</option>
                <option value="Humide" <?= $wheather == 'Humide' ? 'selected' : '' ?>>Humide</option>
                <option value="Aride" <?= $wheather == 'Aride' ? 'selected' : '' ?>>Aride</option>
            </select>
        </div>
        <div>
            <label for="inputPerson">Nombre de personne</label>
            <select name="person" id="inputPerson">
                <option value="">De 1 à 4</option>
                <option value="1" <?= $person == '1' ? 'selected' : '' ?>>1</option>
                <option value="2" <?= $person == '2' ? 'selected' : '' ?>>2</option>
                <option value="3" <?= $person == '3' ? 'selected' : '' ?>>3</option>
                <option value="4" <?= $person == '4' ? 'selected' : '' ?>>4</option>
            </select>
        </div>
        <div>
            <label for="inputDuree">Quelle durée</label>
            <select name="duree" id="inputDuree">
                <option value="">En nombre de jour</option>
                <option value="2" <?= $duree == '2' ? 'selected' : '' ?>>Week-end (2 jours)</option>
                <option value="7" <?= $duree == '7' ? 'selected' : '' ?>>Semaine (7 jours)</option>
                <option value="14" <?= $duree == '14' ? 'selected' : '' ?>>Semaine (14 jours)</option>
                <option value="30" <?= $duree == '30' ? 'selected' : '' ?>>Mois (30 jours)</option>
            </select>
        </div>

        <input type="submit" id="submit" value="Mes choix" />

    </form>

    <h2>
        <?php if (!empty($filteredDestinations)) { ?>
            <?= count($filteredDestinations) ?> voyages correspondent à vos critères
        <?php } else { ?>
            Nous n'avons trouvé aucun voyage correspondant à vos critères
        <?php } ?>
    </h2>

    <p class="formtrip-textright">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ratione molestiae, commodi veniam,
        dolores non hic deleniti blanditiis explicabo aut, voluptatibus labore vel atque reiciendis velit mollitia rerum maxime delectus.
    </p>


    <!----------------
    --   The cards   --
------------------>

    <div class='form-trip-page'>
        <?php foreach ($filteredDestinations as $destination => $content) {  ?>
            <div class='picturesContainer'>
                <?= $content['name'] ?>
                <?= $content['image'] ?>
                <?= $content['description'] ?>

                <div class="criterias">
                    <p>
                        Dépaysement : <?= $content['changeOfScenery'] ?>
                    </p>

                    <p>
                        Climat : <?= $content['wheather'] ?>
                    </p>

                    <p>
                        Par jour/pers : <?= $content['costByDay'] ?> €
                    </p>

                    <?php if (!empty($content['total'])) { ?>
                        <p>
                            <b>Coût total : <?= $content['total'] ?> €</b>
                        </p>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php include("footer.php"); ?>