<?php

// Read the contents of the JSON file
$jsonData = file_get_contents('data.json');

// Decode the JSON data
$data = json_decode($jsonData, true);

// Get the search query from the GET parameters
$searchQuery = isset($_GET['keyword']) ? strtolower($_GET['keyword']) : '';

// Keywords to search for
$keywords = array("latijn", "nederlands", "les");

// Array to store matching results
$matchingResults = array();

// Loop through each entry in the data
foreach ($data as $entry) {
    // Check if any of the keywords are present in the entry
    $entryMatches = false;
    foreach ($keywords as $keyword) {
        // Case-insensitive search for each key in the entry
        if (array_key_exists($keyword, $entry) && stripos(strtolower($entry[$keyword]), $searchQuery) !== false) {
            $entryMatches = true;
        }
    }

    // If any keyword is found in the entry, add it to matching results
    if ($entryMatches) {
        $matchingResults[] = $entry;
    }
}

// Display the matching results as a table
if (!empty($matchingResults)) {

    foreach ($matchingResults as $result) {
        echo "<tr><td>{$result['latijn']}</td><td>{$result['nederlands']}</td><td>{$result['les']}</td></tr>";
    }

} else {
    echo "No matching results found.";
}

?>
