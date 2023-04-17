<?php

function custom_copy($src, $dst)
{

    // open the source directory
    $dir = opendir($src);

    // Make the destination directory if not exist
    @mkdir($dst);

    // Loop through the files in source directory
    while ($file = readdir($dir)) {

        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {

                // Recursively calling custom copy function
                // for sub directory 
                custom_copy($src . '/' . $file, $dst . '/' . $file);

            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }

    closedir($dir);
}

$sourceDir = "/opt/lampp/htdocs/auto-prompter/output";
$targetDir = "/opt/lampp/htdocs/sail/replicator-assets";

// Check if target directory is empty
if (count(glob($targetDir . "/*")) === 0) {
    // Copy all files from source directory to target directory
    custom_copy($sourceDir, $targetDir);
} else {
    // Check modified time of "output.png"
    $outputFile = $targetDir . "/output.png";
    if (file_exists($outputFile)) {
        $modifiedTime = filemtime($outputFile);
        $currentTime = time();
        if (($currentTime - $modifiedTime) > 60 * 60 * 12) {
            // Copy contents of source directory to target directory
            custom_copy($sourceDir, $targetDir);
        }
    }
}
?>


<!--- 
DUMMY JSON

{
    "name": "Name, Title",
    "prompt": "Prompt used",
    "date": 0
}

--->