<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function verlaengerung($id)
    {
        $paymentDateQuery = DB::table('kaufs')
            ->select('kaufs.bezahldatum')
            ->where('kaufs.u_id', $id)->value('bezahldatum');
        $paymentDate = new \DateTime($paymentDateQuery);

        $now = new \DateTime();
        $interval = date_diff($paymentDate,$now);

        if ($interval->m >= 3 && $interval->d > 0) {
            session(['verlaengerung' => 'true']);
        }
        return redirect('/home');
    }
}
