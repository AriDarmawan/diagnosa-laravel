<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Verdict extends Model
{
    //todo : ALTER TABLE symptoms ADD FULLTEXT (symptom_name);
    public function getVerdict($symptoms)
    {
//        $ids = join("','",$symptoms);
//        $verdict = DB::select("select
//                              penyakit.disease_name,
//                              @total := (select count(1) from diagnoses diagnosa1 where diagnosa1.disease_id=penyakit.disease_id) total_symtomp,
//                              @selected := (select
//                                              count(1)
//                                            from diagnoses diagnosa2
//                                                   inner join symptoms gejala2 on diagnosa2.symptom_id = gejala2.symptom_id
//                                                   inner join diseases penyakit2 on diagnosa2.disease_id = penyakit2.disease_id
//                                            where penyakit2.disease_id=penyakit.disease_id and gejala2.symptom_name in ('$ids')) symtomp,
//                              (@selected/@total)*100 percentage
//                            from diagnoses diagnosa
//                                   inner join symptoms gejala on diagnosa.symptom_id = gejala.symptom_id
//                                   inner join diseases penyakit on diagnosa.disease_id = penyakit.disease_id
//                            where gejala.symptom_name in ('$ids')
//                            group by diagnosa.disease_id,penyakit.disease_name,penyakit.disease_id
//                            order by percentage desc,symtomp desc ");
        $verdict = DB::select("select
                              penyakit.disease_name,
                              @total := (select count(1) from diagnoses diagnosa1 where diagnosa1.disease_id=penyakit.disease_id) total_symtomp,
                              @selected := (select
                                              count(1)
                                            from diagnoses diagnosa2
                                                   inner join symptoms gejala2 on diagnosa2.symptom_id = gejala2.symptom_id
                                                   inner join diseases penyakit2 on diagnosa2.disease_id = penyakit2.disease_id
                                            where penyakit2.disease_id=penyakit.disease_id and gejala2.symptom_id in (SELECT
                                                                                                                        symptom_id
                                                                                                                      from symptoms where MATCH (symptom_name) AGAINST ('~$symptoms' in boolean mode)
                                                                                                                      group by MATCH (symptom_name) AGAINST ('~$symptoms'))) symtomp,
                              CONCAT((@selected/@total)*100, '%') percentage
                            from diagnoses diagnosa
                                   inner join symptoms gejala on diagnosa.symptom_id = gejala.symptom_id
                                   inner join diseases penyakit on diagnosa.disease_id = penyakit.disease_id
                            where gejala.symptom_id in (SELECT
                                                          symptom_id
                                                        from symptoms where MATCH (symptom_name) AGAINST ('~$symptoms' in boolean mode)
                                                        group by MATCH (symptom_name) AGAINST ('~$symptoms'))
                            group by diagnosa.disease_id,penyakit.disease_name,penyakit.disease_id
                            order by percentage desc,symtomp desc ");
        return $verdict;
    }
}
