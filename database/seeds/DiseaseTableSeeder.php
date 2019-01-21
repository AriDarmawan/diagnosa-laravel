<?php

use Illuminate\Database\Seeder;
use App\Disease;
class DiseaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $diseases = [
            ['disease_id'=>2,	'disease_name'=>'Abses Paru'],
            ['disease_id'=>5,	'disease_name'=>'Efusi Pleura'],
            ['disease_id'=>6,	'disease_name'=>'Emboli Paru'],
            ['disease_id'=>7,	'disease_name'=>'Demam Berdarah'],
            ['disease_id'=>8,	'disease_name'=>'Demam Berdarah Dengung']
        ];
        foreach($diseases as $disease){
            Disease::create($disease);
        }
    }
}
