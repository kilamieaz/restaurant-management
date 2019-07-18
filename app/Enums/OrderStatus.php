<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class OrderStatus extends Enum
{
    const Ordered  = 0;
    const Cooked = 1;
    const Delivered = 2;
}
