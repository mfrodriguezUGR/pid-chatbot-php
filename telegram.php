<?php
// Leer los datos de la solicitud de Telegram
$update = file_get_contents("php://input");
$updateData = json_decode($update, true);

// Registrar la petición en un archivo (para depuración)
file_put_contents("telegram_log.txt", $update . PHP_EOL, FILE_APPEND);

// Extraer el chat ID (si está disponible)
$chat_id = $updateData['message']['chat']['id'] ?? null;

// Crear la respuesta enviando de vuelta todos los datos recibidos
$response = [
    'chat_id' => $chat_id,
    'text' => "Datos recibidos:\n" . json_encode($updateData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
];

// Enviar respuesta a Telegram
if ($chat_id) {
    $properties = parse_ini_file('bot.properties');
    $apiToken = $properties['apiToken'] ?? null;
    $url = "https://api.telegram.org/bot$apiToken/sendMessage";

    $options = [
        'http' => [
            'header'  => "Content-Type: application/json",
            'method'  => 'POST',
            'content' => json_encode($response)
        ]
    ];

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
}

// Responder con JSON en el servidor (útil para pruebas en navegador o herramientas de API)
header("Content-Type: application/json");
echo json_encode([
    'status' => 'ok',
    'request' => $updateData,
    'telegram_response' => $result ? json_decode($result, true) : null
]);
?>
