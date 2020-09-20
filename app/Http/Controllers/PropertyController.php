<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Http\File;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::paginate(6);

        // dd($property->filenames);
        return view('pages.property.index_property', ['properties' => $property]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.property.create_property');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(request()->all());



        // $this->validate($request, [
        //     'filenames' => 'required',
        //     'filenames.*' => 'mimes:doc,pdf,docx,zip'
        // ]);


        if ($request->hasfile('filenames')) {
            foreach ($request->file('filenames') as $file) {

                $name = time() . $file->getClientOriginalName() . '.' . $file->extension();
                $file->move(public_path() . '/files/', $name);
                $data[] = $name;
            }
        }


        Property::create([
            'ad_type' => $request['type'],
            'bed' => $request['bed'],
            'bath' => $request['bath'],
            'size' => $request['build'],
            'prop_type' => $request['property-type'],
            'name' => $request['property-name'],
            'price' => $request['price'],
            'additional_info' => $request['additional-info'],
            'address_address' => $request['address_address'],
            'address_latitude' => $request['latitude'],
            'address_longitude' => $request['longitude'],
            'filenames' => json_encode($data)
        ]);

        return back()->with('status', 'Property published!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {

        return view('pages.property.show_property', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
