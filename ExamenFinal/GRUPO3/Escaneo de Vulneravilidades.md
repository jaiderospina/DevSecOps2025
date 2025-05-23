## VULNERABILIDADES DETECTADAS ##
Durante el escaneo de seguridad realizado a la aplicación La Casa del Café utilizando la herramienta Snyk, se identificó la siguiente 
## vulnerabilidad
1. Cross-site Scripting (XSS)
Ubicación: Línea 21 del código
Puntaje de prioridad: 812
Identificador CWE: CWE-79

**Descripción de la vulnerabilidad:** La aplicación es vulnerable a un ataque de tipo Cross-site Scripting (XSS). Esto se debe a que los datos enviados por el usuario no están siendo correctamente validados ni sanitizados antes de ser renderizados en el HTML. Por ejemplo, un atacante podría enviar una cadena como:
