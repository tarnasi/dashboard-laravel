<?php

namespace App\Traits;

use Illuminate\Support\Str;

use App\Models\Image;

trait UploadFiles {

    /**
     * Upload image for any kind of object.
     *
     * @param File $file
     * @param string $folder
     * @return string path of image
     */
    public function UploadImageObj($file, $folder)
    {
        $fileName = Str::random(30) . "." . $file->getClientOriginalExtension();
        $path = public_path("/uploads/$folder/");
        $file->move($path, $fileName);
        return "/uploads/$folder/" . $fileName;
    }

    /**
     * Upload file.
     *
     * @param Request $file
     * @param Setting $className
     *
     * @return bool|string
     */
    public function uploadeFile($file, $className)
    {
        $className = str_replace("\\", "/", $className);
        $fileName = str_random() . "." . $file->getClientOriginalExtension();
        $path = public_path("/img/$className/");
        $file->move($path, $fileName);
        return "/img/$className/" . $fileName;
    }

    public function deleteExistImage($content, $var)
    {
        $field = json_decode($content, true);
        if(!empty($field[$var]) && file_exists(public_path() . $field[$var])) {
            unlink(public_path() . $field[$var]);
        }
    }

    public function deleteImage(string $path)
    {
        $imagePath = public_path($path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
            return true;
        }

        return false;
    }

    /**
     * Delete images of object
     *
     * @param array $images
     * @param Object $classImg
     * @return bool
     */
    public function deleteImagesObj($images, $classImg)
    {
        foreach ($images as $img) {
            $imagePath = public_path($img->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $currentImg = $classImg::find($img->id);
            $currentImg->delete();
            return true;
        }
    	return false;
    }

    public function uploadImageAs($file, $typeId, $typeName, $folder, $alt)
    {
        $img = new Image();
        $name = str_random() . "-$img->id." . $file->getClientOriginalExtension();
        $path = public_path("uploads/$folder/");
        $file->move($path, $name);

        $img->alt = $alt;
        $img->link = "/uploads/$folder/".$name;
        $img->imageable_id = $typeId;
        $img->imageable_type = $typeName;
        $img->save();

        return $img;
    }
}


