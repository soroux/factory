<?php

namespace App\Factory\Shop;
use App\Services\Shop\IShopService;
interface IShopFactory
{
    public function make($name): IShopService;
}
