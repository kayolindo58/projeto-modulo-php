# 🧮 Calculadora em PHP (CLI)

Calculadora de terminal feita em **PHP puro**, desenvolvida como projeto prático do módulo de PHP. O usuário escolhe uma operação em um menu, digita os números e recebe o resultado direto no terminal.

---

## 📋 Sobre o projeto

O programa roda inteiramente na linha de comando, sem frameworks e sem dependências externas. Ele foi criado para praticar:

- Funções com parâmetros tipados e opcionais (`?int`)
- Estrutura condicional com `switch` e `if / elseif / else`
- Entrada de dados pelo terminal com `readline()`
- Conversão de tipos (*type casting*)
- Validação básica de entradas (divisão por zero, raiz de número negativo etc.)

---

## ⚙️ Operações disponíveis

| Opção | Operação        | Entradas        | Observação                                       |
|:-----:|-----------------|-----------------|--------------------------------------------------|
| 1     | Soma            | 2 números       | `n1 + n2`                                        |
| 2     | Subtração       | 2 números       | `n1 - n2`                                        |
| 3     | Multiplicação   | 2 números       | Não executa se algum número for `0`              |
| 4     | Divisão         | 2 números       | Não executa se algum número for `0`              |
| 5     | Exponencial     | 2 números       | Não aceita números negativos                     |
| 6     | Raiz quadrada   | 1 número        | Não aceita número negativo                       |
| 7     | Porcentagem     | 1 número        | Divide o número por 100 e exibe com o símbolo `%` |

---

## 🚀 Como executar

### Pré-requisitos

- **PHP 7.1 ou superior** com a extensão **CLI**
- Extensão **readline** habilitada (já vem ativa na maioria das instalações Linux e macOS)

Para conferir se o PHP está instalado:

```bash
php -v
```

### Passo a passo

1. Clone o repositório:

   ```bash
   git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git
   ```

2. Entre na pasta do projeto:

   ```bash
   cd SEU-REPOSITORIO
   ```

3. Execute o programa:

   ```bash
   php calculadora.php
   ```

---

## 💻 Exemplo de uso

```text
=======================================
        calculadora de wagner
=======================================
1. somar
2. subtrair
3. multiplicação
4. divisão
5. exponencial
6. raiz quadrada
7. porcentagem
escolha uma opção de 1 a 7:
1
Digite seu primeiro número:
10
Digite seu segundo número:
5
15
```

---

## 📁 Estrutura do projeto

```text
.
├── calculadora.php   # Código principal da calculadora
└── README.md         # Documentação do projeto
```

### Principais funções

- **`calculo(int $opcao, ?int $n1, ?int $n2, ?int $n3)`**: recebe a opção escolhida e os números, faz a operação correspondente e exibe o resultado.
- **`LimparTerminal()`**: limpa a tela do terminal usando sequências de escape ANSI.

---

## 🛠️ Tecnologias

- [PHP](https://www.php.net/)

---

## 🔮 Próximos passos

- [ ] Permitir números decimais (`float`) em vez de apenas inteiros
- [ ] Repetir o menu até o usuário escolher sair
- [ ] Usar `LimparTerminal()` entre os cálculos
- [ ] Separar a lógica das operações em funções individuais
- [ ] Adicionar testes automatizados

---

## 👤 Autor

Feito por **KAYO JULIAN** · [GitHub](https://github.com/SEU-USUARIO)

---

## 📄 Licença

Projeto desenvolvido para fins de estudo. Sinta-se à vontade para usar e adaptar.
