# Arquitectura y Patrones de Diseño en TaskBackend-grupo5

## 🏠 Arquitectura General: Layered Architecture

El proyecto sigue una **arquitectura en capas** con separación clara de responsabilidades:

### 1. Capa de Presentación (Controllers)

* **Ubicación:** `controllers/`
* **Componentes:** `AuthController`, `TaskController`
* **Responsabilidad:** Manejar peticiones HTTP, delegar lógica a la capa de servicios.
* **Patrón:** MVC (Model-View-Controller) usando Spring MVC.

### 2. Capa de Servicio (Service)

* **Ubicación:** `service/`
* **Componentes:** `TaskService`, `UserDetailsServiceImpl`
* **Responsabilidad:** Contiene la lógica de negocio principal.
* **Patrón:** Service Layer

### 3. Capa de Persistencia (Repository)

* **Ubicación:** `repository/`
* **Componentes:** `TaskRepository`, `UserRepository`
* **Responsabilidad:** Acceso a datos con Spring Data JPA.
* **Patrón:** Repository Pattern

### 4. Capa de Modelo (Model)

* **Ubicación:** `model/`
* **Componentes:** `Task`, `User`
* **Responsabilidad:** Representar entidades persistentes.

### 5. Capa de Seguridad

* **Ubicación:** `security/`, `config/`
* **Componentes:** `JwtAuthenticationFilter`, `JwtUtil`, `SecurityConfig`, `JwtConfig`
* **Responsabilidad:** Autenticación y autorización con JWT.
* **Patrón:** Filter Pattern (para interceptar peticiones).

---

## 🔐 Seguridad: JWT + Spring Security

* **Filtro personalizado:** `JwtAuthenticationFilter` para validar tokens.
* **Token Utility:** `JwtUtil` para generar y validar JWTs.
* **User Adapter:** `UserDetailsServiceImpl` conecta el modelo de usuarios con Spring Security.
* **Patrones:**

  * Filter Pattern
  * Utility Class
  * Adapter Pattern

---

## ⚙️ Configuración

* **Ubicación:** `config/`
* **Componentes:** `SwaggerOpenAPIConfig`, `SecurityConfig`
* **Patrón:** Configuration Object Pattern

---

## 📄 DTOs (Data Transfer Objects)

* **Ubicación:** `dto/`
* **Componentes:** `TaskDTO`, `UserDTO`, `AuthenticationRequest`, `AuthenticationResponse`
* **Responsabilidad:** Separar la representación de datos de las entidades de dominio.
* **Patrón:** DTO Pattern

---

## ⚡ Manejo de Excepciones

* **Ubicación:** `exception/`
* **Componentes:** `GlobalExceptionHandler`, `TaskNotFoundException`
* **Patrón:** Global Error Handler Pattern

---

## 📃 Documentación con Swagger

* **Componentes:** `SwaggerOpenAPIConfig`, `SwaggerAnnotationsConfig`
* **Patrón:** OpenAPI Specification (Springdoc)

---

## 🔧 Pruebas

* **Ubicación:** `test/`
* **Pruebas:** `TaskControllerTest`, `TaskServiceTest`
* **Tipo:** Unitarias y posiblemente de integración
* **Patrón:** Test Pyramid

---

## 🗌 Resumen de Patrones de Diseño Utilizados

| Patrón                   | Propósito                                        | Ejemplo/Ubicación                          |
| ------------------------ | ------------------------------------------------ | ------------------------------------------ |
| MVC                      | Separación de responsabilidades UI/lógica/datos  | Controllers, Services, Models              |
| Repository               | Encapsula lógica de acceso a datos               | `TaskRepository`, `UserRepository`         |
| Service Layer            | Centraliza la lógica de negocio                  | `TaskService`, `UserDetailsServiceImpl`    |
| DTO                      | Transporte de datos entre capas                  | `TaskDTO`, `AuthenticationResponse`        |
| Singleton (Spring Beans) | Instancias únicas manejadas por Spring           | Todos los componentes con `@Service`, etc. |
| Filter                   | Intercepta peticiones HTTP antes del controlador | `JwtAuthenticationFilter`                  |
| Adapter                  | Adapta modelo de seguridad a Spring Security     | `UserDetailsServiceImpl`                   |
| Configuration Object     | Configuración centralizada e inyectable          | `JwtConfig`, `SecurityConfig`              |
| Exception Handler        | Manejo global de errores                         | `GlobalExceptionHandler`                   |

---

## 🔹 Conclusión

La arquitectura está bien estructurada siguiendo las mejores prácticas de Spring Boot. Ofrece:

* Separación clara de responsabilidades
* Seguridad robusta basada en JWT
* Documentación automática
* Pruebas por capa
* Facilidad de mantenimiento y extensibilidad

