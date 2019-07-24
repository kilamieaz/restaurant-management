<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const Admin = 1;
    const Cashier = 2;
    const Chef = 3;
    const Waiter = 4;
    const Member = 5;
}
