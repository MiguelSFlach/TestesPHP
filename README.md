
# 📦 Testes de Funções em PHP

Este repositório contém testes unitários para diversas funções básicas implementadas na classe `Funcoes`. Os testes foram criados utilizando **PHPUnit**, com foco em verificar o comportamento esperado das funções, identificar falhas e garantir segurança em futuras evoluções do código.

---

## ✅ Funções Testadas

### 1. `isEven(int $numero): bool`
Verifica se um número é par.

```php
$this->assertTrue(Funcoes::isEven(4));
$this->assertFalse(Funcoes::isEven(5));
```

---

### 2. `factorial(int $numero): int`
Calcula o fatorial de um número. Lança exceção se o valor for negativo.

```php
$this->assertEquals(120, Funcoes::factorial(5));
$this->assertEquals(1, Funcoes::factorial(0));
$this->expectException(InvalidArgumentException::class);
Funcoes::factorial(-1);
```

---

### 3. `isPalindrome(string $texto): bool`
Verifica se uma palavra ou frase é um palíndromo (ignora espaços e pontuações).

```php
$this->assertTrue(Funcoes::isPalindrome("radar"));
$this->assertFalse(Funcoes::isPalindrome("hello"));
$this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama"));
```

---

### 4. `fahrenheitToCelsius(float $f): float`
Converte de Fahrenheit para Celsius.

```php
$this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
$this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
```

---

### 5. `calculateDiscount(float $valor, float $percentual): float`
Calcula o valor com desconto. Lança exceção se o valor for negativo.

```php
$this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
$this->assertEquals(75, Funcoes::calculateDiscount(100, 25));
$this->expectException(InvalidArgumentException::class);
Funcoes::calculateDiscount(-100, 10);
```

---

## 🔍 Análise dos Testes

### **1. Os testes ajudaram a identificar comportamentos inesperados?**
Sim. Por exemplo, ao testar `factorial(-1)`, a exceção mostra que entradas inválidas estão sendo tratadas corretamente.

---

### **2. Algum teste falhou? Por quê?**
Sim, erros podem ocorrer por lógica incompleta ou falta de tratamento de casos extremos.  
Exemplo: `isPalindrome()` pode falhar se a limpeza de caracteres especiais ou espaços não for feita corretamente.

---

### **3. Como os testes ajudam na evolução do código?**
Os testes funcionam como uma **rede de segurança**. Permitem refatorar funções com confiança, já que qualquer mudança que afete o comportamento esperado será rapidamente identificada.  
Isso facilita a manutenção, reduz regressões e aumenta a estabilidade do sistema.

---

## 🧪 Requisitos

- PHP 8+
- PHPUnit

```bash
composer require --dev phpunit/phpunit
```

---

## 🚀 Executando os testes

```bash
./vendor/bin/phpunit tests
```

---

📁 Estrutura do projeto (opcional):

```
/src
  └── Funcoes.php
/tests
  └── FuncoesTest.php
composer.json
phpunit.xml
README.md
```

---

Feito pelos alunos Felipe Eduardo Bohnen, Miguel Schneiders Flach e Roney Bieger Anshau
