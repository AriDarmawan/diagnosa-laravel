<?php

use Illuminate\Database\Seeder;
use App\Symptom;
class SymptomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $symptoms =[
            ['symptom_id'=>1	,'symptom_name'=>'Sesak nafas'],
            ['symptom_id'=>2	,'symptom_name'=>'nyeri dada'],
            ['symptom_id'=>3	,'symptom_name'=>'batuk'],
            ['symptom_id'=>4	,'symptom_name'=>'cegukan'],
            ['symptom_id'=>5	,'symptom_name'=>'pernafasan yang cepat'],
            ['symptom_id'=>6	,'symptom_name'=>'nyeri perut'],
            ['symptom_id'=>7	,'symptom_name'=>'denyut jantung cepat'],
            ['symptom_id'=>8	,'symptom_name'=>'kulit lembab'],
            ['symptom_id'=>9	,'symptom_name'=>'kulit berwarna kebiruan'],
            ['symptom_id'=>10,'symptom_name'=>'nyeri pinggul'],
            ['symptom_id'=>11,'symptom_name'=>'nyeri tungkai'],
            ['symptom_id'=>12,'symptom_name'=>'tekanan darah rendah'],
            ['symptom_id'=>13,'symptom_name'=>'denyut nadi lemah atau tak teraba'],
            ['symptom_id'=>14,'symptom_name'=>'pusing'],
            ['symptom_id'=>15,'symptom_name'=>'pingsan'],
            ['symptom_id'=>17,'symptom_name'=>'cemas'],
            ['symptom_id'=>18,'symptom_name'=>'Kelelahan'],
            ['symptom_id'=>19,'symptom_name'=>'Hilang nafsu makan'],
            ['symptom_id'=>20,'symptom_name'=>'Berat badan menurun'],
            ['symptom_id'=>21,'symptom_name'=>'Berkeringat'],
            ['symptom_id'=>22,'symptom_name'=>'demam'],
            ['symptom_id'=>23,'symptom_name'=>'Batuk berdahak'],
            ['symptom_id'=>24,'symptom_name'=>'Mimisan'],
            ['symptom_id'=>25,'symptom_name'=>'Lemas'],
            ['symptom_id'=>26,'symptom_name'=>'Ngantuk']
        ];
        foreach($symptoms as $symptom){
            Symptom::create($symptom);
        }
    }
}
