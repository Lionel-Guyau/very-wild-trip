<?php
include("header.php");
?>

<!-----------------
-- Le formulaire --
------------------>


        <input type="submit" id="submit" value="Mes choix" />
    </form>
</div>

<!-----------------
--  Les cartes   --
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


<?php
include("footer.php");
?>