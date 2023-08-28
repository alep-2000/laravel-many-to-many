<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\Tecnology;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tecnologies = ['HTML', 'CSS', 'Javascript', 'VueJs', 'PHP', 'Laravel', 'SASS'];

        foreach($tecnologies as $tecnology){
            $new_tecnology = new Tecnology();

            $new_tecnology->name = $tecnology;
            $new_tecnology->slug = Str::slug($tecnology, '-');

            $new_tecnology->save();
        }
    }
}
