<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::truncate();

        Skill::create([
            'name' => 'JavaScript',
            'type' => 'technical'
        ]);

        Skill::create([
            'name' => 'PHP',
            'type' => 'technical'
        ]);

        Skill::create([
            'name' => 'Python',
            'type' => 'technical'
        ]);

        Skill::create([
            'name' => 'Public Speaking',
            'type' => 'soft'
        ]);
    }
}
