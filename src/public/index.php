<?php
require_once __DIR__ . '/../app/core/Database.php';

$pdo = Database::getConnection();

// Test query to verify connection
$stmt = $pdo->query("SELECT NOW() AS fecha");
$result = $stmt->fetch();
echo "<h1>Conexión OK</h1>";
echo "<p>Fecha en el servidor MySQL: {$result['fecha']}</p>";
