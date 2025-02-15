<?php

namespace Thiago\StructuralPattern\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}