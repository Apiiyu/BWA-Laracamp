<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $camps = [
      [
        'title' => 'Full-stack Javascript Developer',
        'slug' => Str::slug('Full-stack Javascript Developer'),
        'price' => 755000,
        'created_at' => date('Y-m-d H:i:s', time()),
        'created_at' => date('Y-m-d H:i:s', time())
      ],
      [
        'title' => 'Full-stack Laravel Developer',
        'slug' => Str::slug('Full-stack Laravel Developer'),
        'price' => 399000,
        'created_at' => date('Y-m-d H:i:s', time()),
        'created_at' => date('Y-m-d H:i:s', time())
      ],
    ];

    /*  
      1st Method
        foreach ($camps as $key => $camp) {
          Camp::create($camp);
        }
    */

    // 2nd Method
    Camp::insert($camps);
  }
}
