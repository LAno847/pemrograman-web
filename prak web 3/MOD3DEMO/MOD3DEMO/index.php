<?php
require_once __DIR__ . '/Traits/JsonResponder.php';
require_once __DIR__ . '/Controllers/BaseController.php';
require_once __DIR__ . '/Controllers/ItemController.php';

use Modules\ItemController;

header('Content-Type: application/json');
$controller = new ItemController();

// Cek apakah 'perintah' ada di dalam $_GET
if (isset($_GET['perintah'])) {
    if ($_GET['perintah'] == 'ambilSemua') {
        echo $controller->ambilSemua();
    } elseif ($_GET['perintah'] == 'ambilById' && isset($_GET['identifier'])) {
        echo $controller->ambilById($_GET['identifier']);
    } else {
        echo json_encode(['status' => 'gagal', 'pesan' => 'Perintah tidak valid']);
    }
} else {
    echo json_encode(['status' => 'gagal', 'pesan' => 'Parameter perintah tidak ditemukan']);
}
