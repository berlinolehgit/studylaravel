<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{

    public function testOfferEdit()
    {
        $offer = Factory(\App\Models\Offer::class)->create();
        $data = [
            'type_object' => \Faker\Factory::create()->randomElement(['flat','house']),
            'price' => random_int(100,10000),
            'type_price' => \Faker\Factory::create()-> randomElement(['USD','EUR','UAH']),
            'type_wall'=> \Faker\Factory::create()-> randomElement(['panel','brick']),
            'number_rooms' => random_int(1,4),
            'user_id' => random_int(1,13),
            'phone' => \Faker\Factory::create()->phoneNumber,
            'information' => \Faker\Factory::create()->text,
        ];
        $response = $this->post(
            route('offer.edit',$offer->id),
            $data
        );
        $offer->refresh();
        $this->assertFalse((bool)$response->exception, ($response->exception)?$response->exception:false);
        $response->assertStatus(302);
    }

    public function testOfferAdd()
    {
        $offer = Factory(\App\Models\Offer::class)->create();
        $response = $this->post(
            route('offer.add')
        );
        $offer->refresh();
        $this->assertFalse((bool)$response->exception, ($response->exception)?$response->exception:false);
        $response->assertStatus(302);
    }

}
