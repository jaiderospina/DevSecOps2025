## VULNERABILIDADES DETECTADAS ##
Durante el escaneo de seguridad realizado a la aplicación La Casa del Café utilizando la herramienta Snyk, se identificó la siguiente 
## vulnerabilidad
1. Cross-site Scripting (XSS)
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
