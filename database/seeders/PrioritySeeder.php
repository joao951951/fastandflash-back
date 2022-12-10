<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Priority;


class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Priority::create([
            'desc_priority' => 'Baixa',
        ]);
        Priority::create([
            'desc_priority' => 'Urgente',
        ]);
        Priority::create([
            'desc_priority' => 'Emergente',
        ]);
    }
}
