<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verdict;
class VerdictController extends Controller
{

    private $verdict;

    public function __construct()
    {
        $this->verdict = new Verdict();
    }

    //
    public function getVerdict(Request $request)
    {
//        $symptoms = explode(',',$request->post('symptoms'));
        $tmpSymptom1 = $request->post('symptom');
        $symptomsChecks = $request->symptomCheckbox;


        $symptoms = null;
        if ($tmpSymptom1 != null)
        {
            $symptoms = $tmpSymptom1;
        }
        elseif ($symptomsChecks != null)
        {
            foreach ($symptomsChecks as $symptomsCheck)
            {
                $symptoms = $symptoms . " " . $symptomsCheck;
            }
        }

        return $this->verdict->getVerdict($symptoms);
    }

    public function store( Request $request)
    {

    }

    public function diagnosa(Request $request)
    {
        return $request->all();
    }


}
