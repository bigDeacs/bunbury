<?php namespace App\Http\Controllers;

use App\Ranking;
use App\Brochure;
use App\Label;
use App\Http\Requests\CreateRank;

class BrochurerankingsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Brochure')->get();
		return view('brochurerankings.index', compact('rankings'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Brochure')->get();
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Brochure')->orderBy('name', 'ASC')->get();
		foreach($labels as $label)
		{
			$brochures[$label['name']] = Brochure::where('status', '=', '1')->where('label_id', '=', $label['id'])->orderBy('name', 'ASC')->lists('name', 'id');
		}
		if(count($rankings))
		{
			return view('brochurerankings.create', compact('brochures', 'rankings'));
		}
		return view('brochurerankings.create', compact('brochures'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateRank $request)
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Brochure')->delete();
		$rankable_type = $request->rankable_type;
		$count = count($request->rankable_id);
		for ($i = 0; $i < $count; $i++) {
		    $ranking = Ranking::create(['rank' => $i+1, 'rankable_type' => $rankable_type, 'rankable_id' => $request->rankable_id[$i]]);
		} 
		return redirect('home/brochurerankings');
	}
}
