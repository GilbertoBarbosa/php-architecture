<?php

namespace Alura\Arquitetura\Aplicacao\Indicacao;
namespace Alura\Arquitetura\Dominio\Aluno;

interface EnviaEmailIndicacao
{
    public function enviaPara(Aluno $alunoIndicado): void;
}