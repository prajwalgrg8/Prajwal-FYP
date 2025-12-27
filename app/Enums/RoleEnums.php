<?php

namespace App\Enums;

enum RoleEnums : string
{
    case OWNER = 'owner';

    case CUSTOMER = 'customer';
    
    case SUPERADMIN = 'superadmin';
}
