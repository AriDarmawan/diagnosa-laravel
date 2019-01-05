<?php

use Illuminate\Database\Seeder;
use App\Diagnosis;

class DiagnosisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $diagnoses = [
            ['disease_id'=>2,'symptom_id'=>18],
            ['disease_id'=>2,'symptom_id'=>19],
            ['disease_id'=>2,'symptom_id'=>20],
            ['disease_id'=>2,'symptom_id'=>21],
            ['disease_id'=>2,'symptom_id'=>22],
            ['disease_id'=>2,'symptom_id'=>23],
            ['disease_id'=>5,'symptom_id'=>1],
            ['disease_id'=>5,'symptom_id'=>2],
            ['disease_id'=>5,'symptom_id'=>3],
            ['disease_id'=>5,'symptom_id'=>4],
            ['disease_id'=>5,'symptom_id'=>5],
            ['disease_id'=>5,'symptom_id'=>6],
            ['disease_id'=>6,'symptom_id'=>1],
            ['disease_id'=>6,'symptom_id'=>2],
            ['disease_id'=>6,'symptom_id'=>3],
            ['disease_id'=>6,'symptom_id'=>5],
            ['disease_id'=>6,'symptom_id'=>7],
            ['disease_id'=>6,'symptom_id'=>8],
            ['disease_id'=>6,'symptom_id'=>9],
            ['disease_id'=>6,'symptom_id'=>10],
            ['disease_id'=>6,'symptom_id'=>11],
            ['disease_id'=>6,'symptom_id'=>12],
            ['disease_id'=>6,'symptom_id'=>13],
            ['disease_id'=>6,'symptom_id'=>14],
            ['disease_id'=>6,'symptom_id'=>15],
            ['disease_id'=>6,'symptom_id'=>16],
            ['disease_id'=>6,'symptom_id'=>17],
            ['disease_id'=>7,'symptom_id'=>14],
            ['disease_id'=>7,'symptom_id'=>18],
            ['disease_id'=>7,'symptom_id'=>22],
            ['disease_id'=>7,'symptom_id'=>25],
            ['disease_id'=>7,'symptom_id'=>26],
            ['disease_id'=>8,'symptom_id'=>14],
            ['disease_id'=>8,'symptom_id'=>18],
            ['disease_id'=>8,'symptom_id'=>22],
            ['disease_id'=>8,'symptom_id'=>24],
            ['disease_id'=>8,'symptom_id'=>25],
            ['disease_id'=>8,'symptom_id'=>26]
        ];
        foreach($diagnoses as $diagnosis){
            Diagnosis::create($diagnosis);
        }
    }
}
