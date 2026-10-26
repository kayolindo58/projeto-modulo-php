# 🐘 Projetos PHP — Curso Full Stack Coude

Repositório de projetos desenvolvidos durante o módulo de **PHP do curso Full Stack da Coude**, com foco na prática da lógica de programação, manipulação de dados, funções e desenvolvimento de aplicações interativas no terminal.

## 📂 Projetos

### 🧮 1. Calculadora em PHP

**Arquivo:** [`calculadora.php`](./calculadora%20projeto%20main/calculadora.php)

Calculadora interativa desenvolvida em PHP para realizar operações matemáticas a partir das opções selecionadas pelo usuário.

**Operações propostas:**
- ➕ Adição;
- ➖ Subtração;
- ✖️ Multiplicação;
- ➗ Divisão;
- 🔢 Potenciação;
- √ Raiz quadrada;
- 💯 Cálculo de porcentagem.

**Conceitos aplicados:**
- Criação e utilização de funções;
- Parâmetros tipados e parâmetros opcionais;
- Estrutura de seleção `switch`;
- Estruturas condicionais `if` e `else`;
- Operadores aritméticos;
- Entrada de dados com `readline()`;
- Funções matemáticas nativas, como `sqrt()`;
- Limpeza do terminal com sequências de escape ANSI.

**Pontos a melhorar:** corrigir a condição de seleção entre raiz quadrada e porcentagem, validar a divisão por zero e ajustar a lógica de multiplicação para permitir operações com o número zero.

### 📊 2. Sistema de Gestão de Notas

**Arquivo:** [`gestorDeNotas.php`](./sistema%20de%20notas/gestorDeNotas.php)

Aplicação de terminal voltada à gestão de alunos, ao registro de notas e ao acompanhamento do desempenho escolar.

O sistema possui um menu interativo destinado a professores, com opções para consultar alunos, cadastrar novos estudantes, registrar notas, visualizar relatórios e encerrar a aplicação.

**Funcionalidades implementadas:**

- **Listagem de alunos:** apresenta os estudantes cadastrados e suas idades.
- **Cadastro de alunos:** solicita nome e idade, validando os campos e a idade mínima.
- **Cadastro de notas:** solicita duas notas por aluno e verifica se os valores são numéricos e estão entre 0 e 10.
- **Cálculo da média ponderada:** utiliza pesos diferentes para as duas avaliações.
- **Classificação de desempenho:** identifica alunos aprovados, em recuperação ou reprovados.
- **Relatório da turma:** apresenta notas, médias, situações acadêmicas e estatísticas gerais.

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

A média ponderada é calculada pela fórmula:

\[
\text{Média}=\frac{(N_1\times6)+(N_2\times9)}{15}
\]

A classificação segue estas regras:

- **Aprovado:** média maior ou igual a 7.
- **Recuperação:** média maior ou igual a 5 e menor que 7.
- **Reprovado:** média inferior a 5.

**Conceitos aplicados:**
- Funções e parâmetros por referência;
- Arrays associativos e multidimensionais;
- Constantes com `const` e `define()`;
- Estruturas condicionais;
- Laços de repetição com `while` e `foreach`;
- Validação de entradas com `filter_var()` e `is_numeric()`;
- Operadores aritméticos e lógicos;
- Organização de dados e geração de relatórios;
- Manipulação de strings e formatação numérica.

**Pontos a melhorar:** revisar a variável utilizada no cadastro de notas para evitar sobrescrever o array principal de alunos, além de aperfeiçoar a validação das notas e o controle dos registros.

## 🛠️ Tecnologias utilizadas

- **PHP** — linguagem utilizada para desenvolver a lógica dos projetos.
- **Terminal** — execução dos scripts e interação com o usuário.
- **Visual Studio Code** — editor de código recomendado.

## ⚙️ Requisitos

- PHP instalado no computador;
- Terminal ou prompt de comando;
- Ambiente com suporte à função `readline()`.

Você pode baixar o PHP pelo site oficial: [php.net](https://www.php.net/downloads.php).

Para verificar a instalação:

```bash
php -v
```

## 🚀 Como executar

### 1. Clone o repositório

```bash
git clone https://github.com/kayolindo58/mini-projetos-php.git
```

### 2. Entre na pasta do projeto

```bash
cd mini-projetos-php
```

Ajuste o caminho caso os arquivos estejam dentro de uma pasta adicional.

### 3. Execute a calculadora

```bash
php "calculadora projeto main/calculadora.php"
```

### 4. Execute o sistema de notas

```bash
php "sistema de notas/gestorDeNotas.php"
```

Após iniciar o sistema de notas, utilize o menu apresentado no terminal para navegar pelas funcionalidades disponíveis.

## 🎯 Objetivos de aprendizagem

- Desenvolver o raciocínio lógico;
- Praticar os fundamentos da linguagem PHP;
- Criar funções reutilizáveis;
- Trabalhar com arrays e constantes;
- Validar dados informados pelo usuário;
- Aplicar cálculos matemáticos e médias ponderadas;
- Construir menus interativos;
- Organizar informações e gerar relatórios;
- Desenvolver aplicações progressivamente mais completas.

## 👨‍💻 Autor

**Kayo Julian**

- GitHub: [@kayolindo58](https://github.com/kayolindo58)
- Formação: Curso Full Stack — Coude

---

*Projetos educacionais desenvolvidos durante meus estudos de programação.*
