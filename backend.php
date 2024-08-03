<?php
// Example PHP backend script
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process form data or other backend logic
    $response = array('status' => 'success', 'message' => 'Data received');
    echo json_encode($response);
}
?>
