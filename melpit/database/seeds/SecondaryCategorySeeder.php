<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id'                  => 1,
            'name'                => '学習指導案',
            'sort_no'             => 1,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 2,
            'name'                => '学習プリント',
            'sort_no'             => 2,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 3,
            'name'                => '指導教材',
            'sort_no'             => 3,
            'primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 4,
            'name'                => '学習指導案',
            'sort_no'             => 4,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 5,
            'name'                => '学習プリント',
            'sort_no'             => 5,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 6,
            'name'                => '指導教材',
            'sort_no'             => 6,
            'primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 7,
            'name'                => '学習指導案',
            'sort_no'             => 7,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 8,
            'name'                => '学習プリント',
            'sort_no'             => 8,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 9,
            'name'                => '指導教材',
            'sort_no'             => 9,
            'primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 10,
            'name'                => '学習指導案',
            'sort_no'             => 10,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 11,
            'name'                => '学習プリント',
            'sort_no'             => 11,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 12,
            'name'                => '指導教材',
            'sort_no'             => 12,
            'primary_category_id' => 4,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 13,
            'name'                => '学習指導案',
            'sort_no'             => 13,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 14,
            'name'                => '学習プリント',
            'sort_no'             => 14,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 15,
            'name'                => '指導教材',
            'sort_no'             => 15,
            'primary_category_id' => 5,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 16,
            'name'                => '学習指導案',
            'sort_no'             => 16,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 17,
            'name'                => '学習プリント',
            'sort_no'             => 17,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 18,
            'name'                => '指導教材',
            'sort_no'             => 18,
            'primary_category_id' => 6,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 19,
            'name'                => '学習指導案',
            'sort_no'             => 19,
            'primary_category_id' => 7,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 20,
            'name'                => '学習プリント',
            'sort_no'             => 20,
            'primary_category_id' => 7,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 21,
            'name'                => '指導教材',
            'sort_no'             => 21,
            'primary_category_id' => 7,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 22,
            'name'                => '学習指導案',
            'sort_no'             => 22,
            'primary_category_id' => 8,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 23,
            'name'                => '学習プリント',
            'sort_no'             => 23,
            'primary_category_id' => 8,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 24,
            'name'                => '指導教材',
            'sort_no'             => 24,
            'primary_category_id' => 8,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 25,
            'name'                => '学習指導案',
            'sort_no'             => 25,
            'primary_category_id' => 9,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 26,
            'name'                => '学習プリント',
            'sort_no'             => 26,
            'primary_category_id' => 9,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 27,
            'name'                => '指導教材',
            'sort_no'             => 27,
            'primary_category_id' => 9,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 28,
            'name'                => '学習指導案',
            'sort_no'             => 28,
            'primary_category_id' => 10,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 29,
            'name'                => '学習プリント',
            'sort_no'             => 29,
            'primary_category_id' => 10,
        ]);
        factory(SecondaryCategory::class)->create([
            'id'                  => 30,
            'name'                => '学習教材',
            'sort_no'             => 30,
            'primary_category_id' => 10,
        ]);
    }
}
