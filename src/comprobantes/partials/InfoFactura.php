<?php

namespace SamDeimos\FacSri\comprobantes\partials;

use SimpleXMLElement;

class InfoFactura
{
    public function __construct(SimpleXMLElement $simpleXMLElement)
    {
        $infoFactura = $simpleXMLElement->addChild('infoFactura');
        $infoFactura->addChild('fechaEmision');
    }
}
