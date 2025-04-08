# TestesPHP


Testando as funções

Teste função 1

public function testIsEven()
{
    // Teste com comportamento esperado
    $this->assertTrue(Funcoes::isEven(4));
    $this->assertFalse(Funcoes::isEven(5));
}

Teste função 2

public function testFactorial()
{
    // Teste com comportamento esperado
    $this->assertEquals(120, Funcoes::factorial(5));
    $this->assertEquals(1, Funcoes::factorial(0));
    
    // Teste com entrada inválida
    $this->expectException(InvalidArgumentException::class);
    Funcoes::factorial(-1); // Deve lançar exceção
}

Teste função 3

public function testIsPalindrome()
{
    // Teste com comportamento esperado
    $this->assertTrue(Funcoes::isPalindrome("radar"));
    $this->assertFalse(Funcoes::isPalindrome("hello"));
    
    // Teste com entrada de borda
    $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama")); // Ignorando caracteres especiais e maiúsculas
}


Teste função 4

public function testFahrenheitToCelsius()
{
    // Teste com comportamento esperado
    $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
}


Teste função 5

public function testCalculateDiscount()
{
    // Teste com comportamento esperado
    $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    $this->assertEquals(75, Funcoes::calculateDiscount(100, 25));
    
    // Teste com entrada inválida
    $this->expectException(InvalidArgumentException::class);
    Funcoes::calculateDiscount(-100, 10); // Deve lançar exceção
}



1- Os testes ajudaram a identificar comportamentos inesperados?
Sim, os testes revelam erros que poderiam passar despercebidos. Exemplo: ao testar , a exceção  confirma que entradas negativas são tratadas adequadamente.

2- Algum teste falhou? Por quê?
Sim, falhas podem ocorrer por lógica incompleta ou casos não previstos. Exemplo:  pode falhar se o regex não limpar adequadamente caracteres especiais, como  ou espaços, antes de verificar o palíndromo

3- Como os testes podem ajudar na evolução segura do código?
Os testes atuam como uma rede de segurança ao realizar mudanças no código. Refatorações, como ajustar  para uma lógica diferente, podem ser feitas com confiança, pois os testes alertam se a funcionalidade existente foi comprometida. Além disso, novas funcionalidades podem ser adicionadas com facilidade enquanto os testes existentes garantem que o código antigo permanece estável. Isso reduz regressões e melhora a confiabilidade do sistema
