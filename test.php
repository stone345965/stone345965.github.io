<?php if ($_SERVER['REQUEST_METHOD'] == "POST") { $message = "OK"; http_response_code(200); }
else { $message = "Bad Request"; http_response_code(401); }
header ("Content-type: application/json");
echo json_encode(['message' => $message]);
?>
