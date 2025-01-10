<?php

namespace App\Enums;

enum Status: string
{
    case Nog_niet_beggonen = 'Nog niet beggonen';
    case Beggonen = 'Beggonen';
    case Klaar = 'Klaar';
}