<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Financeones;
use App\Models\backend\Financeones as BackendFinanceones;
use App\Models\frontend\financeones_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FinanceonesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financeones = BackendFinanceones::query()->join('users', 'users.id', '=', 'financeones.user_id')->select(
            'financeones.*',
            'users.full_name_tr'
        )->get();
        return view('backend.financeones.index', compact('financeones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.financeones.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendFinanceones::query()->select(DB::raw('total + ' . $request->financeones . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('public/uploads/financeones', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $financeones = new BackendFinanceones();
        $financeones->date = $request->date;
         //$financeones->total = $total->total ?? $request->financeones;
        $financeones->user_id = $request->user;
        $financeones->description = $request->description;
         $financeones->f_image =  $fileNameToStore;

         $financeones->save();
        // Start of Upload Files
        if ($request->hasFile('financeones_images')) {
            $all_images = $request->file('financeones_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financeones_images = new financeones_images;
                $financeones_images->financeone_id = $financeones->id;
                $financeones_images->financeone_image_path = $image_name;
                $financeones_images->save();
                dd($financeones_images);
            }
        }

        return redirect(route('admin.financeones.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendFinanceones $financeones)
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
        $financeones = BackendFinanceones::find($id);
//dd(compact('financeones', 'users'));
        return view('backend.financeones.edit', compact('financeones', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\financeones $financeones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $financeones = financeones::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = financeones::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/financeones/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/financeones', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $financeones = BackendFinanceones::find($id);
        $financeones->date = $request->date;
         //$total = BackendFinanceones::query()->select(DB::raw('SUM(financeones) + ' . $request->financeones . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$financeones->total = $total->total ?? $request->financeones;
         $financeones->user_id = $request->user;
        $financeones->description = $request->description;
        $financeones->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financeones_images = new financeones_images;
                $financeones_images->financeone_id = $id;
                $financeones_images->financeone_image_path = $image_name;
                $financeones_images->save();
            }
        }
        return redirect(route('admin.financeones.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\financeones $financeones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financeones = BackendFinanceones::find($id);
        $financeones->delete();
        return redirect()->back()->with('message', 'financeones Deleted Successfully');
    }
}