<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const Admin  = 0;
    const Chef = 1;
    const Waiter = 2;
    const Cashier = 3;
    const Member = 4;
}
