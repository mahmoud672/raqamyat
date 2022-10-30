@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
{{--Drop Your Customized Style Codes Here--}}
@section('customizedStyle')
@endsection
{{--Drop Your Customized Scripts Codes Here--}}
@section('customizedScript')
    <script src="{{assetPath('dashboard/bower_components/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor5');
            CKEDITOR.replace('editor6');
            //bootstrap WYSIHTML5 - text editor
        })
    </script>
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()
    </script>
@endsection
{{-- Start of page Content --}}
@section('content')


    <section class="content-header">
        <h1>
            Blog
            <small>Update Article</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{adminUrl('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{adminUrl('/blog')}}">Blog</a></li>
            <li class="active">Update Blog</li>
        </ol>
    </section>


    <section class="content">
        @include('dashboard.layouts.messages')
        <form role="form" action="{{route('blog.update', $blog->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('patch')
            <div class="row">
                <!-- English Side -->
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Update Blog Info</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title" value="{{$blog->title}}">
                                    <p class="help-block">Enter Title of Article</p>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> URL</label>
                                    <input type="text" class="form-control" name="url" id="exampleInputEmail1" placeholder="Enter URL" value="{{$blog->url}}">
                                    <p class="help-block">Enter Url of Article which will shown in url <strong>If Url is empty, system will choose article title as url by Default</strong></p>
                                </div>

                                <div class="col-lg-6 mt-5">
                                    <label for="exampleInputEmail1">Article Body</label>
                                    <textarea class="textarea" placeholder="Enter Article Body" name="description" id="editor5"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$blog->description}}</textarea>
                                    <p class="help-block">Enter Article Body</p>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="website-logo">Image</label>
                                        <img src="{{assetPath($blog->image_path)}}" data-toggle="modal" data-target="#update-img" class="img-responsive change-logo">
                                        <p class="help-block">Change Article Main Image</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1"> Image</label>
                                    <input type="file" class="form-control" name="image_path" id="exampleInputEmail1" placeholder="Enter button text">
                                    <p class="help-block"> Upload Article Image </p>
                                </div>


                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>

@endsection
