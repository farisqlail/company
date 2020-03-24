<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Property;
use App\Type;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(10);

        return view('admin.property.index', compact('properties'));
    }

    // public function search(Property $property)
    // {
    //    $title = Property::get('title');
    //    if($title != "" ) {
    //        $properties = Property::where([
    //         'title', 'like', '%' .$title. '%'
    //        ])->get();
    //         if(count($properties) > 0)
    //             return view('admin.propert.index', compact('properties', 'title'))->withDetails($properties)->withQuery($title);
    //    }

    //     return view('admin.property.index', compact('properties', 'title'));
    // }

    public function create()
    {
        $types = Type::all();
        return view('admin.property.create', compact('types'));
    }

    public function store()
    {
        $harga = str_replace('.','',request('harga'));
        Alert::success('Success', 'Berhasil diupload');

        Property::create([
            'title' => request('title'), 
            'slug' => str_slug(request('title')),
            'type_id' => request('type_id'),
            'harga' => $harga, 
            'deskripsi' => request('deskripsi'), 
            'image' => request('image')->store('properties'), 
            'type' => request('type')

        ]);

        return redirect()->route('property.index');
    }

    public function show($id)
    {
        //
    }

    public function edit(Property $property)
    {
        $types = Type::all();
        
        return view('admin.property.edit', compact('property', 'types'));
    }

    public function update(Property $property)
    {

        if($property->image){
            \Storage::delete($property->image);
        }
        Alert::success('Update Berhasil');

        $harga = str_replace('.','',request('harga'));

        $property->update([
            'title' => request('title'), 
            'slug' => str_slug(request('title')),
            'harga' => $harga, 
            'deskripsi' => request('deskripsi'), 
            'image' => request('image')->store('properties'), 
            'type' => request('type')
        ]);

        return redirect()->route('property.index');

    }

    public function destroy(Property $property)
    {
        $property->delete();
        \Storage::delete($property->image);

    }
}
