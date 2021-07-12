<?php

namespace App\Helpers;

class Helper{

public static function renameFile($path , $filename){

    if($pos = strrpos($filename,'-')){
        $name = substr($filename,0,$pos);
        $ext = substr($filename,$pos);
    }else{
        $name = $filename;
    }

    $newpath =$path.'/'.$filename;
    $newname =$filename;
    $counter = 0;
    while(file_exists($newname)){
        $newname = $name.'_'.$counter.$ext;
        $newpath = $path.'/'.$newname;
        $counter++;
    }
    return $newname;

}

}

?>
