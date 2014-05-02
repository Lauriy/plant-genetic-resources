<?php

if (empty($fields) || empty($accessions)) {
    die("Faulty export parameters");
}

foreach ($fields as $field) {
    echo $field . "\t";
}
print("\n");

foreach ($accessions as $accession) {
    $to_table = "";
    foreach ($fields as $field) {
        if (!isset($accession[$field])) {
            $to_table .= "NULL" . "\t";
        } elseif ($accession[$field] !== "") {
            if ($accession[$field] instanceof DateTime) {
                $to_table .= $accession[$field]->format("Y-m-d") . "\t";
            } else {
                $to_table .= "$accession[$field]" . "\t";
            }
        } else {
            $to_table .= "" . "\t";
        }
    }
    $to_table = str_replace("\t" . "$", "", $to_table);
    $to_table = preg_replace("/\r\n|\n\r|\n|\r/", " ", $to_table);
    $to_table .= "\t";
    print(trim($to_table));
    print "\n";
}