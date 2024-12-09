<?php

namespace App\Enums;

enum Roles: string
{
    case Admin = 'admin';
    case Keuken = 'keuken';
    case Kassa = 'kassa';
    case Klant = 'klant';
}