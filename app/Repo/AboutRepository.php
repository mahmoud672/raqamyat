<?php

namespace App\Repo;

use App\Models\About\About;
use Illuminate\Support\Facades\Validator;

class AboutRepository extends MainRepository
{

    /**
     * @var
     */
    protected $aboutModel;

    public function __construct(About $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validateRequest($request)
    {

        $validation = Validator::make($request->all(),
            [
            'about_image_path'      => 'nullable|mimes:jpg,jpeg,png',
            'vision_image_path'     => 'nullable|mimes:jpg,jpeg,png',
            'mission_image_path'    => 'nullable|mimes:jpg,jpeg,png',
            'values_image_path'     => 'nullable|mimes:jpg,jpeg,png',
            'about_brief'           => 'required',
            'vision_brief'          => 'nullable',
            'mission_brief'         => 'nullable',
            'values_brief'          => 'nullable',
        ]);

        return $validation;


    }


}
