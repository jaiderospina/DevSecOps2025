## VULNERABILIDADES DETECTADAS ##
Durante el escaneo de seguridad realizado a la aplicación La Casa del Café utilizando la herramienta Snyk, se identificó la siguiente:
## vulnerabilidad
# 1. Cross-site Scripting (XSS)

Ubicación: Línea 21 del código

Puntaje de prioridad: 812

Identificador CWE: CWE-79

**Descripción de la vulnerabilidad:** La aplicación es vulnerable a un ataque de tipo Cross-site Scripting (XSS). Esto se debe a que los datos enviados por el usuario no están siendo correctamente validados ni sanitizados antes de ser renderizados en el HTML. Por ejemplo, un atacante podría enviar una cadena como:
![image](https://github.com/user-attachments/assets/704ed741-ecef-4766-a9d1-98711a980034)
Dicha entrada es inyectada directamente en el HTML, lo que permite la ejecución de código malicioso en el navegador del usuario.
![image](https://github.com/user-attachments/assets/c3f1de93-11cc-4f3e-8c3b-3e16f9ae2f10)

**Mejores prácticas recomendadas:**
Para mitigar esta vulnerabilidad, se recomienda utilizar funciones de escape al momento de mostrar datos en el navegador. Un ejemplo de implementación segura en PHP sería:
![image](https://github.com/user-attachments/assets/72de0069-be74-4367-a85b-85d5945beaaf)

Esto asegura que cualquier entrada potencialmente peligrosa sea mostrada como texto plano en lugar de ejecutarse como código HTML o JavaScript.
# 2. SQL Injection
Ubicación: Línea 10 del código

Puntaje de prioridad: 878

Identificador CWE: CWE-89

**Descripción de la vulnerabilidad:** Se ha detectado una vulnerabilidad de inyección SQL en el método buscar_reserva_por_num_habitacion(). Esta función concatena directamente el valor de $data[0] en la consulta SQL sin aplicar medidas de validación ni utilizar consultas preparadas. Esto permite que un atacante manipule la consulta para obtener, modificar o eliminar información sensible de la base de datos.
Por ejemplo, enviando el siguiente dato a través de una petición POST:
![image](https://github.com/user-attachments/assets/b5cc9a96-d7ab-443f-b5d7-46cd5245c9d9)
El atacante puede forzar que la condición de búsqueda sea siempre verdadera, accediendo a todas las reservas existentes.
![image](https://github.com/user-attachments/assets/b1ce4121-a08f-4dab-b393-cb0059027919)
**Mejores prácticas recomendadas:** Para prevenir este tipo de vulnerabilidades, es fundamental sanitizar los datos de entrada y utilizar consultas preparadas o mecanismos que limiten el tipo de datos permitidos. Un ejemplo de implementación segura sería:
![image](https://github.com/user-attachments/assets/b99021b5-63db-4175-8fff-68d97645abb2)

Esto reduce significativamente el riesgo de inyección al garantizar que solo se procesen números enteros como entrada.

# 3. Uso de Credenciales Codificadas en el Código (Hardcoded Credentials)

Ubicación: Línea 10 del código

Puntaje de prioridad: 162

Identificadores CWE: CWE-798, CWE-259

**Descripción de la vulnerabilidad:** Se detectó el uso de credenciales codificadas directamente en el código fuente:
![image](https://github.com/user-attachments/assets/6329afbf-8be8-425f-a4d2-229b9a69267a)

El uso de este enfoque representa un riesgo significativo por varias razones:

Si un atacante accede al código fuente (por filtración, error de configuración o acceso indebido), las credenciales quedan completamente expuestas.

Dificulta la rotación periódica de contraseñas, ya que requiere modificaciones directas al código.

No permite la separación clara entre entornos (desarrollo, pruebas, producción), lo que puede llevar a errores de configuración y fallas de seguridad.

![image](https://github.com/user-attachments/assets/2c7d39bf-9c21-4bd1-afee-8e4e3e0441e8)
**Mejores prácticas recomendadas:** Las credenciales nunca deben estar incrustadas en el código fuente. Se recomienda utilizar variables de entorno o archivos de configuración externos, los cuales deben estar fuera del directorio accesible públicamente desde el servidor web. Por ejemplo:
![image](https://github.com/user-attachments/assets/db94d7e7-4ad9-41db-94c6-c118d99bf232)

Además, se deben implementar controles de acceso adecuados al entorno de ejecución para proteger la información sensible.

