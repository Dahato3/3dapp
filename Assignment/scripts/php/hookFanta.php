<?php
// Specify the path to the thumbnail images
$directory = '../../gallery/images/fanta';
// Only load files with the following extensions
$allowed_extensions = array('jpg','jpeg','gif','png');
// An array used to seperate the extension from each file
$file_parts = array();
// Response message
$response = "";
// Opens the directory to parse the images
$dir_handle = opendir($directory);
// Iterate through all the files
while ($file = readdir($dir_handle)) {
    // First check for hidden files
    if (substr($file, 0, 1) != '.') {
        // Split each file name to extract the file extension
        $file_componants = explode('.', $file);
        // Grab the extension token
        $extension = strtolower(array_pop($file_componants));
        // Is this a valid image. If so, add it to the response
        if (in_array($extension, $allowed_extensions))
        {
            // Builds a response string using the ~ operator as a seperator
            $response .= '/'.$file.'~';
        }
    }
}
closedir($dir_handle);
// Return response while removing the last ~ seperator
echo substr_replace($response,"",-1);
?>