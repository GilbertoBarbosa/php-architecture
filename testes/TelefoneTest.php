<?php 

namespace Alura\Arquitetura\Testes;

use Alura\Arquitetura\Dominio\Aluno\Telefone;
use PHPUnit\Framework\TestCase;

class TelefoneTest extends TestCase
{
    public function testTelefoneDevePoderSerRepresentadoComoString()
    {
        $telefone = new Telefone('24','12345-6789');
        $this->assertSame('(24) 12345-6789', (string) $telefone);
    }
    
    public function testTelefoneComDddInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('DDD inválido');
        new Telefone('ddd', '22222-2222');
    }

    public function testTelefoneComNumeroInvalidoNaoDeveExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectDeprecationMessage('Número de telefone inválido');
        new Telefone('24', 'número');
    }

    
}