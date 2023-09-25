<?php include("Header.php"); ?>
<main>
    <?php

    //injection en PHP du contenu -->

    if (isset($contenu)) {
        echo $contenu;
    }
    ?>
    <script src="../assets/js/horoscope.js"></script>
</main>


<?php include("footer.php"); ?>