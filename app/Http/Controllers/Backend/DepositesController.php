<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Deposites;
 use App\Models\backend\Deposites as BackendDeposites;
 use App\Models\frontend\deposites_images;
 use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepositesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deposites = BackendDeposites::query()->join('users', 'users.id', '=', 'deposites.user_id')->select(
            'deposites.*',
            'users.full_name_tr'
        )->get();
        return view('backend.deposites.index', compact('deposites'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.deposites.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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
            $path = $request->file('f_image')->move('public/uploads/deposites', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $deposites = new BackendDeposites();
        $deposites->date = $request->date;
         $deposites->user_id = $request->user;
        $deposites->description = $request->description;
         $deposites->f_image =  $fileNameToStore;

         $deposites->save();
        // Start of Upload Files
        if ($request->hasFile('deposites_images')) {
            $all_images = $request->file('deposites_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $deposites_images = new deposites_images;
                $deposites_images->deposites_id = $deposites->id;
                $deposites_images->deposites_image_path = $image_name;
                $deposites_images->save();
            }
        }

        return redirect(route('admin.deposites.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendDeposites $deposites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $deposites = BackendDeposites::find($id);
         return view('backend.deposites.edit', compact('deposites', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\deposites $deposites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $deposites = BackendDeposites::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = BackendDeposites::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/deposites/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/deposites', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $deposites = BackendDeposites::find($id);
        $deposites->date = $request->date;
         
         $deposites->user_id = $request->user;
        $deposites->description = $request->description;
        $deposites->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $deposites_images = new deposites_images;
                $deposites_images->deposites_id = $id;
                $deposites_images->deposites_image_path = $image_name;
                $deposites_images->save();
            }
        }
        return redirect(route('admin.deposites.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\deposites $deposites
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deposites = BackendDeposites::find($id);
        $deposites->delete();
        return redirect()->back()->with('message', 'Deposites Deleted Successfully');
    }
}