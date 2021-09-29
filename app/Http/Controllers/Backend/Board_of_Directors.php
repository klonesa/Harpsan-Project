<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\backend\BoardofDirectors;

class Board_of_Directors extends Controller
{
    private $uploadPath = "uploads/boardofdirectors/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boardofdirectory = BoardofDirectors::all();
        return view('backend.boardofdirectory.index',compact('boardofdirectory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.boardofdirectory.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_tr' => ['required', 'string', 'max:255'],
  
            // 'image'=> ['required'],
        ]);
  
  
  
           // Start of Upload Files
        $formFileName = "image";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(1111,
                    9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->getUploadPath();
            $request->file($formFileName)->move($path, $fileFinalName);
        }
  
  
  
        // End of Upload Files
  
          $boardofdirectory = new BoardofDirectors;
          $boardofdirectory->image = $fileFinalName; 
          $boardofdirectory->name_tr = $request->name_tr;
          $boardofdirectory->position_tr = $request->position_tr;  
          $boardofdirectory->text_tr = $request->text_tr;
          $boardofdirectory->e_mail = $request->e_mail;
          $boardofdirectory->phone = $request->phone;
          $boardofdirectory->instagram = $request->instagram;
          $boardofdirectory->facebook = $request->facebook;
          $boardofdirectory->twitter = $request->twitter;
          $boardofdirectory->linkedin = $request->linkedin;
          $boardofdirectory->save();
          return redirect(route('admin.boardofdirectory.index'))->with('message', trans('backend.created_successfully'));
      }
  
      public function getUploadPath()
      {
          return $this->uploadPath;
      }
  
      public function setUploadPath($uploadPath)
      {
          $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
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
        $boardofdirectory = BoardofDirectors::find($id);

        return view('backend.boardofdirectory.edit',compact('boardofdirectory'));
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
        $this->validate($request,[
            'name_tr' => ['required', 'string', 'max:255'],
            // 'image'=>'required',
        ]);
  
         // Start of Upload Files
           $formFileName = "image";
           $fileFinalName = "";
  
           if ($request->$formFileName != "") {
               $teamx = BoardofDirectors::find($id);  // here to store image alone
               $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
               $path = $this->getUploadPath();
               $request->file($formFileName)->move($path, $fileFinalName);
               $teamx->image = $fileFinalName; // here there is  a bug when update profile image
               $teamx->save();
           }
  
  
  
           // End of Upload Files
          $boardofdirectory = BoardofDirectors::where('id',$id)->update($request->except('_token','_method','image'));
        // except image cus we handle it aboves
  
  
          return redirect(route('admin.boardofdirectory.index'))->with('message', trans('backend.updated_successfully'));
  
  
  
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $boardofdirectory = BoardofDirectors::where('id', $id)->first();
         $boardofdirectory->delete();
        return redirect()->back()->with('message', trans('backend.deleted_successfully'));

    }
}
