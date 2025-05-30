## VULNERABILIDADES DETECTADAS ##
Durante el escaneo de seguridad realizado al BACKEND de la aplicación se detectan varias vulnerabilidades, a continuación, se describen algunas de ellas:  
## vulnerabilidad
# 1. vulnerabilidad de equivalencia de ruta en Apache Tomca 

**Descripción de la vulnerabilidad:** Equivalencia de ruta: 'file.Name' (punto interno) que provoca la ejecución remota de código, la divulgación de información o la adición de contenido malicioso a los archivos subidos mediante el servlet predeterminado con escritura habilitada en Apache Tomcat. Este problema afecta a Apache Tomcat: de 11.0.0-M1 a 11.0.2, de 10.1.0-M1 a 10.1.34 y de 9.0.0.M1 a 9.0.98. Si todo lo siguiente fuera cierto, un usuario malintencionado podría ver archivos sensibles de seguridad y/o inyectar contenido en esos archivos: - escrituras habilitadas para el servlet predeterminado (deshabilitadas de manera predeterminada) - soporte para PUT parcial (habilitado de manera predeterminada) - una URL de destino para cargas sensibles de seguridad que era un subdirectorio de una URL de destino para cargas públicas - conocimiento del atacante de los nombres de los archivos sensibles de seguridad que se estaban cargando - los archivos sensibles de seguridad también se estaban cargando a través de PUT parcial Si todo lo siguiente fuera cierto, un usuario malintencionado podría realizar una ejecución de código remoto: - escrituras habilitadas para el servlet predeterminado (deshabilitadas de manera predeterminada) - soporte para PUT parcial (habilitado de manera predeterminada) - la aplicación estaba usando la persistencia de sesión basada en archivos de Tomcat con la ubicación de almacenamiento predeterminada - la aplicación incluía una biblioteca que se puede aprovechar en un ataque de deserialización Se recomienda a los usuarios actualizar a la versión 11.0.3, 10.1.35 o 9.0.99, que corrige el problema.

 * **Gravedad:** CRITICA 
 * **Puntuación base 4.0:** 9.8 
 * **Version instalada:** 10.1.31 
 * **Version recomendada:** 11.0.3 

- [Pagina analisis (CVE-2025-24813)] (https://nvd.nist.gov/vuln/detail/CVE-2025-24813)


# 2. Vulnerabilidad en QOS.CH logback-core 

**Descripción de la vulnerabilidad:** La vulnerabilidad ACE en JaninoEventEvaluator por QOS.CH logback-core (versiones 0.1 a 1.3.14 y 1.4.0 a 1.5.12) en aplicaciones Java permite a un atacante ejecutar código arbitrario comprometiendo un archivo de configuración de logback existente o inyectando una variable de entorno antes de la ejecución del programa. Los archivos de configuración de logback maliciosos pueden permitir al atacante ejecutar código arbitrario mediante la extensión JaninoEventEvaluator. Un ataque exitoso requiere que el usuario tenga acceso de escritura a un archivo de configuración. Alternativamente, el atacante podría inyectar una variable de entorno maliciosa que apunte a un archivo de configuración malicioso. En ambos casos, el ataque requiere privilegios existentes.

**Gravedad:** MEDIA
**Puntuación base 4.0:** 5.90
**Version instalada:** 1.5.11
**Version recomendada:** 1.5.13

- [Pagina analisis (CVE-2024-12798)] (https://www.incibe.es/incibe-cert/alerta-temprana/vulnerabilidades/cve-2024-12798)
