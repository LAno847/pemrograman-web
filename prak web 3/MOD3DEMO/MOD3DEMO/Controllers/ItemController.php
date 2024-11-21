<?php
namespace Modules;

use Utilities\JsonResponder;

class ItemController extends BaseController {
    use JsonResponder;

    private $items = [
        ['id' => 101, 'nama' => 'Item A', 'harga' => 500],
        ['id' => 102, 'nama' => 'Item B', 'harga' => 1500],
    ];

    public function ambilSemua() {
        return $this->kirimRespons('sukses', 'Daftar item berhasil diambil', $this->items);
    }

    public function ambilById($identifier) {
        foreach ($this->items as $item) {
            if ($item['id'] == $identifier) {
                return $this->kirimRespons('sukses', 'Item berhasil diambil', $item);
            }
        }
        return $this->kirimRespons('gagal', 'Item tidak ditemukan');
    }
}
?>
