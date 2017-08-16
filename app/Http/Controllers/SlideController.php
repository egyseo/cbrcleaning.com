<?php

namespace cbrcleaning\Http\Controllers;

use Illuminate\Http\Request;
use cbrcleaning\Http\Request\slideRequest;
use cbrcleaning\Slide;


class SlideController extends Controller
{

    public function index()
    {
        $slides = Slide::orderBy('order')->paginate();
        return view('backend.slideshow.index', compact('slides'));
    }


    public function create()
    {
        return view('backend.slideshow.create');
    }


    public function store(SlideRequest $request)
    {
        $slide = new Slide;      
        $slide->backgroundimage = $request->backgroundimage;
        $slide->iconimage = $request->iconimage;       
        $slide->iconimage_position = $request->iconimage_position;
        $slide->iconimage_col_size = $request->iconimage_col_size;
        $slide->text_h1 = $request->text_h1;
        $slide->text_h2 = $request->text_h2;
        $slide->text_col_size = $request->text_col_size;
        $slide->save();
        return redirect()->route('administrator.slide.index');
    }


    public function show($id)
    {
        $slide = Slide::find($id);        
        return view('backend.slideshow.show', compact('slide'));
    }

    public function edit($id)
    {
        $slide = Slide::find($id);        
        return view('backend.slide.edit', compact('slide'));
    }


    public function update(SlideRequest $request, $id)
    {
        $slide = Slide::find($id);      
        $slide->backgroundimage = $request->backgroundimage;
        $slide->iconimage = $request->iconimage;
        $slide->iconimage_position = $request->iconimage_position;
        $slide->iconimage_col_size = $request->iconimage_col_size;
        $slide->text_h1 = $request->text_h1;
        $slide->text_h2 = $request->text_h2;
        $slide->text_col_size = $request->text_col_size;
        $slide->save();
        return redirect()->route('administrator.slide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return back()->with('info', 'Successfully Deleted!!');
    }
}
