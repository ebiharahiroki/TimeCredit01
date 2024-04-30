<?php

namespace Tests\Feature;

use Tests\TestCase;

class HourControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_作成画面を表示できるか()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/post', [
            'title' => 'テスト投稿',
            'body' => 'テスト投稿をします',
        ]);

        $response->assertStatus(302);

        $this->assertDatabaseHas('posts', [
            'title' => 'テスト投稿',
            'body' => 'テスト投稿をします',
            'user_id' => $user->id,
        ]);

        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/hours/create', [

        ]);
        $this->get('/')->assertStatus(200);
    }
}
