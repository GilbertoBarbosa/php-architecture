<?php

namespace Alura\Arquitetura\Dominio\Aluno;

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    private function setDdd(string $ddd): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{2}\/'
            ]
        ];

        if (filter_var($ddd, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('DDD no formato inválido');
        }

        $this->ddd = $ddd;
    }

    private function setNumero(string $numero): void
    {
        $opcoes = [
            'options' => [
                'regexp' => '/\d{4,5}\-\d{4}\/'
            ]
        ];

        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException('Número no formato inválido');
        }

        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}