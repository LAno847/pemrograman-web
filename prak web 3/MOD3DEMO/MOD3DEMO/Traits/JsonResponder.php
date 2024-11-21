<?php
namespace Utilities;

trait JsonResponder {
    public function kirimRespons($status, $pesan, $data = null) {
        return json_encode([
            'status' => $status,
            'pesan' => $pesan,
            'data' => $data
        ]);
    }
}
?>
