<?php
$connection = new mysqli("localhost", "root", "", "pgr");
$result = $connection->query("SELECT * FROM taxa");
//$result2 = $connection->query("SELECT * FROM pgr.reg_taxon_author");

$species = array();
//$genus_authors = array();
//$existing_authors = array();
// $taxon_genera = array();
// $taxon_families = array();
// $taxon_authors = array();
// $crop_names = array();
/*while ($row = $result2->fetch_assoc()) {
    $existing_authors[] = $row["name"];
}*/

while ($row = $result->fetch_assoc()) {
    // Replace all dd-mm-yy dates with yyyy-mm-dd
    $species[] = $row["species"];
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

/*foreach (array_unique($species) as $each) {
    $query = $connection->prepare("INSERT INTO reg_taxon_species (name) VALUES (?)");
    $query->bind_param("s", $each);
    $query->execute();
    echo "Inserted new taxon species: " . $each;
    echo "</br>";
}*/

// unset($result);
// $distinct_crop_names = array_unique($crop_names);
// $distinct_taxon_authors = array_unique($taxon_authors);
// $distinct_taxon_families = array_unique($taxon_families);
// $distinct_taxon_genera = array_unique($taxon_genera);
/*foreach ($distinct_taxon_genera as $distinct_taxon_genus) {
    $query = $connection->prepare("INSERT INTO reg_taxon_genus (name) VALUES (?)");
    $query->bind_param("s", $distinct_taxon_genus);
    $query->execute();
    echo "Inserted new taxon author: " . $distinct_taxon_genus;
    echo "</br>";
}*/
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

/*foreach (array_unique($genus_authors) as $genus_author) {
    $found = false;
    foreach ($existing_authors as $existing_author) {
        if ($existing_author == $genus_author) {
            $found = true;
        }
    }
    if (!$found) {
        echo $genus_author;
    }
}*/