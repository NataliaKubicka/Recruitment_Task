<?php

interface CommandInterface
{
    public function getBark(): string;
    public function getSqueak(): string;
    public function getHunt(): string;
}