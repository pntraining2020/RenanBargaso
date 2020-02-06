<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            [
                'first_name' => 'Renan',
                'middle_name' => 'Cañete',
                'last_name' => 'Bargaso',
            ],
            [
                'first_name' => 'Jakeniel',
                'middle_name' => 'Secret',
                'last_name' => 'Erim',
            ],
            [
                'first_name' => 'Grace',
                'middle_name' => 'Secret',
                'last_name' => 'Laborada',
            ],
            [
                'first_name' => 'Steven',
                'middle_name' =>'Paul',
                'last_name' => 'Jobs',
            ],
            [
                'first_name' => 'John',
                'middle_name' => 'Example',
                'last_name' => 'Doe',
            ],
        ];
        for($i=0; $i<count($names);$i++){
            DB::table('names')->insert($names[$i]);
        }
    }
}
