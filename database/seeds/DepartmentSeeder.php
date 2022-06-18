<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name_ar'      => 'ناجز',
            'name_en'      => 'Nages',
            'image'        => 'default.png'
        ]);

        Department::create([
            'name_ar'      => 'خدمات ابشر',
            'name_en'      => 'Khadamat Absher',
            'image'        => 'default.png'
        ]);

        Department::create([
            'name_ar'      => 'خدمات مساند',
            'name_en'      => 'Khadamat Mosaned',
            'image'        => 'default.png'
        ]);

        Department::create([
            'name_ar'      => 'خدمات وزاره العدل',
            'name_en'      => 'Khadmat Eladel',
            'image'        => 'default.png'
        ]);
    }
}
