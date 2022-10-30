<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Repo\AboutRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AboutController extends Controller
{

    /**
     * @var AboutRepository
     */
    protected $aboutRepository;

    public function __construct(AboutRepository $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }

    public function index()
    {
        $about = $this->aboutRepository->first();

        return view("dashboard.about.edit",compact("about"));
    }

    public function update(Request $request,$id)
    {

        /** @var  $validation */
        $validation = $this->aboutRepository->validateRequest($request);
        if ($validation->errors()->count() > 0)
        {
            return redirect()->back()->with("errors",$validation->errors());
        }

        $aboutInfo = $request->all();

        if ($file = $request->file('about_image_path'))
        {
            $aboutInfo['about_image_path'] = uploadFile($file,"about");
        }
        if ($file = $request->file('vision_image_path'))
        {
            $aboutInfo['vision_image_path'] = uploadFile($file,"about");
        }

        if ($file = $request->file('mission_image_path'))
        {
            $aboutInfo['mission_image_path'] = uploadFile($file,"about");
        }

        if ($file = $request->file('values_image_path'))
        {
            $aboutInfo['values_image_path'] = uploadFile($file,"about");
        }


        $this->aboutRepository->update($id,$aboutInfo);

        return redirect()->back()->with('success',"Your Data Created Successfully.");
    }

    public function show()
    {

    }

}
