<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\advertisement;
use Illuminate\Support\Str;
use App\Models\frontend\tag;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\frontend\advertisement_images;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class AdvertisementController extends Controller
{
    
    private $uploadPath = "uploads/advertisement_images/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
   {
       
           $advertisement = advertisement::all();
           return view('backend.advertisement.index',compact('advertisement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('backend.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   // Start of Upload Files
   if ($request->hasFile('f_image')) {
    $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
    // get file name
    $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    // get extension
    $extension = $request->file('f_image')->getClientOriginalExtension();

    $fileNameToStore =  time() . '.' . $extension;
    // upload
    $path = $request->file('f_image')->move('public/uploads/advertisement', $fileNameToStore);
} else {
    $fileNameToStore = 'f_image.jpg';
}

$advertisement = new advertisement;
        $advertisement->f_image = $fileNameToStore;
        $advertisement->title = $request->title;
        $advertisement->text = $request->text;
        $advertisement->url = $request->url;
        $advertisement->ad_order = $request->ad_order;
        $advertisement->save();
       
       
       return redirect(route('admin.advertisement.index'));
 

}

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advertisement = advertisement::find($id);

        return view('backend.advertisement.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('f_image')) {
            $advertisement = advertisement::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($advertisement->f_image != "noimage.jpeg") {
                unlink('public/uploads/advertisement/'.$advertisement->f_image);
               
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/advertisement', $fileNameToStore);

            $advertisement->f_image = $fileNameToStore;
            $advertisement->save();
        
        }
              $advertisement->f_image = $fileNameToStore;
              $advertisement->title = $request->title;
              $advertisement->text = $request->text;
              $advertisement->url = $request->url;
              $advertisement->ad_order = $request->ad_order;
              $advertisement->save();
  
     
       
        // except image cus we handle it aboves
        return redirect(route('admin.advertisement.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $advertisement = advertisement::find($id);
      unlink('public/uploads/advertisement/' . $advertisement->image);
      $sliadvertisementder->delete();
      return redirect()->back()->with('message','advertisement Deleted Sucsessfully');
    }
}