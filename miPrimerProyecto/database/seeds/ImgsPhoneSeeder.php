<?php

use App\RutasPhones;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImgsPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       RutasPhones::create([
            "tittle" => 'Honor 8X Front',
            "description" => 'Honor 8x by Huawei.',
            "rutaImg" => 'honor8x.png'
        ]);

        RutasPhones::create([  
            "tittle" => 'Honor 8X Back',
            "description" => 'Honor 8x by Huawei.',
            "rutaImg" => 'honor8xback.png'
        ]);

        RutasPhones::create([
            "tittle" => 'Nexus 6p Front',
            "description" => 'Nexus 6p by Huawei and Google.',
            "rutaImg" => 'nexus6p.png'
        ]);

        RutasPhones::create([
            "tittle" => 'Nexus 6p Back',
            "description" => 'Nexus 6p by Huawei and Google.',
            "rutaImg" => 'nexus6pback.png'
        ]);

        factory(RutasPhones::class, 4)->create();
    }
}
