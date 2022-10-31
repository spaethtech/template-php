<?php
declare(strict_types=1);

#require_once __DIR__."/vendor/autoload.php";

use Robo\Symfony\ConsoleIO;
use Robo\Tasks;

class RoboFile extends Tasks
{
    function hello(ConsoleIO $io, $world)
    {
        $io->say("Hello, $world");
    }
}

