<?php

include('Interface\CommandInterface.php');

class Command implements CommandInterface
{
    public function getBark(): string {
        return "Hau Hau!";
    }

    public function getSqueak(): string {
        return "Squeak squeak!";
    }

    public function getHunt(): string {
        return "I'm hunting!";
    }
}