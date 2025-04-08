public function testIsEven()
{
    $this->assertTrue(Funcoes::isEven(4));
    $this->assertFalse(Funcoes::isEven(5));
}
public function testFactorial()
{
    // Teste com comportamento esperado
    $this->assertEquals(120, Funcoes::factorial(5));
    $this->assertEquals(1, Funcoes::factorial(0));
    
    // Teste com entrada inválida
    $this->expectException(InvalidArgumentException::class);
    Funcoes::factorial(-1); // Deve lançar exceção
}
public function testIsPalindrome()
{
    // Teste com comportamento esperado
    $this->assertTrue(Funcoes::isPalindrome("radar"));
    $this->assertFalse(Funcoes::isPalindrome("hello"));
    
    // Teste com entrada de borda
    $this->assertTrue(Funcoes::isPalindrome("A man, a plan, a canal: Panama")); // Ignorando caracteres especiais e maiúsculas
}
public function testFahrenheitToCelsius()
{
    // Teste com comportamento esperado
    $this->assertEquals(0, Funcoes::fahrenheitToCelsius(32));
    $this->assertEquals(100, Funcoes::fahrenheitToCelsius(212));
}
public function testCalculateDiscount()
{
    // Teste com comportamento esperado
    $this->assertEquals(90, Funcoes::calculateDiscount(100, 10));
    $this->assertEquals(75, Funcoes::calculateDiscount(100, 25));
    
    // Teste com entrada inválida
    $this->expectException(InvalidArgumentException::class);
    Funcoes::calculateDiscount(-100, 10); // Deve lançar exceção
}
