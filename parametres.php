<?php

/*
list de parametres.
 */

$dbname='community.db';
//$scholars_db ="raw_scholars";
$fichier = "CSSscholars20Oct2011.csv";

$min_num_friends=0;// nombre minimal de voisin que doit avoir un scholar pour être affiché
//$fichier = "Scholars13Sept2011.csv";
//$fichier = "test2.csv";
$drop_tables=true; // on efface les tables
$language='english';
$file_sep=',';
//$scholar_filter=" where country='France' AND status='o'";
//$scholar_filter=" where country='France' AND want_whoswho='Yes' AND css_member='Yes'";
//$scholar_filter=" where css_member='Yes' AND want_whoswho='Yes'";
//$scholar_filter=" where css_member='Yes' OR want_whoswho='Yes'";
//$scholar_filter="where css_member='Yes'";
//$scholar_filter="";
$scholar_filter=" where country='France' AND want_whoswho='Yes'";
//$scholar_filter=" where country='France'";

$compress='No';

?>
