<?php

// dependencias

include 'cadastrarAlunoEscola.php';

function limparTerminal()
{
    echo "\033[2J\033[H";
}

// constantes

const PESO_NOTA1 = 6;
const PESO_NOTA2 = 9;
const NOTA_MAX = 10;
const NOTA_MIN = 0;
const MEDIA_APROVACAO = 7;
const MEDIA_RECUPERACAO = 5;
const IDADE_MINIMA = 14;

define("TITULO_SISTEMA", "Sistema de notas de alunos para professores - instituição de wagner -");

$aluno = [];
$notas = [];

// titulo

limparTerminal();
echo "============================\n";
echo "      gestão de notas       \n";
echo "============================\n";

// menu
echo "=================================================================================\n";
echo "       Olá professor(a)! seja bem vindo(a) ao menu de notas dos alunos!       \n\n";
echo "=================================================================================\n";
echo "       menu       \n";
echo "1. alunos \n";
echo "2. cadastrar nota \n";
echo "3. ver relatorio \n";
echo "4. sair \n";

