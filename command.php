#!/usr/bin/php
<?php

include("Command\Command.php");

$dogsWithActions = [
    "pasterz" => [
        "bark" => "bark",
        "hunt" => "hunt",
    ],
    "jamnik" => [
        "bark" => "bark",
        "hunt" => "hunt",
    ],
    "foksterier" => [
        "bark" => "bark",
        "hunt" => "hunt",
    ],
    "mops" => [
        "bark" => "bark"
    ],
    "pluszowy_mops" => [],
    "pudel_gumowy_z_piszczalka" => [
        "squeak" => "squeak"
    ],
];

if ($argc > 1) {
    $val = getopt("d:a:");
    switch ($val) {
        case !isset($val["d"]):
            echo "No dog specified!" . "\n";
            break;
        case !isset($val["a"]):
            echo "No action specified!" . "\n";
            break;
        case !array_key_exists($val["d"], $dogsWithActions):
            echo "No dog like this around here :/" . "\n";
            break;
        case (is_array($dogsWithActions[$val["d"]]) && !array_key_exists($val["a"], $dogsWithActions[$val["d"]])):
            echo "Wrong action, cannot do that :(" . "\n";
            echo "In case I'm a mops, then I can do it but I'm to lazy" . "\n";
            break;
        default:
            $dogWithAction = $dogsWithActions[$val["d"]];
            $command = new Command();
            if ($dogWithAction[$val["a"]] == 'bark') {
                echo $command->getBark();
            } elseif ($dogWithAction[$val["a"]] == 'hunt') {
                echo $command->getHunt();
            } elseif ($dogWithAction[$val["a"]] == 'squeak') {
                echo $command->getSqueak();
            }
            break;
    }


} else {
    echo "No arguments passed";
}


