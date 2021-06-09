<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = new Type();
        $type->id = 1;
        $type->name = 'Cà phê';
        $type->description = 'Làm từ những hạt cà phê nguyên chất';
        $type->save();

        $type = new Type();
        $type->id = 2;
        $type->name = 'Sinh tố';
        $type->description = 'Làm từ hoa quả';
        $type->save();
    }
}
