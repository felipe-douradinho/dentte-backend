<?php

use Illuminate\Support\Str;

class ProceduresConverter
{

    public function run()
    {
        $json_parte_1 = '{}';
        $json_parte_2 = '{}';

        $json_1 = json_decode($json_parte_1, true);
        $json_2 = json_decode($json_parte_2, true);

        $data = array_merge($json_1, $json_2);
        $procedures = [ ];

        foreach ($data['content'] as $key => $value) {

            $tuss = [
                'name' => $value['nomeTuss'],
                'code' => $value['tuss'] ?? null,
            ];

            $procedures[] = [
                'name'              => $value['nome'],
                'price'             => $value['valorPadrao'],
                'cost'              => $value['valorCusto'],
                'faces_enabled'     => $value['aceitaFaces'],
                'is_enabled'        => $value['ativo'],

                'repeat_enabled'        => $value['aceitaRepeticao'], // <<<<<
                'is_enabled_on_plan'    => $value['ativoNoPlano'], // <<<<<

                'tuss_data' => $tuss,
            ];
        }

        ## OUTPUT
        $path = "../Modules/Base/Resources/procedures";
        $expertise = "Urgência";

        file_put_contents(
            "{$path}/" . Str::slug($expertise) . ".json",
            json_encode($procedures)
        );
    }

}
