<?php

namespace App\Enums;

enum Status: string
{
    case Nbeggonen = 'Nog niet beggonen';
    case Beggonen = 'Beggonen';
    case Klaar = 'Klaar';
}