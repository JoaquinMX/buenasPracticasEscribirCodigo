# Patrones de diseño

- Soluciones de arquitectura de software aplicables a diferentes problemas.
- Existen 3 tipos:
    - De creación:
        - Hablan acerca de como se crean nuevas instancias de los objetos.
    - Estructurales:
        - Nos dicen como estructurar nuestras clases.
    - De comportamiento:
        - Nos dicen como deben comportarse nuestros objetos.
- No son siempre aplicables.

## Singleton

- Es tanto de creación como de comportamiento.
- Una clase que solo tenga una instancia a lo largo de una aplicación.
- Se suele utilizar para optimizar recursos.
    - Ejemplo *logs de errores* 

## Factory

- Es creacional.
- Se utiliza cuando la creación de un objeto es muy complejo.

## Command

- Patrón de Comportamiento.
- Se utiliza cuando existe una operación compleja que necesita ser realizada desde diferentes puntos de entrada. 

