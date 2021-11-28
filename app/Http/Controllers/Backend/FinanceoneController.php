<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\backend\Financeone;
 use App\Models\backend\Financeone as BackendFinanceone;
 use App\Models\frontend\financeone_images;
 use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FinanceoneController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financeone = BackendFinanceone::query()->join('users', 'users.id', '=', 'financeone.user_id')->select(
            'financeone.*',
            'users.full_name_tr'
        )->get();
        return view('backend.financeone.index', compact('financeone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('backend.financeone.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $total = BackendFinanceone::query()->select(DB::raw('total + ' . $request->financeone . ' AS total'))->orderByDesc('id')->first();

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('public/uploads/financeone', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }

        $financeone = new BackendFinanceone();
        $financeone->date = $request->date;
         //$financeone->total = $total->total ?? $request->financeone;
        $financeone->user_id = $request->user;
        $financeone->description = $request->description;
         $financeone->f_image =  $fileNameToStore;

         $financeone->save();
        // Start of Upload Files
        if ($request->hasFile('financeone_images')) {
            $all_images = $request->file('financeone_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financeone_images = new financeone_images;
                $financeone_images->financeone_id = $financeone->id;
                $financeone_images->financeone_image_path = $image_name;
                $financeone_images->save();
                dd($financeone_images);
            }
        }

        return redirect(route('admin.financeone.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Admin\Model\slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(BackendFinanceone $financeone)
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
        $financeone = BackendFinanceone::find($id);
//dd(compact('financeone', 'users'));
        return view('backend.financeone.edit', compact('financeone', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Admin\Model\financeone $financeone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // End of Upload Files
        $financeone = Financeone::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = Financeone::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('public/uploads/financeone/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('public/uploads/financeone', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }
        $financeone = BackendFinanceone::find($id);
        $financeone->date = $request->date;
         //$total = BackendFinanceone::query()->select(DB::raw('SUM(financeone) + ' . $request->financeone . ' AS total'))->groupBy('id')->orderByDesc('id')->whereNotIn('id', [$id])->first();
        //$financeone->total = $total->total ?? $request->financeone;
         $financeone->user_id = $request->user;
        $financeone->description = $request->description;
        $financeone->save();
        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $financeone_images = new financeone_images;
                $financeone_images->financeone_id = $id;
                $financeone_images->financeone_image_path = $image_name;
                $financeone_images->save();
            }
        }
        return redirect(route('admin.financeone.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Admin\Model\financeone $financeone
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $financeone = BackendFinanceone::find($id);
        $financeone->delete();
        return redirect()->back()->with('message', 'Financeone Deleted Successfully');
    }
}