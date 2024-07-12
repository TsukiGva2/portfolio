<?php

class Core
{
    public static function run($views_dir, $main_file)
    {
        if (isset($_GET['url'])) {

            // remove spec chars whatever
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // divide url in parts
            $urlParts = explode('/', $url);

            // get file name of first /
            $fileName = array_shift($urlParts);

            // verify if file exists in templates
            $filePath = 'views/' . $fileName . '.php';
            if (file_exists($filePath)) {

                if (!empty($urlParts)) {
                    $route = $urlParts;
                }

                //about "route variable has possibility of get this on any file
                // is only use 

                include($filePath);
                exit();
            } else {

                include('views/notFound.php');
                exit();
            }
        } else {
            include("{$views_dir}/{$main_file}.php");
        }
    }

    public static function _inc($files = array())
    {
        foreach ($files as $file) {
            if (!is_file($file)) {
                die("File $file doesn't exist.");
            }
    
            include $file;
        }
    }
    public static function getFilesAsObject($directory)
    {
        
        if (!is_dir($directory)) {
            die("Directory $directory doesn't exist.");
        }
        
   
        $files = scandir($directory);
        

        $files = array_diff($files, array('.', '..'));
        
    
        $fileObject = new stdClass();
        
     
        foreach ($files as $file) {
            $fileObject->$file = null; 
        }
        
        return $fileObject;
    }

    public static function getFilesWithoutExtension($directory)
{
    if (!is_dir($directory)) {
        die("Directory $directory doesn't exist.");
    }
    
    $files = scandir($directory);
    
    $files = array_diff($files, array('.', '..'));
    
    $fileNames = [];
    
    foreach ($files as $file) {
        $fileName = pathinfo($file, PATHINFO_FILENAME);
        
        $fileNames[] = $fileName; 
    }
    
    return $fileNames;
}

}
