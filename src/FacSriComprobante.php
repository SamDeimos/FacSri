<?php

namespace SamDeimos\FacSri;

class FacSriComprobante
{
    public $comprobante;
    Public $claveAcceso;
    
    public $path = "ruta";

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

    }

    public function firmarComprobante()
    {
        return $this->path;
    }
}
