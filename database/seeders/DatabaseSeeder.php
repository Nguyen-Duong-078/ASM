<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $tags = [
            'Giải Ngoại hạng Anh',
            'La Liga',
            'Ligue 1',
            'Cúp C1',
            'World Cup',
            'Euro',
            'Gia đình',
            'Tình yêu',
            'Hôn nhân',
            'Giáo dục',
            'Học bổng',
            'Giáo viên',
            'Giáo dục tiểu học',
            'Giáo dục trung học',
            'Chương trình giảng dạy'
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }

}
