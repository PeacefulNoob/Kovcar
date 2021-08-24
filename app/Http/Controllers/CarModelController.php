<?php

namespace App\Http\Controllers;

use App\Car_Model;
use App\Manufacturer;
use DB;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufs = Manufacturer::all();
        return view('auth.createModel', compact('manufs'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'title' => 'required',
            'file[]' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
            'cover-photo' => 'mimes:mp4,mov,ogg,jpeg,png,jpg,svg',
            'brochure_pdf' => 'required',
            'persons' => 'required',
            'price' => 'required',
            'size' => 'required',
            'floor' => 'required',
            'room_count' => 'required',
            'street' => 'required',
            'location_id' => 'required',
            'property_type_id' => 'required',
            'calendar_id' => 'required',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $model = new Car_Model;
        $model->title = $request->input('title');
        $model->brochure_pdf = $request->file('brochure_pdf');
        $model->title_rus = $request->input('title_rus');
        $model->description_rus = $request->input('description_rus');
        $model->price = $request->input('price');
        $model->persons = $request->input('persons');
        $property->size = $request->input('size');
        $property->floor = $request->input('floor');
        $property->room_count = $request->input('room_count');
        $property->location_id = $request->input('location_id');
        $property->google_maps = $request->input('google_maps');
        $property->street = $request->input('street');
        $property->street_rus = $request->input('street_rus');
        $property->calendar_id = $request->input('calendar_id');
        $property->property_type_id = $request->input('property_type_id');
        $property->user_id = auth()->user()->id;
        $property->save();

        // dd(11);

        if (!empty($request->hasFile('file')) && !empty($request->hasFile('cover-photo'))) {
            foreach ($request->file('file') as $image) {
                $name = $image->getClientOriginalName();
                $extension = $image->getClientOriginalExtension();
                $fileName = time() . '_' . Str::random(5) . '.' . $extension;
                Image::make($image)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/images/property_images/' . $fileName);
                $data[] = $name;
                $image1 = new Image;
                $image1->title = json_encode($data);
                // cover photo
                $coverPhoto = $request->file('cover-photo');
                $name1 = $coverPhoto->getClientOriginalName();
                $extension1 = $coverPhoto->getClientOriginalExtension();
                $fileName1 = time() . '_' . Str::random(5) . '.' . $extension1;
                Image::make($coverPhoto)->encode('jpg', 75)->resize(1200, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('assets/images/property_images/' . $fileName1);
                // $data[] = $name1;
                // $image2 = new Image;
                // $image2->title = json_encode($data);

                DB::table('property_images')
                    ->insert(
                        [
                            'image' => $fileName,
                            'property_id' => $property->id,
                            'cover_image' => $fileName1
                        ]
                    );
            }
        }



        return redirect()->back()->with('success', 'Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $images = DB::table('model_images')->where('car_models_id', '=', $id)->get();
        $model = Car_Model::findOrFail($id);
        $manuf = Manufacturer::where('id',$model->manufacturers_id)->first();
        return view('site.car_model',compact('model','images','manuf'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $model = Car_Model::find($id)->first();
        return view('auth.editModel', compact('model'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_Model $car_Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_Model $car_Model)
    {
        //
    }
}
