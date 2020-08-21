<?php

namespace SamDeimos\FacSri;

class FacSriService
{
    public function generarClaveAcceso($ruc, $estab, $secuencial, $rand_num)
    {
        $fecha = date('dmyy');
        $claveAcceso = $fecha . '01' . $ruc . '1' . $estab . '006' . $secuencial . $rand_num . '1';
        return $claveAcceso . $this->moduleOnce($claveAcceso);
    }

    private function moduleOnce($num)
    {
        $suma = 0;
        $num_arr = array_map('intval', str_split($num));
        $arr = array(
            7, 6, 5, 4, 3, 2
        );

        $i = 0;
        foreach ($num_arr as $item_num) {
            $suma += $item_num * $arr[$i];
            ($i == 5) ? $i = 0 : $i++;
        }

        $result = 11 - ($suma % 11);

        if ($result == 11) {
            return 0;
        } elseif ($result == 10) {
            return 1;
        }
    }
}
