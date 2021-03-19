<?php

namespace Tests\Unit\Products;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    public function test_it_uses_slug_for_route_key_name() {
        $product = new Product();

        $this->assertEquals($product->getRouteKeyName(), 'slug');
    }
}
