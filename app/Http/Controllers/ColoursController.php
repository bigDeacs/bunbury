<?php namespace App\Http\Controllers;

use App\Colour;
use App\Label;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateColour;
use App\Http\Requests\UpdateColour;

class ColoursController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$colours = Colour::all();
		return view('colours.index', compact('colours'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Colour')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('colours.create', compact('labels'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateColour $request)
	{
		$colour = Colour::create($request->all());
		if($request->hasFile('file'))
		{
			if($request->file('file')->isValid()) 
			{
				$upload = $request->file('file');
				$moveUpload = $upload->move(public_path() . '/uploads', $filename = time() . '-' . $upload->getClientOriginalName());
				$colour->file = $filename;
			} else {
				return redirect()->back()->withInput();
			}
		} 
		$colour->save();
		return redirect('home/colours');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('home/colours');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$colour = Colour::find($id);
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Colour')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('colours.edit', compact('colour', 'labels'));
	}

	public function update(UpdateColour $request, $id)
	{
		$colour = Colour::find($id);
		$colour->update($request->all());
		$oldImage = $colour->file;
		if($request->hasFile('file'))
		{
			if($request->file('file')->isValid()) 
			{
				$upload = $request->file('file');
				$moveUpload = $upload->move(public_path() . '/uploads', $filename = time() . '-' . $upload->getClientOriginalName());
				$colour->update(['file' => $filename]);
				File::delete(public_path() . '/uploads/' . $oldImage);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$colour->save();		
		return redirect('home/colours');
	}

	public function activate($id)
	{
		$colour = Colour::find($id);
		$colour->status = 1;
		$colour->save();

		return redirect('home/colours');
	}

	public function deactivate($id)
   	{
   		$colour = Colour::find($id);
   		$colour->status = 0;
		$colour->save();

      	return redirect('home/colours');
   	}

}
