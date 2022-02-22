<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cinda = User::factory()->create([
            'name' => 'Cinda Rella'
        ]);
        $mike = User::factory()->create([
            'name' => 'Michael Scott'
        ]);
        $pam = User::factory()->create([
            'name' => 'Pamela Jeffries'
        ]);
        Post::factory(3)->create([
            'user_id' => $cinda->id
        ]);
        Post::factory(3)->create([
            'user_id' => $mike->id
        ]);
        Post::factory(3)->create([
            'user_id' => $pam->id
        ]);
    }
}
