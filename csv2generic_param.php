<?php

/*
list de parametres.
 */

$dbname='innovatives.sqlite';// nom de la base sqlite utilisée par les scripts
//$dbname='scholar_test_data.db';
$language='french';





$fichier = "csv/cnrs/innovatives_shs_template.csv";

$all=true;// dit s'il faut tenir compte du who's who approval
if ($all){
    echo 'WARNING ALL IS ON';
}
$target_scholar='davidchavalarias';
//$fichier = "csv/CNRS.csv";
//$fichier = "debug.csv";


//$orga_csv="csv/org22Nov11.csv";


$min_num_friends=0;// nombre minimal de voisin que doit avoir un scholar pour être affiché
//$fichier = "Scholars13Sept2011.csv";
//$fichier = "test2.csv";
$drop_tables=true; // dit s'il faut réinitialiser les tables
$file_sep=',';

// filtres pour filter les scholars inclus dans le gexf
//$scholar_filter=" where country='France' AND status='o'";
//$scholar_filter=" where country='France' AND want_whoswho='Yes' AND css_member='Yes'";
//$scholar_filter="where css_member='Yes' AND want_whoswho='Yes'";
$scholar_filter="";
//$scholar_filter="where css_member='Yes'";
//$scholar_filter="";
//$scholar_filter=" where country='France'";

//$compress='No';

?>
