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
        $deposites = BackendDeposites::query()->join('users', 'users.id', '=', 'dues.user_id')->select(
            'dues.*',
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
        // $total = BackendDeposites::query()->select(DB::raw('total + ' . $request->dues . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/deposites', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $deposites = new BackendDeposites();
        $deposites->date = $request->date;
         //$dues->total = $total->total ?? $request->dues;
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
        $dues = BackendDeposites::find($id);
//dd(compact('dues', 'users'));
        return view('backend.deposites.edit', compact('dues', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\dues $dues
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $dues = Dues::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = Dues::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('uploads/dues/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('uploads/dues', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $dues = BackendDeposites::find($id);
        $dues->date = $request->date;
         //$total = BackendDeposites::query()->select(DB::raw('SUM(dues) + ' . $request->dues . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$dues->total = $total->total ?? $request->dues;
         $dues->user_id = $request->user;
        $dues->description = $request->description;
        $dues->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $dues_images = new dues_images;
                $dues_images->dues_id = $id;
                $dues_images->dues_image_path = $image_name;
                $dues_images->save();
            }
        }
        return redirect(route('admin.deposites.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\dues $dues
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deposites = BackendDeposites::find($id);
        $deposites->delete();
        return redirect()->back()->with('message', 'Deposites Deleted Successfully');
    }
}