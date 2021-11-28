<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Financetwos;
use App\Models\backend\Financetwos as BackendFinancetwos;
use App\Models\frontend\financetwos_images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FinancetwosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financetwos = BackendFinancetwos::query()->join('users', 'users.id', '=', 'financetwos.user_id')->select(
            'financetwos.*',
            'users.full_name_tr'
        )->get();
        return view('backend.financetwos.index', compact('financetwos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.financetwos.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendFinancetwos::query()->select(DB::raw('total + ' . $request->financetwos . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('public/uploads/financetwos', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $financetwos = new BackendFinancetwos();
        $financetwos->date = $request->date;
         //$financetwos->total = $total->total ?? $request->financetwos;
        $financetwos->user_id = $request->user;
        $financetwos->description = $request->description;
         $financetwos->f_image =  $fileNameToStore;

         $financetwos->save();
        // Start of Upload Files
        if ($request->hasFile('financetwos_images')) {
            $all_images = $request->file('financetwos_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financetwos_images = new financetwos_images;
                $financetwos_images->financeone_id = $financetwos->id;
                $financetwos_images->financeone_image_path = $image_name;
                $financetwos_images->save();
                dd($financetwos_images);
            }
        }

        return redirect(route('admin.financetwos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendFinancetwos $financetwos)
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
        $financetwos = BackendFinancetwos::find($id);
//dd(compact('financetwos', 'users'));
        return view('backend.financetwos.edit', compact('financetwos', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\financetwos $financetwos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $financetwos = financetwos::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = financetwos::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/financetwos/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/financetwos', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $financetwos = BackendFinancetwos::find($id);
        $financetwos->date = $request->date;
         //$total = BackendFinancetwos::query()->select(DB::raw('SUM(financetwos) + ' . $request->financetwos . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$financetwos->total = $total->total ?? $request->financetwos;
         $financetwos->user_id = $request->user;
        $financetwos->description = $request->description;
        $financetwos->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financetwos_images = new financetwos_images;
                $financetwos_images->financeone_id = $id;
                $financetwos_images->financeone_image_path = $image_name;
                $financetwos_images->save();
            }
        }
        return redirect(route('admin.financetwos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\financetwos $financetwos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financetwos = BackendFinancetwos::find($id);
        $financetwos->delete();
        return redirect()->back()->with('message', 'financetwos Deleted Successfully');
    }
}