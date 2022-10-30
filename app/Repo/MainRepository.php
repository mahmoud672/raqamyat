<?php


namespace App\Repo;


use Illuminate\Support\Arr;

abstract class MainRepository
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function first()
    {
        return $this->model::first();
    }

    public function all()
    {
        return $this->model::all();
    }

    public function findById($id)
    {
        return $this->model::find($id);
    }

    public function delete($id)
    {
        $object = $this->model::find($id);
        if ($object->delete())
            return true;
        return false;
    }

    public function create($data)
    {
        $data = Arr::except($data,['_token','_method']);
        return $this->model->create($data);
    }

    public function update($id,$data)
    {
        $data = Arr::except($data,['_token','_method']);
        return $this->model->where('id',$id)->update($data);
    }


    public abstract function validateRequest($request);

}


