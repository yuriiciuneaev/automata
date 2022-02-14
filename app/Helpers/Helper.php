<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class Helper
{
    public function ResizeImages($filepath, $filename, $destination_folder, $width){
        $filetype = explode('.' , $filename);
        if($filetype[1] == 'jpg'){
            $im_php = imagecreatefromjpeg(public_path($filepath));
            $new_name = basename($filename);
    
            $im_php = imagescale($im_php, $width);
            imagesy($im_php);
    
            if (!File::exists(public_path($destination_folder . $filename))) {
                imagejpeg($im_php, public_path($destination_folder) . $new_name);
            }
        }

        else{
            $im_php = imagecreatefrompng(public_path($filepath));
            $new_name = basename($filename);
    
            $im_php = imagescale($im_php, $width);
            imageAlphaBlending($im_php, true);
            imageSaveAlpha($im_php, true);

            imagesy($im_php);
    
            if (!File::exists(public_path($destination_folder . $filename))) {
                imagepng($im_php, public_path($destination_folder) . $new_name);
            }
            
        }
    }
}