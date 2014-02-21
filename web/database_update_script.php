<?php
$connection = new mysqli("localhost", "root", "", "psad");
$result = $connection->query("SELECT * FROM accessions");

// $crop_names = array();

while ($row = $result->fetch_assoc()) {
    // Replace all dd-mm-yy dates with yyyy-mm-dd
    $from_database = $row["recording_date"];
    /*
    if (preg_match("/^(\d{2})-(\d{2})-(\d{2})$/", $from_database)) {
        $date_parts = explode("-", $from_database);
        $new_date = "";
        // There cannot be any accessions from 2020
        if (intval($date_parts[2]) > 20) {
            $new_date .= "19" . $date_parts[2];
        }
        else {
            $new_date .= "20" . $date_parts[2];
        }
        $new_date .= "-" . $date_parts[1];
        $new_date .= "-" . $date_parts[0];
        $query = $connection->prepare("UPDATE accessions SET collection_date = ? WHERE id = ?");
        $query->bind_param("si", $new_date, $row["id"]);
        $query->execute();
        echo $from_database . "=>" . $new_date;
        echo "</br>";
    }
    elseif (preg_match("/^(\d{8})$/", $from_database)){
        // Replace all yyyymmdd dates with yyyy-mm-dd
        $new_date = substr($from_database, 0, 4);
        $new_date .= "-" . substr($from_database, 4, 2);
        $new_date .= "-" . substr($from_database, 6, 2);
        $query = $connection->prepare("UPDATE accessions SET collection_date = ? WHERE id = ?");
        $query->bind_param("si", $new_date, $row["id"]);
        $query->execute();
        echo $from_database . "=>" . $new_date;
        echo "</br>";
    }
    */
    // $crop_names[] = $row["crop_name"];
    /*
    if (preg_match("/^(\d{4})$/", $from_database)) {
        $new_date = $from_database;
        $new_date .= "-01-01";
        $query = $connection->prepare("UPDATE accessions SET recording_date = ? WHERE id = ?");
        $query->bind_param("si", $new_date, $row["id"]);
        $query->execute();
        echo $from_database . "=>" . $new_date;
        echo "<br/>";
    }
    */
    /*if (preg_match("/^(\d{2}-)(\d{2}-)(\d{2})$/", $from_database)) {
        $date_parts = explode("-", $from_database);
        $new_date = "";
        if (intval($date_parts[2]) > 20) {
            $new_date .= "19" . $date_parts[2];
        }
        else {
            $new_date .= "20" . $date_parts[2];
        }
        $new_date .= "-" . $date_parts[1];
        $new_date .= "-" . $date_parts[0];
        $query = $connection->prepare("UPDATE accessions SET recording_date = ? WHERE id = ?");
        $query->bind_param("si", $new_date, $row["id"]);
        $query->execute();
        echo $from_database . "=>" . $new_date;
        echo "</br>";
    }*/
}

// unset($result);
// $distinct_crop_names = array_unique($crop_names);
// unset($crop_names);

/*
foreach ($distinct_crop_names as $distinct_crop_name) {
    $query = $connection->prepare("INSERT INTO reg_crop_names (name) VALUES (?)");
    $query->bind_param("s", $distinct_crop_name);
    $query->execute();
    echo "Inserted new crop name: " . $distinct_crop_name;
    echo "</br>";
}
*/