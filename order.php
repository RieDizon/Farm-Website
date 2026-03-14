<?php
header("Content-Type: application/json");

function respond($success, $message) {
  echo json_encode(["success" => $success, "message" => $message]);
  exit;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  respond(false, "Invalid request method.");
}

$product = trim($_POST["product"] ?? "");
$quantity = (int)($_POST["quantity"] ?? 0);
$name = trim($_POST["name"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$email = trim($_POST["email"] ?? "");

if ($product === "" || $quantity < 1 || $name === "" || $phone === "" || $email === "") {
  respond(false, "Please complete all required fields.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  respond(false, "Please provide a valid email address.");
}

$payload = [
  "type" => "order",
  "product" => $product,
  "quantity" => $quantity,
  "name" => $name,
  "phone" => $phone,
  "email" => $email,
  "timestamp" => date("c"),
  "ip" => $_SERVER["REMOTE_ADDR"] ?? "unknown"
];

$dataDir = __DIR__ . DIRECTORY_SEPARATOR . "data";
$file = $dataDir . DIRECTORY_SEPARATOR . "orders.jsonl";

if (!is_dir($dataDir)) {
  mkdir($dataDir, 0775, true);
}

file_put_contents($file, json_encode($payload) . PHP_EOL, FILE_APPEND | LOCK_EX);

respond(true, "Order received! We will confirm within 24 hours.");
