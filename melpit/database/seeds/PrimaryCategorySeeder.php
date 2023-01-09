<?php

use Illuminate\Database\Seeder;
use App\Models\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => '国語',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => '数学',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => '英語',
            'sort_no' => 3,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 4,
            'name'    => '理科',
            'sort_no' => 4,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 5,
            'name'    => '社会',
            'sort_no' => 5,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 6,
            'name'    => '家庭科',
            'sort_no' => 6,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 7,
            'name'    => '体育',
            'sort_no' => 7,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 8,
            'name'    => '音楽',
            'sort_no' => 8,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 9,
            'name'    => '美術',
            'sort_no' => 9,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 10,
            'name'    => '特別支援',
            'sort_no' => 10,
        ]);
    }
}
