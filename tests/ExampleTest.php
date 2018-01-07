<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test search by name .
     *
     * @return void
     */
    public function testSearchByName()
    {
      $this->json('GET', '/api/v1/search_hotels', ['name' => 'Concorde Hotel'])
               ->seeJson([
                   'name' => 'Concorde Hotel',
               ]);
    }


    /**
     * A basic functional test search by city .
     *
     * @return void
     */
    public function testSearchByCity()
    {
      $this->json('GET', '/api/v1/search_hotels', ['city' => 'dubai'])
               ->seeJson([
                   'city' => 'dubai',
               ]);
    }


    /**
     * A basic functional test search by price .
     *
     * @return void
     */
    public function testSearchByPrice()
    {
      $this->json('GET', '/api/v1/search_hotels', ['price_from' => '100','price_to'=>'200'])
            ->assertJsonStructure([
                 'name',
                 'price',
                 'city',
                 'availability',
         ]);
    }


    /**
     * A basic functional test search by date .
     *
     * @return void
     */
    public function testSearchByDate()
    {
      $this->json('GET', '/api/v1/search_hotels', ['date_from' => '10-10-2020','date_to'=>'15-10-2020'])
            ->assertJsonStructure([
                 'name',
                 'price',
                 'city',
                 'availability',
         ]);
    }
}
