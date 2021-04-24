<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompaniesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i = 0; $i < 100; $i++) {
            DB::table('companies')->insert([
                'company_name' => Str::random(10),
                'company_web' => Str::random(10),
                'company_address' => Str::random(10),
                'company_code' => Str::random(10),
                'company_phone' => Str::random(10),
            ]);
        }
    }

}
