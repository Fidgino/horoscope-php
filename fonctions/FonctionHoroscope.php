<?php
    $actualYears = date("d-m-Y");

    $url = "https://kayoo123.github.io/astroo-api/hebdomadaire.json";
    $data = file_get_contents($url);
    $result = json_decode($data, true);

    if(isset($_POST['horoscopeSubmit'])) {
        $name = $_POST['clientPrenom'];
        
        $second_name = $_POST['clientNom'];

        $fr_date = date("d-m-Y",strtotime($_POST['clientNaissance']));

        $age = date_diff(date_create($fr_date), date_create($actualYears));
        $age = $age->format('%y');

        $daysStr = date("d",strtotime($_POST['clientNaissance']));
        $daysNbr = (float)$daysStr;
        $monthStr = date("m",strtotime($_POST['clientNaissance']));
        $monthNbr = (float)$monthStr;
        $birthdayStr = date("Y", strtotime($_POST['clientNaissance']));
        $birthdayNbr = (float)$birthdayStr;
        // var_dump($age);
        var_dump($monthNbr);
        // var_dump($result);
        if ($monthNbr == 3 && $daysNbr >= 21 || $monthNbr == 4 && $daysNbr <= 21){
            $signe = 'Bélier';
        } else if ($monthNbr == 4 && $daysNbr >= 21 || $monthNbr == 5 && $daysNbr <= 21){
            $signe = 'Taureau';
        } else if ($monthNbr == 5 && $daysNbr >= 22 || $monthNbr == 6 && $daysNbr <= 21){
            $signe = 'Gémeaux';
        } else if ($monthNbr == 6 && $daysNbr >= 22 || $monthNbr == 7 && $daysNbr <= 22){
            $signe = 'Cancer';
        } else if ($monthNbr == 7 && $daysNbr >= 23 || $monthNbr == 8 && $daysNbr <= 22){
            $signe = 'Lion';
        } else if ($monthNbr == 8 && $daysNbr >= 23 || $monthNbr == 9 && $daysNbr <= 22){
            $signe = 'Vierge';
        } else if ($monthNbr == 9 && $daysNbr >= 23 || $monthNbr == 10 && $daysNbr <= 22){
            $signe = 'Balance';
        } else if ($monthNbr == 10 && $daysNbr >= 23 || $monthNbr == 11 && $daysNbr <= 21){
            $signe = 'Scorpion';
        } else if ($monthNbr == 11 && $daysNbr >= 22 || $monthNbr == 12 && $daysNbr <= 21){
            $signe = 'Sagittaire';
        } else if ($monthNbr == 12 && $daysNbr >= 22 || $monthNbr == 1 && $daysNbr <= 19){
            $signe = 'Capricorne';
        } else if ($monthNbr == 1 && $daysNbr >= 20 || $monthNbr == 2 && $daysNbr <= 18){
            $signe = 'Verseau';
        } else if ($monthNbr == 2 && $daysNbr >= 19 || $monthNbr == 3 && $daysNbr <= 20){
            $signe = 'Poissons';
        }
    };

    afficherHoroscope($name, $second_name, $age, $signe);
    function afficherHoroscope ($name, $second_name, $age, $signe) {
        if( $age >= 18){
            $contenu = '
                    <div class="info">
                        <p>
                            Vous êtes ' . $name . " " . $second_name . ' et vous avez ' . $age . 'ans
                        </p>
                        <p>
                        Votre signe est ' . $signe . "" .'
                        </p>
                        <img src="../assets/img/' . $signe . '.jpg" alt="">
                    </div>
                ';
                require("../views/Layout.php");
        }else{
            $contenu = '
                    <div class="info">
                        <p>Vous etes pas majeur</p>
                    </div>
                    ';
        require("../views/Layout.php");
        }
        
    }
    

?>

