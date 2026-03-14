<?php
header("Content-Type: application/json");

function respond($success, $message) {
  echo json_encode(["success" => $success, "message" => $message]);
  exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  respond(false, "Invalid request method.");
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
  respond(false, "Please complete all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  respond(false, "Please provide a valid email address.");
}

$payload = [
  "type" => "contact",
  "name" => $name,
  "email" => $email,
  "message" => $message,
  "timestamp" => date("c"),
  "ip" => $_SERVER["REMOTE_ADDR"] ?? "unknown"
];

$dataDir = __DIR__ . DIRECTORY_SEPARATOR . "data";
$file = $dataDir . DIRECTORY_SEPARATOR . "contact-submissions.jsonl";

if (!is_dir($dataDir)) {
  mkdir($dataDir, 0775, true);
}

file_put_contents($file, json_encode($payload) . PHP_EOL, FILE_APPEND | LOCK_EX);

respond(true, "Thank you! We will respond within 24 hours.");
