<?php
include("connection.php");
if (isset($_GET['profid'])) {
    $profid = $_GET['profid'];
    $sql = "SELECT DISTINCT devoir.titledevoir,user.name,matiere.matierename,devoir.datedevoir, devoir.class FROM devoir INNER JOIN user ON user.profid=devoir.profid INNER JOIN matiere ON matiere.matiereid=devoir.matiereid WHERE devoir.profid='$profid'";
    $result = mysqli_query($db, $sql);
    $data=array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $onerow = array($row['titledevoir'], $row['class'], $row['name'], $row['matierename'], $row['datedevoir']);
            array_push($data, $onerow);
        }
    } else {
        echo array();
    }
    $table = array(data => $data);
    echo json_encode($table);
}