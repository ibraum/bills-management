<?php

namespace App\Interfaces\bills;


use Illuminate\Database\Eloquent\Collection;

interface BillListInterface
{
    public function execute () : Collection;
}
