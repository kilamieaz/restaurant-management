<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const Admin  = 0;
    const Cashier = 1;
    const Chef = 2;
    const Waiter = 3;
    const Member = 4;
}
