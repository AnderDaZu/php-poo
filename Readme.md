
# Abstracción

La abstracción en la Programación Orientada a Objetos (POO) es un principio que permite ocultar detalles complejos y exponer solo lo necesario 
para el uso del objeto. En otras palabras, te ayuda a enfocarte en lo que hace un objeto, en lugar de cómo lo hace.

Se llama abstracción porque el objetivo es simplificar y generalizar conceptos complejos al ocultar los detalles internos y exponer solo las características y comportamientos esenciales que un objeto debe tener. La abstracción permite que te concentres en "qué" hace un objeto en lugar de "cómo" lo hace.

Aquí está la razón por la cual se usa el término "abstracción":

- **Oculta la complejidad**: La clase abstracta define una interfaz común sin detallar cómo se implementan los métodos. Esto oculta la complejidad de las implementaciones específicas y permite que se use una interfaz simple.
- **Enfoca en lo esencial**: Solo se muestran los aspectos esenciales del objeto que son relevantes para el usuario, dejando fuera los detalles de implementación que podrían ser innecesarios o complicados.
- **Facilita el uso y la extensión**: Permite usar objetos de manera uniforme a través de una interfaz común, haciendo que sea más fácil de extender y modificar sin afectar al código que usa estas interfaces.

> En resumen, la abstracción es una manera de manejar la complejidad al proporcionar una vista simplificada del objeto que oculta los detalles innecesarios, permitiendo que el usuario se enfoque en la funcionalidad esencial del objeto.

## Interfaces

En la Programación Orientada a Objetos, las interfaces son una forma de definir un contrato que las clases deben seguir. La abstracción en el 
contexto de interfaces se refiere a la idea de definir qué métodos debe implementar una clase sin especificar cómo se deben implementar esos métodos.

- **Definición de Contrato**: Una interfaz define un conjunto de métodos que una clase debe implementar. Esto establece un contrato que asegura que todas las clases que implementan la interfaz proporcionen una implementación para esos métodos.
- **Ocultación de Detalles de Implementación**: Al usar interfaces, no te preocupas por los detalles internos de cómo se realiza una tarea; solo te importa que los métodos estén presentes y sigan el contrato establecido. Esto permite que las diferentes clases implementen los métodos de manera específica según sus necesidades.
- **Flexibilidad y Extensibilidad**: Las interfaces permiten que diferentes clases, incluso no relacionadas, implementen el mismo conjunto de métodos. Esto proporciona flexibilidad para trabajar con diferentes tipos de objetos de manera uniforme.
