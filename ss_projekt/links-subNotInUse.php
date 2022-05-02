<?php 
$school = '';
$work = '';
$shopping = '';
$sport = '';
$all = '';
$site  = $_GET['site'];

if($site == "school"){
    $school = 'style="font-weight: ;"';
}
if($site == "work"){
    $work = 'style="font-weight: ;"';
}
if($site == "shopping"){
    $shopping = 'style="font-weight: ;"';
}
if($site == "sport"){
    $sport = 'style="font-weight: ;"';
}
if($site == "all"){
    $all = 'style="font-weight: ;"';
}



?>