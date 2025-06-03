# Threat Intelligence Report: Ataques a APIs Similares en la Industria  

**Proyecto**: Gestión de Tickets con GLPI, MariaDB, Bot (API REST) – GCP  
**Objetivo**: Identificar amenazas comunes en soluciones basadas en APIs REST y microservicios similares en la industria.  
________________________________________

## 1. Contexto  
Este informe identifica amenazas relevantes a soluciones similares basadas en APIs REST, automatización de tickets, y bots integrados, con énfasis en entornos en la nube y dockerizados.  
________________________________________

## 2. Amenazas Relevantes Detectadas en la Industria  

### 2.1 API REST – Bot / Microservicio  
⚠️ Amenaza: Broken Authentication  
  - Ejemplo: Bots expuestos públicamente sin validación adecuada permitieron a atacantes enviar comandos falsos.  
  - Consecuencia: Acceso no autorizado, envío de comandos automatizados falsos.  
  - - Referencia: [OWASP API Top 10 – API2:2023](https://owasp.org/API-Security/editions/2023/en/0xa2-broken-authentication/)


### 2.2 APIs con conexión a base de datos (MariaDB)  
⚠️ Amenaza: SQL Injection vía API  
  - Ejemplo: Sistemas con endpoints mal validados (sanitización) permitieron inyecciones SQL en parámetros como búsqueda de tickets.  
  - Consecuencia: Acceso o manipulación directa de datos en MariaDB.  
  - Referencia: CVE-2023-2868 

________________________________________

## 3. Tendencias observadas en ataques a APIs

- Ataques dirigidos a API con tokens JWT mal configurados (sin expiración o sin validación de firma)  
- Despliegues Docker con APIs internas expuestas por error en redes públicas  

________________________________________

## 4. Recomendaciones

| Categoría           | Recomendación                                  | Justificación                                             |
|---------------------|------------------------------------------------|------------------------------------------------------------|
| Autenticación       | Implementar OAuth2 / JWT con expiración corta | Evitar sesiones largas y tokens reutilizables              |
| Exposición          | Restringir API solo a IPs permitidas / redes privadas | Reducir superficie expuesta en GCP                      |
| Seguridad de código | Análisis de código (SAST)                      | Detectar vulnerabilidades en endpoints y sanitización      |
| Monitoreo           | Logs + alertas por uso anómalo de endpoints   | Detectar posibles ataques de fuerza bruta o abuso de API   |

<img alt="Endpoint Badge" src="https://img.shields.io/endpoint?url=https%3A%2F%2Fgithub.com%2Fjaiderospina%2FDevSecOps2025%2Fblob%2Fmain%2FExamenFinal%2FGRUPO2%2FDocumentaci%25C3%25B3n%2FREADME.md%23-3-fase-de-integraci%25C3%25B3n-de-seguridad&style=for-the-badge&label=Regresar&labelColor=Fase%203&color=blue">

<a href="https://github.com/jaiderospina/DevSecOps2025/blob/main/ExamenFinal/GRUPO2/Documentaci%C3%B3n/README.md#-3-fase-de-integraci%C3%B3n-de-seguridad" target="_blank">
  <img src="https://img.shields.io/badge/Regresar-En%20Desarrollo-blue" alt="Estado: Fase 3" />
</a>