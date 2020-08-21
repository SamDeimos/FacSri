<?php

namespace SamDeimos\FacSri;

use SamDeimos\FacSri\comprobantes\Factura;

class FacSri
{
    public function comprobanteFactura($infoTributaria, $infoFactura, $detalle)
    {
        return new Factura($infoTributaria, $infoFactura, $detalle);
    }

}
