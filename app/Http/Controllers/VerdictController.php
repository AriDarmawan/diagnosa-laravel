<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verdict;
class VerdictController extends Controller
{
    //
    public function getVerdict(Request $request){
        $symptoms = explode(',',$request->post('symptoms'));
        $verdict = new Verdict();
        return $verdict->getVerdict($symptoms);
    }
}
