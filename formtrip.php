<?php
include("header.php");
include('destinations_data.php');
?>

<!-----------------
--    The Form   --
------------------>
<div class="formtrip-body">
    <form>
        <div>
            <label for="inputTrip">Votre budget</label>
            <select name="budget" id="selectBudget">
                <option value="">En Euro jour/pers</option>
                <option value="1">0€ - 500€</option>
                <option value="2">500€ - 1000€</option>
                <option value="3">1000€ - 1500€</option>
                <option value="4">1500€ - 2000€</option>
                <option value="5">2000€ - 2500€</option>
                <option value="6">2500€ - ....€</option>
            </select>


        </div>
        <div>
            <label for="inputDepaysement">Votre degré de dépaysement</label>
            <select name="depay" id="selectDepay">
                <option value="">Choix de 0 à 5</option>
                <option value="1">0</option>
                <option value="2">1</option>
                <option value="3">2</option>
                <option value="4">3</option>
            </select>
        </div>
        <div>
            <label for="inputClimat">Dans quel coin du globe</label>
            <select name="climat" id="selectClimat">
                <option value="">Choix du climat</option>
                <option value="1">Froid</option>
                <option value="2">Chaud</option>
                <option value="3">Tempéré</option>
                <option value="4">Polaire</option>
                <option value="5">Humide</option>
                <option value="6">Aride</option>
            </select>
        </div>
        <div>
            <label for="inputPerson">Nombre de personne</label>
            <select name="person" id="selectPerson">
                <option value="">De 1 à 4</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div>
            <label for="inputDuree">Quelle durée</label>
            <select name="duree" id="selectDuree">
                <option value="">En nombre de jour</option>
                <option value="1">Week-end (2 jours)</option>
                <option value="2">Semaine (7 jours)</option>
                <option value="3">Semaine (14 jours)</option>
                <option value="4">Mois (30 jours)</option>
            </select>
        </div>

        <input type="submit" id="submit" value="Mes choix" />
    </form>


    <!----------------
--   The cards   --
------------------>


    <section class="main-cards">

        <?php if ($_GET['budget'] == 1) { ?>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Bruxelle.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Paris.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Toulouse.jpeg" width="300px" height="300px">
                </div>
            </div>
        <?php } ?>


        <?php if ($_GET['budget'] == 2) { ?>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Berlin.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/London.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Roma.jpeg" width="300px" height="300px">
                </div>
            </div>


        <?php } ?>


        <?php if ($_GET['climat'] == 2) { ?>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Rio.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Sydney.jpeg" width="300px" height="300px">
                </div>
            </div>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Cuba.jpeg" width="300px" height="300px">
                </div>
            </div>


        <?php } ?>


        <?php if ($_GET['climat'] == 4) { ?>
            <div class="card-trip">
                <div>
                    <img src="images/destinations_images/Moscov.jpeg" width="300px" height="300px">
                </div>
            </div>
        <?php } ?>

    </section>
</div>


<?php
include("footer.php");
?>