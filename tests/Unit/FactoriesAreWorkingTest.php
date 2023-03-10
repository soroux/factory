<?php
namespace Tests\Unit;

use App\Factory\Shop\IShopFactory;
use Tests\TestCase;

class FactoriesAreWorkingTest extends TestCase
{
public function test_can_use_ebay_service()
{
$factory = app(IShopFactory::class);
$service = $factory->make('ebay');
$products = $service->getProducts();
dump($products);
self::assertEquals([
'Ebay Product Sample #1',
'Ebay Product Sample #2',
'Ebay Product Sample #3',
], $products);
}

public function test_can_use_amazon_service()
{
$factory = app(IShopFactory::class);
$service = $factory->make('amazon');
$products = $service->getProducts();
dump($products);
self::assertEquals([
'Amazon Product Sample #1',
'Amazon Product Sample #2',
'Amazon Product Sample #3',
], $products);
}
}
