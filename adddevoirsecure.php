<?php
include("connection.php");
include("check.php");
if (isset($_POST['checkexist'])) {
    $sql = "SELECT COUNT(elevename) FROM eleve3A limit 1";
    $result = mysqli_query($db, $sql);
    $value = mysqli_fetch_assoc($result);
    $totaleleve = $value['COUNT(elevename)'];
    $com = array("1-1", "1-2", "1-3", "1-4", "2-1", "3-1", "4-1", "5-1");
    $classcom = array();
    $key = uniqid();
//$com est a changer si au futur il y a une changement de competence
    for ($i = 1; $i <= (int)$totaleleve; $i++) {
        $eleve = array();
        foreach ($com as $value) {
            array_push($eleve, $_POST[$value . 'e' . $i]);

        }
        $final = "'" . json_encode($eleve) . "'";
        array_push($classcom," ('".$key."','".$_POST['titledevoir']."', '3A', '$i', '".$_SESSION['profid']."','".date('Y-m-d')."','2','2016-12-10',".$final.")");
    }
//    devoirid	titledevoir	classid	eleveid	profid	datecreated	matiereid	datedevoir	note
    $sql = "INSERT INTO devoir (wholedevoirid, titledevoir, class, eleveid, profid, datecreated, matiereid, datedevoir, note) VALUES".implode(",", $classcom);
    echo $sql;
    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}