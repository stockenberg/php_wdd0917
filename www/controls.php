<?php
// IF ELSE
if(true){
    echo "Hallo";
}
elseif (true && false){
    echo "hmm..";
}
else{
    echo "neh..";
}

// SWITCH
$mySwitch = 2;
switch ($mySwitch){
    case 1 :
        echo "ist 1";
        break;

    default:
        echo "fallback";
        break;
}

// Loops

for($i = 0; $i < 10; $i++){
    echo $i;
}

/*
while(true){
    echo "test";
}
*/

/*
do{
    echo "test";
}while(true);
*/
$arr = [
    0 => [
        "firstname" => "Marten",
    ],
    1 => [
        "firstname" => "Test",
        "lastname" => "Hallo"
    ]
];

/*
 * Foreach
 */
foreach ($arr as $index => $user_data) {
    // echo $value['firstname'];

    foreach ($user_data as $field => $value) {
        echo $field;
        echo $value;
    }

    // foreach ([1,2,3,4,5] as $k => $v){}
    // foreach ($arr as $k){}
}

/* Ternary */
$var = true ? "true" : "false";
$var = true ?: "halo";
$var = $myVar ?? NULL;
$var = true <=> false; // -1 0 1

