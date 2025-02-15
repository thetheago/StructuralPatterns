<?php

namespace Thiago\StructuralPattern\Http;

use Thiago\StructuralPattern\Http\HttpAdapter;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
//        $curl = curl_init($url);
//        curl_setopt($curl, CURLOPT_POST, true);
//        curl_exec($curl);

        echo "[Curl] Executando chamada para: {$url}\n";
    }
}