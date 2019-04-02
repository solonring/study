<?php

/**
*
*@param string  $dir
*/
function getFile($dir){
  static $files = [];
  $open = opendir($dir);
  if($open){
    while(($file = readdir($open)) !== false){
      if($file != '.' && $file != '..'){
          if(is_dir($dir.'/'.$file)){
            getFile($dir.'/'.$file);
          }else{
            $files[] =  $dir.'/'.$file;
          }
      }
    }
  }
  return json_encode($files);
}

