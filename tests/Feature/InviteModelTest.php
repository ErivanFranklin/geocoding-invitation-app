<?php

namespace Tests\Feature;

use App\Models\InviteModel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InviteModelTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_invite_method()
    {

        $expected = ["latitude" => 53.2451022, "affiliate_id" => 4, "name" => "Inez Blair", "longitude" => -6.238335, "kilometers" => 10];

        $invite = new InviteModel();

        $response = $invite->getAllInvites();

        $this->assertEquals($expected,  $response[0]);
    }
}
