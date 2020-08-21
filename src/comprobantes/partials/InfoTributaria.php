<?php

namespace SamDeimos\FacSri\comprobantes\partials;

use SimpleXMLElement;
use SamDeimos\FacSri\FacSriService;

class InfoTributaria extends FacSriService
{
    public function __construct(SimpleXMLElement $simpleXMLElement, $infoTributariaData)
    {
        $infoTributaria = $simpleXMLElement->addChild('infoTributaria');
        $infoTributaria->addChild('ambiente', 1);
        $infoTributaria->addChild('tipoEmision', 1);
        $infoTributaria->addChild('razonSocial', $infoTributariaData['razonSocial']);
        $infoTributaria->addChild('nombreComercial', $infoTributariaData['nombreComercial']);
        $infoTributaria->addChild('ruc', $infoTributariaData['ruc']);
        $infoTributaria->addChild('claveAcceso', $this->generarClaveAcceso($infoTributariaData['ruc'], $infoTributariaData['estab'], $infoTributariaData['secuencial'], $infoTributariaData['codDoc']));
        $infoTributaria->addChild('codDoc', $infoTributariaData['codDoc']);
        $infoTributaria->addChild('estab', $infoTributariaData['estab']);
        $infoTributaria->addChild('ptoEmi', $infoTributariaData['ptoEmi']);
        $infoTributaria->addChild('secuencial', $infoTributariaData['secuencial']);
        $infoTributaria->addChild('dirMatriz', $infoTributariaData['dirMatriz']);
    }
}