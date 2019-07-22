<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OrderStatus extends Enum
{
    const Ordered  = 1;
    const Cooked = 2;
    const Delivered = 3;
}
