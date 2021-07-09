# Principios Solid

- 5 Principios básicos de la programación orientada a objetos
- Ayudan a crear software mantenible en el tiempo
## Single Responsibility Principle

- Una clase debería tener un único objetivo.
    - Claro
    - Conciso
    - Acotado
- Alta cohesión
- Ventaja:
    - Permite detectar problemas más fácilmente

## Open/Closed Principle

- Una entidad de software debe quedarse abierta para su extensión, pero cerrada para su modificación

## Liskov Substitution Principle

- Cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer las diferencias entre ellas
    - El cliente debe usar métodos de la clase padre únicamente
    - La clase hija no debe alterar el comportamiento de los métodos de la clase padre

## Interface Segregation Principle

- Los clientes de un programa dado sólo deberían conocer de éste aquellos métodos que realmente usan.
- Nos indica como estructurar nuestras interfaces.
- Una clase que implementa una interface no se le puede exigir implementar un método que no necesita.

## Dependency Inversion Principle

- Nos ayuda a definir como se vinculan las diferentes clases que tienen que darle servicio a otras.
- Existen clases de alto nivel y de bajo nivel.
- Los módulos de alto nivel no deben depender de los de bajo nivel, ambos deben depender de abstracciones.
- Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.