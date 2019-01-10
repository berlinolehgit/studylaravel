<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testEditUser()
    {
        $user = Factory(\App\Models\User::class)->create();
        $data = [
            'name' => \Faker\Factory::create()-> name,
            'email' => \Faker\Factory::create()->email,
            'phone' => \Faker\Factory::create()->phoneNumber,
        ];
        $response = $this->post(
            route('user.edit',$user->id),
            $data
        );
        $user->refresh();
//        $this->assertFalse((bool)$response->exception, ($response->exception)?$response->exception:false);
        $response->assertStatus(302);
    }



}
