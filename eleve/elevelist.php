<?php
include("../connection.php");
if (isset($_GET['classe'])) {

    $class = $_GET['classe'];
    $sql = "SELECT tableeleveid FROM class WHERE classe='$class' limit 1";
    $result = mysqli_query($db, $sql);
    $value = mysqli_fetch_assoc($result);
    $table = $value['tableeleveid'];
    $sql = "SELECT eleveid,elevename,sexe FROM $table";
    $result = mysqli_query($db, $sql);
    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $onerow = array('<input name="elevetotalnumber" type="text" value="mysqli_num_rows($result)">', $row['elevename'], $_GET['classe'], '<input autocomplete="off" name="' . $_GET["com"] . "e" . $row["eleveid"] . '" class="inputs" onkeyup="check04(this)" maxlength="1" style="width:50px;text-align:center;">', '');
            array_push($data, $onerow);
        }

    } else {
        echo "0 results";
    }
    $table = array(data => $data);
    echo json_encode($table);
}