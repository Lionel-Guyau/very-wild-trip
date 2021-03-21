<?php
include("header.php");
include("destinations_data.php");
?>

<div class="formtrip-body">
    <form>
        <div>
            <label for="inputTrip">Votre budget</label>
            <select name="budget" id="selectBudget">
                <option value="">En Euro jour/pers</option>
                <option value="1">0€ - 150€</option>
                <option value="2">150€ - 300€</option>
                <option value="3">300€ - 1000€</option>
            </select>

            <input type="submit" id="submit" value="Mes choix" />

        </div>
    </form>

    <?php
    echo 'Bonjour ' . htmlspecialchars($_GET["budget"]) . '!';
    ?>


    foreach ($destinations as $clef => $destination) {
    if ($_GET['budget'] == $destination[$clef]['costByDay']) {

    echo 'Ville : ' . $clef . '<br>';
    echo '<br>';
    }
    }

    ?>