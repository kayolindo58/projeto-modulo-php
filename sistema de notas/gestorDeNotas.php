<?php


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

// arrays

$aluno = [];

function CadastrarAluno(&$aluno)
{
    global $frequencia;
    global $nome;
    global $idade;

    $totalAulas = 100;

    $nome = trim(readline("digite o nome do aluno: "));
    $idade = filter_var(readline("digite sua idade: "), FILTER_VALIDATE_INT);
    $aulas = filter_var(readline("quantas vezes esse aluno esteve presente na aula: "), FILTER_VALIDATE_INT);

    if ($nome === "") {
        echo "O nome não pode retornar vazio. Tente novamente. \n";
        return;
    }

    if ($idade === false || $idade < IDADE_MINIMA) {
        echo "Idade invalida! o aluno deve ter pelo menos " . IDADE_MINIMA . "anos. Tente novamente. \n";
        return;
    }

    if ($aulas === false || $aulas < 0 || $aulas > $totalAulas){
        echo "Quantidade de aula invalida, tente entre 0 e " . $totalAulas . "\n";
    }

    $frequencia = ($aulas / $totalAulas) * 100;

    $aluno[] = [
        'nome' => $nome,
        'idade' => $idade,
        'frequencia' => $frequencia
    ];

    echo "Aluno cadastrado com sucesso! \n";

    count($aluno) + 1;
}
$notas = [];

// titulo

limparTerminal();
echo "============================\n";
echo "      gestão de notas       \n";
echo "============================\n";

// menu
echo "=================================================================================\n";
echo "       Olá professor(a)! seja bem vindo(a) ao menu de notas dos alunos!       \n";
echo "=================================================================================\n";


function CalcularMedia($nota1, $nota2)
{
    return ($nota1 * PESO_NOTA1 + $nota2 * PESO_NOTA2) / (PESO_NOTA1 + PESO_NOTA2);
}


function classificar($media)
{
    if ($media >= MEDIA_APROVACAO) {
        return "aprovado";
    } elseif ($media >= MEDIA_RECUPERACAO) {
        return "recuperacao";
    } else {
        return "reprovado";
    }
}

while (true) {
    echo "=================================================================================\n";
    echo "--- MENU --- \n";
    echo "1. alunos \n";
    echo "2. adicionar aluno a turma \n";
    echo "3. cadastrar nota \n";
    echo "4. ver relatorio \n";
    echo "5. sair \n";

    $opcao = readline("escolha as opções a seguir: ");

    switch ($opcao) {

        case '1':
            echo "Turma de alunos: \n" . count($aluno) . " alunos cadastrados.\n";
            foreach ($aluno as $alunoItem) {
                echo $alunoItem['nome'] . " - " . $alunoItem['idade'] . " anos" . " - " . ($alunoItem['frequencia'] ?? "n/d") . "% de frequencia. \n";
            }
            break;


        case '2':
            echo "adicione algum aluno: \n";
            CadastrarAluno($aluno);
            break;

        case '3':

            if (empty($aluno)) {
                echo "nenhum aluno cadastrado! cadastre um aluno antes de cadastrar as notas. \n";
                break;
            }

            foreach ($aluno as $i => $alunoAtual) {
                $n1 = readline("nota do aluno {$alunoAtual['nome']}: ");
                $n2 = readline("nota do aluno {$alunoAtual['nome']}: ");

                if (!is_numeric($n1) || !is_numeric($n2)) {
                    echo "nota invalida! tente novamente. \n";
                    continue;
                }

                $n1 = (float) $n1;
                $n2 = (float) $n2;

                if ($n1 < NOTA_MIN || $n1 > NOTA_MAX || $n2 < NOTA_MIN || $n2 > NOTA_MAX) {
                    echo "nota invalida! tente novamente. \n";
                    continue;
                }

                $media = CalcularMedia($n1, $n2);

                $notas[$i] = [
                    "nota1" => $n1,
                    "nota2" => $n2,
                    "media" => $media
                ];

                $situacao = classificar($media);

                echo "Media: " . number_format($media, 2) . "\n";
                echo "Situacao: $situacao\n";
            }

            break;
        case '4':

            $aprovados = 0;
            $reprovados = 0;
            $recuperacao = 0;

            $soma = 0;
            $contagem = 0;

            $frequenciaMinima = 21;

            foreach ($aluno as $i => $alunoSemente) {
                $nome = $alunoSemente['nome'];
                $nota = $notas[$i] ?? null;
                $frequencia = $alunoSemente['frequencia'] ?? null;

                if ($nota === null) {
                    echo "$nome - sem nota\n";
                    continue;
                }

                $media = $nota["media"];
                $situacao = classificar($media);

                if ($frequencia !== null && $frequencia < $frequenciaMinima) {
                    $situacao = "reprovado por falta";
                }

                echo "$nome - N1: {$nota['nota1']} | N2: {$nota['nota2']} | Media: $media | Frequencia: " . ($frequencia ?? "n/d") . "% | $situacao\n";

                if ($situacao === "aprovado") {
                    $aprovados++;
                } elseif ($situacao === "recuperacao") {
                    $recuperacao++;
                } else {
                    $reprovados++;
                }

                $soma += $media;
                $contagem++;
            }

            if ($contagem > 0) {
                $mediaGeral = $soma / $contagem;

                echo "\nMedia geral: $mediaGeral\n";
                echo "Aprovados: $aprovados\n";
                echo "Recuperacao: $recuperacao\n";
                echo "Reprovados: $reprovados\n";
            } else {
                echo "Nenhuma nota registrada.\n";
            }

            break;

        case '5':
            exit;

        default:
            echo "opção inválida! tente novamente. \n";
            break;
    }
}
