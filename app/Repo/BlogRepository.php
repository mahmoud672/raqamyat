<?php


namespace App\Repo;


use App\Models\Blog\Blog;
use Illuminate\Support\Facades\Validator;

class BlogRepository extends MainRepository
{

    /**
     * BlogRepository constructor.
     * @param Blog $model
     */
    public function __construct(Blog $model)
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
                'image_path'      => 'nullable|mimes:jpg,jpeg,png',
                'title'           => 'required',
                'discription'     => 'required',
            ]);

        return $validation;


    }

}


