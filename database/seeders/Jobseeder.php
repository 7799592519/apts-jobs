<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Job;

class Jobseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ts = Category::create(['name' => 'TS Govt', 'slug' => 'ts-govt']);
        $ap = Category::create(['name' => 'AP Govt', 'slug' => 'ap-govt']);

        Job::create([
            'category_id' => $ts->id,
            'title' => 'TSPSC Group 2 Notification',
            'description' => 'Telangana State Public Service Commission Group 2 recruitment.',
            'qualification' => 'Any Degree',
            'total_posts' => 783,
            'last_date' => '2026-11-30',
            'apply_link' => 'https://tspsc.gov.in'
        ]);

        Job::create([
            'category_id' => $ap->id,
            'title' => 'AP Police Constable',
            'description' => 'AP Police Department Constable Recruitment Notification.',
            'qualification' => 'Intermediate',
            'total_posts' => 6100,
            'last_date' => '2026-10-25',
            'apply_link' => 'https://slprb.ap.gov.in'
        ]);
    }
}
