<?php

namespace Thiago\StructuralPattern\Report;

interface ExportedArchive
{
    public function salvar(ExportedContent $conteudoExportado): string;
}