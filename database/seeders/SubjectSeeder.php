<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Subject::create(['S_id' => 'S_01','S_name'=>'Maths']);
         Subject::create(['S_id' => 'S_02','S_name'=>'Tamil']);
         Subject::create(['S_id' => 'S_03','S_name'=>'English']);
         Subject::create(['S_id' => 'S_04','S_name'=>'Science']);
         Subject::create(['S_id' => 'S_05','S_name'=>'Religion']);
         Subject::create(['S_id' => 'S_06','S_name'=>'History']);

    //      foreach ($subject as  $sub) {
    //         $sub = new Subject();
    //         $sub->S_id=$sub['S_id'];
    //         $sub->S_name=$sub['S_name'];
    //         $sub->save();
    // }
}
}