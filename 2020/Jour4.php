<?php
$test = file_get_contents("input/jour4");
$passBruts = explode(PHP_EOL.PHP_EOL, $test);

$ToTest = ["byr","iyr","eyr","hgt","hcl","ecl","pid"];
$validPass = 0;

foreach ($passBruts as $passBrut){
    $valid = true;
    $data = [];
    $passOneLine = join(" ", explode(PHP_EOL, $passBrut));
    $fields = explode(" ",$passOneLine);
    foreach ($fields as $field){
        $fieldName = explode(":",$field);
        $data[$fieldName[0]] = $fieldName[1];
    }

    if(!(isset($data["byr"]) && isset($data["iyr"]) && isset($data["eyr"]) && isset($data["hgt"]) && isset($data["hcl"]) && isset($data["ecl"]) && isset($data["pid"]))){
        $valid = false;
    }

    if (!($valid && $data["byr"] >= 1920 && $data["byr"] <= 2002)){
        $valid = false;
    }

    if (!($valid && $data["iyr"] >= 2010 && $data["iyr"] <= 2020)){
        $valid = false;
    }

    if (!($valid && $data["eyr"] >= 2020 && $data["eyr"] <= 2030)){
        $valid = false;
    }

}

echo $validPass;



