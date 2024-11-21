<?php
namespace Modules;

abstract class BaseController {
    abstract protected function ambilSemua();
    abstract protected function ambilById($identifier);
}
?>
