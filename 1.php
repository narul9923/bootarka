<?php

$name = "Narul Hidayah";
$addreas = "Depok";
$hobbies = ['Ngoding','Music'];
$is_married = 0;
$school = [
    'highSchool' => 'SMK Citra Negara',
    'university' => ''
];
$skill = [
    'Web' => ['HTML', 'CSS','PHP'],
    'Music' => ['Gitar','Piano']
];

$data = array(
    'name' => $name,
    'addreas' => $addreas,
    'hobbies' => $hobbies,
    'is_married' => $is_married,
    'school' => $school,
    'skill' => $skill 
);

$json = json_encode($data);
?><code><?php echo $json; ?></code>
<?php
?>