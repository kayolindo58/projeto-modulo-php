# 🐘 Projetos PHP — Curso Full Stack Coude

Repositório de projetos desenvolvidos durante o módulo de **PHP do curso Full Stack da Coude**. O objetivo é aplicar conceitos de lógica de programação, funções, estruturas condicionais, manipulação de dados e desenvolvimento de aplicações interativas no terminal.

## 📂 Projetos

### 🧮 1. Calculadora em PHP

**Arquivo:** [`calculadora.php`](./calculadora%20projeto%20main/calculadora.php)

Calculadora desenvolvida em PHP para executar operações matemáticas a partir de opções selecionadas pelo usuário.

**Operações disponíveis no menu:**
- ➕ Adição
- ➖ Subtração
- ✖️ Multiplicação
- ➗ Divisão
- 🔢 Potenciação
- √ Raiz quadrada
- 💯 Porcentagem

**Conceitos aplicados:**
- Criação e utilização de funções;
- Parâmetros tipados e opcionais;
- Estrutura de seleção `switch`;
- Condicionais `if` e `else`;
- Operadores aritméticos;
- Entrada de dados com `readline()`;
- Funções matemáticas nativas, como `sqrt()`;
- Limpeza do terminal com sequências de escape ANSI.

**Melhorias em desenvolvimento:** corrigir o fluxo de seleção das opções de raiz quadrada e porcentagem, permitir multiplicações por zero e revisar a validação da divisão por zero.

### 📊 2. Sistema de Gestão de Notas

**Arquivo:** [`gestorDeNotas.php`](./sistema%20de%20notas/gestorDeNotas.php)

Sistema de terminal voltado ao gerenciamento de alunos, registro de notas e acompanhamento do desempenho acadêmico.

**Funcionalidades:**

- **Listagem de alunos:** exibe os estudantes cadastrados, suas idades e frequências.
- **Cadastro de alunos:** solicita nome, idade e quantidade de aulas frequentadas.
- **Cadastro de notas:** registra duas avaliações por aluno e valida os valores entre 0 e 10.
- **Cálculo de médias:** calcula a média ponderada das avaliações.
- **Classificação acadêmica:** identifica alunos aprovados, em recuperação ou reprovados.
- **Relatório da turma:** apresenta notas, médias, frequência, situações acadêmicas e estatísticas gerais.

**Regras de avaliação:**

| Critério | Valor |
|---|---:|
| Peso da primeira nota | 6 |
| Peso da segunda nota | 9 |
| Nota mínima | 0 |
| Nota máxima | 10 |
| Média para aprovação | 7 |
| Média mínima para recuperação | 5 |
| Idade mínima para cadastro | 14 anos |

A média ponderada é calculada pela seguinte fórmula:

\[
M = \frac{(N_1 \times 6) + (N_2 \times 9)}{15}
\]

**Classificação:**
- **Aprovado:** média maior ou igual a 7.
- **Recuperação:** média maior ou igual a 5 e menor que 7.
- **Reprovado:** média inferior a 5.

O sistema também considera a frequência do aluno no relatório. No código atual, frequências inferiores a 21% são classificadas como reprovação por falta.

**Conceitos aplicados:**
- Funções e parâmetros por referência;
- Arrays associativos e multidimensionais;
- Constantes com `const` e `define()`;
- Estruturas condicionais;
- Laços de repetição `while` e `foreach`;
- Validação de dados com `filter_var()` e `is_numeric()`;
- Operadores aritméticos e lógicos;
- Formatação numérica com `number_format()`;
- Organização de dados e geração de relatórios.

**Melhorias em desenvolvimento:** reforçar a validação da frequência, permitir corrigir notas individualmente e revisar a regra de reprovação por faltas para utilizar um limite de frequência definido pela instituição.

## 🛠️ Tecnologias utilizadas

- **PHP** — linguagem principal dos projetos.
- **Terminal** — execução dos scripts e interação com o usuário.
- **Visual Studio Code** — editor de código recomendado.
- **Git e GitHub** — versionamento e compartilhamento dos projetos.

## ⚙️ Requisitos

- PHP instalado no computador;
- Terminal ou prompt de comando;
- Ambiente com suporte à função `readline()`.

Download do PHP: [php.net/downloads](https://www.php.net/downloads.php).

Verifique a instalação com:

```bash
php -v
```

## 🚀 Como executar

### 1. Clone o repositório

```bash
git clone https://github.com/kayolindo58/mini-projetos-php.git
```

### 2. Acesse a pasta do projeto

```bash
cd mini-projetos-php
```

Se os arquivos estiverem em uma subpasta, entre nela antes de executar os comandos seguintes.

### 3. Execute a calculadora

```bash
php "calculadora projeto main/calculadora.php"
```

### 4. Execute o sistema de notas

```bash
php "sistema de notas/gestorDeNotas.php"
```

Os programas serão executados no terminal, onde você poderá interagir com os menus e informar os dados solicitados.

## 🎯 Objetivos de aprendizagem

- Desenvolver o raciocínio lógico;
- Consolidar os fundamentos do PHP;
- Criar funções reutilizáveis;
- Trabalhar com arrays e constantes;
- Validar entradas fornecidas pelo usuário;
- Aplicar cálculos matemáticos e médias ponderadas;
- Construir aplicações interativas;
- Organizar dados e gerar relatórios;
- Identificar problemas e aprimorar a qualidade do código.

## 👨‍💻 Autor

**Kayo Julian**

- GitHub: [@kayolindo58](https://github.com/kayolindo58)
- Formação: Curso Full Stack — Coude

---

*Projetos educacionais desenvolvidos durante meus estudos de programação.*
