<?php

namespace App\Http\Controllers;

use DB;
use App\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function index()
    {
        // dd('hello');
        $image = DB::select('select image from logos ORDER BY created_at DESC LIMIT 1');
        return view('dashboard.layout.logo')->with('logos', $image);
    }
    public function logoUploadPost()

    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $fileSize =  request()->image->getClientSize();

        request()->image->move(public_path('images'), $imageName);
        $logo = new Logo;
        $logo->image = $imageName;
        $logo->size = $fileSize;
        $logo->save();


        return back()

            ->with('success', 'You have successfully upload image.')

            ->with('image', $imageName);
    }
    public function update(Request $request)
    {
        /*$up = Logo::findWithoutFail($id);
        $up->update($request->all());*/

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            $fileSize =  request()->image->getClientSize();
            request()->image->move(public_path('images'), $imageName);
            $logo = new Logo;
            $logo->image = $imageName;
            $logo->size = $fileSize;
            $logo->save();
        }
    }
}
