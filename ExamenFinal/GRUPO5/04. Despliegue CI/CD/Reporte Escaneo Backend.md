## VULNERABILIDADES DETECTADAS ##
Durante el escaneo de seguridad realizado al BACKEND de la aplicación se detectan varias vulnerabilidades, a continuación, se describen algunas de ellas:  
## Muestra de vulnerabilidades
# 1. vulnerabilidad de equivalencia de ruta en Apache Tomca 

**Descripción de la vulnerabilidad:** Equivalencia de ruta: 'file.Name' (punto interno) que provoca la ejecución remota de código, la divulgación de información o la adición de contenido malicioso a los archivos subidos mediante el servlet predeterminado con escritura habilitada en Apache Tomcat.

 * **Paquete:** org.apache.tomcat.embed:tomcat-embed-core 
 * **Gravedad:** CRITICA 
 * **Puntuación base 4.0:** 9.8 
 * **Version instalada:** 10.1.31 
 * **Version recomendada:** 11.0.3 

 [Pagina analisis (CVE-2025-24813)](https://nvd.nist.gov/vuln/detail/CVE-2025-24813)

# 2. Vulnerabilidad en QOS.CH logback-core 

**Descripción de la vulnerabilidad:** La vulnerabilidad de condición de carrera de tiempo de verificación y tiempo de uso (TOCTOU) durante la compilación de JSP en Apache Tomcat permite una RCE en sistemas de archivos que no distinguen entre mayúsculas y minúsculas cuando el servlet predeterminado está habilitado para escritura (configuración no predeterminada).

* **Paquete:** org.apache.tomcat.embed:tomcat-embed-core
* **Gravedad:** ALTO
* **Puntuación base 4.0:** 9.8
* **Version instalada:** 10.1.31
* **Version recomendada:** 	11.0.2

 [Pagina analisis (CVE-2024-12798)](https://nvd.nist.gov/vuln/detail/cve-2024-50379)



# 3. Vulnerabilidad en QOS.CH logback-core 

**Descripción de la vulnerabilidad:** La vulnerabilidad ACE en JaninoEventEvaluator por QOS.CH logback-core (versiones 0.1 a 1.3.14 y 1.4.0 a 1.5.12) en aplicaciones Java permite a un atacante ejecutar código arbitrario comprometiendo un archivo de configuración de logback existente o inyectando una variable de entorno antes de la ejecución del programa. Los archivos de configuración de logback maliciosos pueden permitir al atacante ejecutar código arbitrario mediante la extensión JaninoEventEvaluator. 
* **Paquete:** ch.qos.logback:núcleo de registro
* **Gravedad:** MEDIA
* **Puntuación base 4.0:** 5.9
* **Version instalada:** 1.5.11
* **Version recomendada:** 1.5.13

 [Pagina analisis (CVE-2024-12798)](https://www.incibe.es/incibe-cert/alerta-temprana/vulnerabilidades/cve-2024-12798)
