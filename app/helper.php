<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud Gad
 */






if (!function_exists('adminUrl'))
{
    function adminUrl($url = null)
    {
        return  url('admin-dashboard/' . $url);
    }
}


if (!function_exists('assetPath'))
{
    function assetPath($path = null)
    {
        return  asset($path);
    }
}

if (!function_exists('uploadFile'))
{
    function uploadFile($file_request, string $upload_path)
    {
            $uploaded_dir = "/uploads";

            $file_name = time() . $file_request->getClientOriginalName();
            $file_request->move($uploaded_dir . $upload_path, $file_name);
            //$file_path = public_path($this->application_folder . $upload_path);
            $file_path = $uploaded_dir.$upload_path."/".$file_name;
            return $file_path;

    }
}

