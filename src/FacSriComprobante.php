<?php

namespace SamDeimos\FacSri;

class FacSriComprobante
{
    public $comprobante;
    public $claveAcceso;

    public $path = "app\comprobantes";

    public function getComprobanteXML()
    {
        return $this->comprobante->asXML();
    }

    public function getClaveAcceso()
    {
        return  $this->claveAcceso;
    }

    public function saveComprobante()
    {
        $this->comprobante->asXML(storage_path($this->path) . '/' . $this->claveAcceso . ".xml");
    }

    public function firmarComprobante()
    {
        return $this->path;
    }
}
