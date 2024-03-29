<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_type')->insert([

            [
                'type' => 'Billete sencillo'

            ],
            [
                'type' => 'Abono mensual'


            ],
            [
                'type' => 'Abono trimestral'


            ]

        ]);
    }
}
