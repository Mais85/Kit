<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;


class AdminBaseController extends Controller
{
    //
    public function __construct(){
        parent::__construct();
        App::setLocale('az');
    }

    public function getFormTranslations($name,$request)
    {
        $translations = [];
        foreach ($this->__languages as $key => $value) {
            $translations[$key] = $request->{$name."_".$key};
        }
        return $translations;
    }

    public function uploadFile($file,$path = 'common')
    {
        ini_set('memory_limit','256M');
        if(isset($file)){
            $filename = $file->getClientOriginalName();
            Storage::putFileAs("public/$path",$file,$filename);
            $pdf = "storage/app/public/$path/".$filename;
            return $pdf;
        }else{
            return null;
        }

    }

    public function deleteFile($file,$path = 'common')
    {
       Storage::delete("public/$path"/$file);
    }

    public function uploadImage($image,$path = "common",$thumbs = NULL)
    {
        ini_set('memory_limit','256M');
        if(isset($image)){
            $filename = time() . '.' . $image->getClientOriginalName();
            $width=Image::make($image)->width();
            $height=Image::make($image)->height();

            $image = Image::make($image);
            if(1366<$width && 768<$height){
                $image->resize(1366, 768, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }elseif(768<$height){
                $image->resize($width,768, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }elseif(1366<$width){
                $image->resize(1366,$height, function ($constraint) {
                    $constraint->aspectRatio();
                });
            }
            Image::make($image)->save(base_path("storage/app/public/$path/".$filename),60);


            /*if($thumbs){
                $n = pathinfo($filename, PATHINFO_FILENAME);
                $e = pathinfo($filename, PATHINFO_EXTENSION);
                foreach ($thumbs as $size) {
                    Image::make($image)->fit($size[0],$size[1])
                    ->save(base_path("storage/app/public/$path/".$n."_".$size[0]."x".$size[1].".".$e),60);
					$filename2 = $n."_".$size[0]."x".$size[1].".".$e;
                }
            }*/
            $image = "/storage/$path/" . $filename;

        }else {
            $image = null;
        }
        return $image;
    }

    public function editImage($image, $old_from_db, $old_from_form, $path, $thumbs = NULL)
    {
        if(isset($image)){
            $image = $this->uploadImage($image, $path, $thumbs);
            //Deleting File if New One Exist
            if ($old_from_db){
                $pos = '/storage/photos/';
                $old_from_dbD = str_replace($pos, '', $old_from_db);
                $this->deleteImage($old_from_dbD, $thumbs);
            }
            return $image;
        }
        if(empty($old_from_form)){
            $pos = '/storage/photos/';
            $old_from_dbD = str_replace($pos, '', $old_from_db);
            $this->deleteImage($old_from_dbD, $thumbs);
            return  $image = null;
        }else{
            return $image = $old_from_db;
        }
    }

    public function deleteImage($filename,$thumbs = NULL)
    {
        File::delete(base_path("storage/app/public/photos/".$filename));
        if($thumbs){
            $n = pathinfo($filename, PATHINFO_FILENAME);
            $e = pathinfo($filename, PATHINFO_EXTENSION);
            $path = explode($n.".".$e,$filename)[0];
            foreach ($thumbs as $size) {
                File::delete(public_path($path.$n."_".$size[0]."x".$size[1].".".$e));
            }
        }
    }

    public function uploadImageFit($image, $path = "common" ,$fit,$thumbs = NULL){
        ini_set('memory_limit','256M');
        if(isset($image)){
            $filename = time() . '.' . $image->getClientOriginalName();
            $filename2 = null;
            /*Image::make($image)->fit($fit[0],$fit[1])->save(base_path("storage/app/public/$path/".$filename),60)*/
            if($fit){
                $n = pathinfo($filename, PATHINFO_FILENAME);
                $e = pathinfo($filename, PATHINFO_EXTENSION);
                foreach ($fit as $size) {
                    Image::make($image)->fit($size[0],$size[1])
                        ->save(base_path("storage/app/public/$path/".$n."_".$size[0]."x".$size[1].".".$e),60);
                    $filename2 = $n."_".$size[0]."x".$size[1].".".$e;
                }
            }

            $image = "/storage/$path/" . $filename2;

        }else {
            $image = null;
        }
        return $image;
    }

    public function editImageFit($image, $old_from_db, $old_from_form, $path,$fit, $thumbs = NULL)
    {
        if(isset($image)){
            $image = $this->uploadImageFit($image,$path,$fit,$thumbs);
            //Deleting File if New One Exist
            if($old_from_db){
                $pos = '/storage/smallPhotos/';
                $old_from_dbD = str_replace($pos, '', $old_from_db);
//                $this->deleteImage($old_from_dbD/*,$thumbs*/);
//                $n = pathinfo($old_from_form, PATHINFO_FILENAME);
//                $e = pathinfo($old_from_form, PATHINFO_EXTENSION);
//                $var2 = substr(strrchr($n, "_"), 0);
//                $var2 = str_replace($var2,'',$n);
//                $var2.='.'.$e;
                File::delete(base_path("storage/app/public/smallPhotos/".$old_from_dbD));
            }
        }else {
            if($old_from_db){

                /*$old_from_db = explode("/",$old_from_db);
                $old_from_db = array_pop($old_from_db);*/

                if(!empty($old_from_form)){
                    $image = $old_from_db;
                }else{
                    $pos = '/storage/smallPhotos/';
                    $old_from_dbD = str_replace($pos, '', $old_from_db);
                    File::delete(base_path("storage/app/public/smallPhotos/".$old_from_dbD));
                    $image = null;
                }
            }else{
                $image = null;
            }
        }
        return $image;
    }
}
