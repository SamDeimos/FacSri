<?php

namespace SamDeimos\FacSri\comprobantes;

use SamDeimos\FacSri\comprobantes\partials\Detalles;
use SamDeimos\FacSri\comprobantes\partials\InfoFactura;
use SamDeimos\FacSri\comprobantes\partials\InfoTributaria;
use SamDeimos\FacSri\FacSriComprobante;
use SimpleXMLElement;

class Factura extends FacSriComprobante
{
    public $infoTributaria;
    public $infoFactura;
    public $detalles;

    public function __construct($infoTributaria, $infoFactura, $detalle)
    {
        $this->infoTributaria = $infoTributaria;
        $this->infoFactura = $infoFactura;
        $this->detalles = $detalle;
        $this->generate();
    }

    public function generate()
    {
        $this->comprobante = new SimpleXMLElement("<?xml version='1.0'?><factura id='comprobante' version='1.0.0'></factura>");
        new InfoTributaria($this->comprobante, $this->infoTributaria);
        new InfoFactura($this->comprobante, $this->infoTributaria);
        new Detalles($this->comprobante, $this->detalles);

        $this->claveAcceso = $this->comprobante->xpath('/factura/infoTributaria/claveAcceso')[0];

    }
}
