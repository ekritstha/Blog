<?php

namespace App\Http\Controllers;

// require 'vendor/autoload.php';

use Illuminate\Http\Request;
// use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\Response;
use App\Photo;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->images_url = storage_path('app/public/images');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('hello');
        // Image::configure(array('driver' => 'gd'));
        // $image = Image::make('https://upload.wikimedia.org/wikipedia/commons/b/b8/Messi_vs_Nigeria_2018.jpg')->resize(300, 200);
        // if (!file_exists($this->images_url)) {
        //     mkdir($this->images_url);
        // }
        // if ($files = $request->file('files')) {
        //     $files_name = str_replace(' ', '_', rand(1857, 9899) . '_' . $files->getClientOriginalName());
        //     $files->move($this->files_url, $files_name);
        // }
        return view('pages.showphoto');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addpicture');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Image::configure(array('driver' => 'gd'));
        $images = $request->file('image');
        if (!file_exists($this->images_url)) {
            mkdir($this->images_url);
        }
        $images_name = str_replace(' ', '_', rand(1857, 9899) . '_' . $images->getClientOriginalName());
        $images = Image::make($images)->resize(600, null, true); //returns an instance of Intervention\Image\Image , so cant save using move()
        $images->save($this->images_url . '/' . $images_name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function add()
    {
        // return view('pages.addpicture');
        dd('hello');
    }
}
