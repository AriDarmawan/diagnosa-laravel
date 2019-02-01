<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
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

        $tmpSymptom1 = $request->post('symptomsList');

        $message =$this->verdict->getVerdict($tmpSymptom1);

        event(new ChatEvent($message, $tmpSymptom1));
    }

    public function store( Request $request)
    {

    }

    public function diagnosa(Request $request)
    {
        return $request->all();
    }


}
