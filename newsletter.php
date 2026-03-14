<?php
header("Content-Type: application/json");

function respond($success, $message) {
  echo json_encode(["success" => $success, "message" => $message]);
  exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  respond(false, "Invalid request method.");
}

$email = trim($_POST["email"] ?? "");

if ($email === "") {
  respond(false, "Please provide an email address.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  respond(false, "Please provide a valid email address.");
}

$payload = [
  "type" => "newsletter",
  "email" => $email,
  "timestamp" => date("c"),
  "ip" => $_SERVER["REMOTE_ADDR"] ?? "unknown"
];

$dataDir = __DIR__ . DIRECTORY_SEPARATOR . "data";
$file = $dataDir . DIRECTORY_SEPARATOR . "newsletter.jsonl";

if (!is_dir($dataDir)) {
  mkdir($dataDir, 0775, true);
}

file_put_contents($file, json_encode($payload) . PHP_EOL, FILE_APPEND | LOCK_EX);

respond(true, "You are subscribed! Weekly updates are on the way.");
