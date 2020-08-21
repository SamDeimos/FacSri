<?php

namespace SamDeimos\FacSri\comprobantes\partials;

use SimpleXMLElement;

class Detalles
{
    public function __construct(SimpleXMLElement $simpleXMLElement)
    {
        $simpleXMLElement->addChild('detalles');
        $simpleXMLElement->detalles->addChild('detalle');
        $simpleXMLElement->detalles->detalle->addChild('codigoPrincipal');
        $simpleXMLElement->detalles->detalle->addChild('codigoAuxiliar');
        $simpleXMLElement->detalles->detalle->addChild('descipcion');
        $simpleXMLElement->detalles->detalle->addChild('cantidad');
        $simpleXMLElement->detalles->detalle->addChild('precioUnitario');
        $simpleXMLElement->detalles->detalle->addChild('descuento');
        $simpleXMLElement->detalles->detalle->addChild('precioTotalSinImpuesto');
        $simpleXMLElement->detalles->detalle->addChild('detallesAdicionales');
        //Iterable
        $simpleXMLElement->detalles->detalle->detallesAdicionales->addChild('detAdicional');
        $simpleXMLElement->detalles->detalle->detallesAdicionales->detAdicional->addAttribute("nombre", "25");
        $simpleXMLElement->detalles->detalle->detallesAdicionales->detAdicional->addAttribute("valor", "número maximo asistentes");
        $simpleXMLElement->detalles->detalle->addChild('Impuestos');
        //Iterable
        $simpleXMLElement->detalles->detalle->Impuestos->addChild('Impuesto');
        $simpleXMLElement->detalles->detalle->Impuestos->Impuesto->addChild('codigo');
        $simpleXMLElement->detalles->detalle->Impuestos->Impuesto->addChild('codigoPorcentaje');
        $simpleXMLElement->detalles->detalle->Impuestos->Impuesto->addChild('tarifa');
        $simpleXMLElement->detalles->detalle->Impuestos->Impuesto->addChild('baseImponible');
        $simpleXMLElement->detalles->detalle->Impuestos->Impuesto->addChild('valor');
    }
}
