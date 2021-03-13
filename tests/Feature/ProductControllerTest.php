<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use ProductTypeSeeder;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->route = "/api/product";
        $this->seed(ProductTypeSeeder::class);

        $this->dataProduct1 = [
            "prod_quantity" => 10,
            "prod_name" => "Detergente liquido",
            "prod_type_id" => 1
        ];
    }

    public function testCreateWithoutDataProduct() : void
    {
        $data = [

        ];

        $this->post($this->route, $data)
            ->assertStatus(500);    
    }

    public function testCreateWithDataProduct() : void
    {
        $this->post($this->route, $this->dataProduct1)
            ->assertStatus(201);    
    }

    public function testUpdateQuantityProduct() : void
    {
        $createData = $this->post($this->route, $this->dataProduct1)
            ->assertStatus(201);

        $dataUpdate = [
            "prod_quantity" => 5
        ];

        $newData = $this->put($this->route . '/' . $createData['prod_id'], $dataUpdate);
        $newData->assertStatus(200);   
        
        $this->assertSame(15, $newData['prod_quantity']);
    }

    public function testUpdateProductName() : void
    {
        $createData = $this->post($this->route, $this->dataProduct1)
            ->assertStatus(201);

        $dataUpdate = [
            "prod_name" => 'Sabão em pedra'
        ];

        $newData = $this->put($this->route . '/' . $createData['prod_id'], $dataUpdate);
        $newData->assertStatus(200);   
        
        $this->assertSame('Sabão em pedra', $newData['prod_name']);
    }
}
