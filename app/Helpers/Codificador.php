<?php

namespace App\Helpers;

class Codificador
{
    public function encodePicture($valor)
    {
        // Lógica de codificación aquí
        return base64_encode($valor);
    }

    public function decodePicture($valor)
    {
        // Lógica de decodificación aquí
        return base64_decode($valor);
    }
}
