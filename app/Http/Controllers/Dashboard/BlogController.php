<?php


namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use App\Repo\BlogRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{

    /**
     * @var BlogRepository
     */
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {

        $blogs = $this->blogRepository->all();

        return view("dashboard.blog.index",compact("blogs"));
    }

    public function create()
    {

        return view('dashboard.blog.create');
    }

    public function store(Request $request)
    {
        /** @var  $validation */
        $validation = $this->blogRepository->validateRequest($request);
        if ($validation->errors()->count() > 0)
        {
            return redirect()->back()->with("errors",$validation->errors());
        }
        $blogInfo = $request->all();

        try
        {
            if ($file = $request->file("image_path"))
            {
                $blogInfo['image_path'] = uploadFile($file,"/blog");
            }
            $blogInfo['created_by'] = auth()->user()->id;
            $blogInfo['url']    = $request->url ?? Str::slug($request->title);

            $this->blogRepository->create($blogInfo);

            return redirect(adminUrl("blog"))->with("success","Data Created Successfully");
        }
        catch (\Exception $exception)
        {
            return redirect(adminUrl("blog"))->with("exception",$exception->getMessage());
        }
    }

    public function edit($id)
    {
        $blog = $this->blogRepository->findById($id);

        return view("dashboard.blog.edit",compact("blog"));


    }

    public function update(Request $request, $id)
    {

        /** @var  $validation */
        $validation = $this->blogRepository->validateRequest($request);
        if ($validation->errors()->count() > 0)
        {
            return redirect()->back()->with("errors",$validation->errors());
        }

        $blogInfo = $request->all();

        try
        {

            $blog = $this->blogRepository->findById($id);

            if ($file = $request->file("image_path"))
            {
                $blogInfo['image_path'] = uploadFile($file,"/blog");
            }
            $blogInfo['created_by'] = auth()->user()->id;
            $blogInfo['url']    = $request->url ?? Str::slug($request->title);

            $this->blogRepository->update($id,$blogInfo);

            return redirect(adminUrl("blog"))->with("success","Data Created Successfully");
        }
        catch (\Exception $exception)
        {
            return redirect(adminUrl("blog"))->with("exception",$exception->getMessage());
        }

    }

    public function destroy($id)
    {

        try
        {
           $this->blogRepository->delete($id);

            return redirect(adminUrl("blog"))->with("success","Data Deleted Successfully");
        }
        catch (\Exception $exception)
        {
            return redirect(adminUrl("blog"))->with("exception",$exception->getMessage());
        }
    }



}
