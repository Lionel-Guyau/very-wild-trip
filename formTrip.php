<?php
include("header.php");
?>

<form>
    <div>
        <label for="inputTrip">Votre budget</label>
        <select name="budget" id="selectBudget">
            <option value="">En Euro et par jour</option>
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
            <option value="5">4</option>
            <option value="6">5</option>
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
            <option value="2">Semaine (14 jours)</option>
            <option value="3">Mois (30 jours)</option>
        </select>
    </div>

    <input type="submit" id="submit" value="Suspense !" />
</form>

<section class="main-cards">
    <div class="Card">
        <div>
            <img src="images/barcelona-city-view.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage1"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/white-buildings-with-red-roofs.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage2"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/coconut-drink-on-beach.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage3"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/home-interior-meets-garden-exterior.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage4"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/moment-of-peace-at-lake-louise.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage5"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/person-dances-in-door-way-with-a-view-of-the-taj-mahal.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage6"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/person-stands-and-looks-out-to-lush-green-mountains.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage7"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/phone-and-travel-flatlay-of-items.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage8"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/road-1958388.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage9"></span>
    </div>
    <div class="Card">
        <div>
            <img src="images/lush-green-forest-and-a-small-waterfront-town.jpg" width="300px" height="300px">
        </div>
        <span id="Voyage10"></span>
    </div>
</section>


<?php
include("footer.php");
?>