<?php

namespace Thiago\StructuralPattern\Report;

class XMLExporter implements ExportedArchive
{
    private string $nomeElementoPai;

    public function __construct(string $nomeElementoPai)
    {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(ExportedContent $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai} />");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}
