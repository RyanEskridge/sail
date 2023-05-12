<?php

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function custom_copy($src, $dst)
{
    debug_to_console("1");

    // Get the HTML content of the source directory page
    $html = file_get_contents($src);

    // Check if the retrieval was successful
    if ($html === false) {
        debug_to_console("Failed to retrieve files from the source directory.");
        return;
    }

    // Create a new DOMDocument instance
    $dom = new DOMDocument();

    // Suppress HTML parsing errors
    libxml_use_internal_errors(true);

    // Load the HTML content into the DOMDocument
    $dom->loadHTML($html);

    // Restore error handling
    libxml_use_internal_errors(false);

    // Find all anchor tags in the HTML
    $anchors = $dom->getElementsByTagName('a');

    $fileList = [];

    // Loop through each anchor tag
    foreach ($anchors as $anchor) {
        // Get the href attribute value
        $href = $anchor->getAttribute('href');

        // Filter out directories and parent directory links
        if ($href !== '../' && !endsWith($href, '/')) {
            // Filter out unwanted file extensions
            $fileExtension = pathinfo($href, PATHINFO_EXTENSION);
            $allowedExtensions = array('jpg', 'png', 'json'); // Add or remove extensions as needed

            if (in_array($fileExtension, $allowedExtensions)) {
                $fileList[] = $href;
            }
        }
    }

    debug_to_console("Number of files found: " . count($fileList));

    // Loop through each file in the file list
    foreach ($fileList as $file) {
        debug_to_console("3");
        debug_to_console($file);

        // Construct the source URL
        $sourceURL = $src . $file;

        // Construct the destination path
        $destination = $dst . '/' . $file;

        // Download the file and save it to the destination directory
        $result = file_put_contents($destination, file_get_contents($sourceURL));

        if ($result === false) {
            debug_to_console("Failed to download file: " . $file);
        } else {
            debug_to_console("Downloaded file: " . $file);
        }
    }
}

// Helper function to check if a string ends with a specific substring
function endsWith($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}


$sourceDir = "http://146.7.45.26/auto-prompter/output/";
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
        if (($currentTime - $modifiedTime) > 0) {
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