<?php include("Header.php"); ?>
<main>

          <section id='section'>
            <form action="../fonctions/FonctionHoroscope.php" method="post" id="formCreate">
                <input type='hidden' name='todo' value='creerClient'>
                <div>
                    <label for="clientPrenom">Entre ton prénom</label>
                    <input type="text" name="clientPrenom" required id="clientPrenom">
                </div>
                <div>
                    <label for="clientNom">Entre ton nom</label>
                    <input type="text" name="clientNom" required id="clientNom">
                </div>
                <div>
                    <label for="clientNaissance">Entre ta date de naissance</label>
                    <input type="date" name="clientNaissance" id="clientNaissance">
                </div>

                <div>
                    <input type="submit" name="horoscopeSubmit" id="submit">
                </div>
            </form>
        </section>
</main>

<?php include("Footer.php"); ?>>