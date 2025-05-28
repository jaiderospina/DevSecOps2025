
## Task Manager Frontend

Este es el frontend del sistema **Task Manager**, desarrollado con Angular y TailwindCSS. La aplicación permite a los usuarios autenticarse, gestionar tareas y comunicarse con una API backend para almacenar y recuperar datos.

## 🚀 Tecnologías Utilizadas

* [Angular](https://angular.io/)
* [Tailwind CSS](https://tailwindcss.com/)
* [RxJS](https://rxjs.dev/)
* [NgRx Store](https://ngrx.io/guide/store) (para manejo de estado)
* [Docker](https://www.docker.com/) (para contenerización)
* [TypeScript](https://www.typescriptlang.org/)

## 🧱 Estructura del Proyecto

```bash
src/
├── app/
│   ├── core/                # Servicios, guards, interceptores
│   ├── features/            # Funcionalidades del sistema (ej. tareas)
│   ├── modules/             # Módulos independientes (auth)
│   ├── store/               # Estado global (auth, app.state)
│   └── app-routing.module.ts
├── environments/            # Variables de entorno
├── styles/                  # Estilos globales (Tailwind)
├── main.ts                  # Punto de entrada
```

## ⚙️ Configuración del Entorno

Clona el repositorio y navega al directorio:

```bash
git clone https://github.com/tu-usuario/TaskManagerFrontEnd-main.git
cd TaskManagerFrontEnd-main
```

Instala las dependencias:

```bash
npm install
```

Ejecuta la aplicación en desarrollo:

```bash
ng serve
```

La aplicación estará disponible en `http://localhost:4200`.

## 🐳 Uso con Docker

Puedes construir y levantar el contenedor usando Docker:

```bash
docker build -t task-manager-frontend .
docker run -p 4200:80 task-manager-frontend
```

O usa Docker Compose:

```bash
docker-compose up --build
```

## 🧪 Testing

Para ejecutar pruebas unitarias:

```bash
ng test
```

## 📁 Módulos y Funcionalidades

### Autenticación (`auth`)

* Registro de usuario
* Login
* Protección de rutas mediante `AuthGuard`

### Gestión de Tareas (`tasks`)

* Listado de tareas
* Crear/editar tareas usando modales (`task-modal`)
* Comunicación con el backend mediante `TasksService`

## 🌐 Comunicación con el Backend

La aplicación se comunica con un **Backend API** a través de servicios HTTP, utilizando un interceptor para añadir el token JWT a cada solicitud. Define las URL del backend en `environment.ts`.

```ts
export const environment = {
  production: false,
  apiUrl: 'http://localhost:3000/api'
};
```

## 📦 Producción

Para compilar la app en modo producción:

```bash
ng build --configuration production
```

El contenido será generado en la carpeta `dist/`.

## Task Manager Backend

Este proyecto es el backend del sistema **Task Manager**, construido con Spring Boot. Proporciona una API REST segura para manejar autenticación de usuarios y operaciones CRUD sobre tareas.

## 🚀 Tecnologías Utilizadas

* Java 17
* Spring Boot
* Spring Security + JWT
* Spring Data JPA
* Swagger / OpenAPI
* PostgreSQL (o base de datos relacional compatible)
* Docker / Docker Compose

## 🧱 Estructura del Proyecto

```
src/main/java/com/kata/tareas/gestiondetareas
├── config               # Configuraciones de seguridad, JWT y Swagger
├── controllers          # Controladores REST (Auth y Task)
├── dto                  # Objetos de transferencia de datos
├── exception            # Manejo global de excepciones
├── model                # Entidades JPA (User y Task)
├── repository           # Interfaces JPA para acceso a datos
├── security             # Filtros y utilidades JWT
├── service              # Lógica de negocio
├── GestiondetareasApplication.java
```

## Endpoints Principales

### Autenticación

* `POST /auth/register` - Registro de usuarios
* `POST /auth/login` - Login y generación de token JWT

### Tareas

* `GET /tasks` - Obtener todas las tareas
* `POST /tasks` - Crear nueva tarea
* `PUT /tasks/{id}` - Actualizar tarea
* `DELETE /tasks/{id}` - Eliminar tarea

> Todos los endpoints de `/tasks` requieren autenticación JWT.

## Seguridad

Este proyecto utiliza JWT (JSON Web Token) para autenticar y autorizar a los usuarios. Asegúrate de enviar el token en el header `Authorization: Bearer <token>` para acceder a los recursos protegidos.

## Swagger

La documentación interactiva de la API está disponible en:

```
http://localhost:8080/swagger-ui/index.html
```

## Variables de Entorno

Configura los valores en `application.properties` o mediante variables de entorno:

```
spring.datasource.url=jdbc:postgresql://localhost:5432/taskdb
spring.datasource.username=usuario
spring.datasource.password=contraseña
jwt.secret=secreto_personalizado
```

## 🐳 Docker

Para levantar el backend junto con la base de datos:

```bash
docker-compose up --build
```

Esto usará `Dockerfile` y `docker-compose.yml` para iniciar la aplicación y PostgreSQL.

## 🧪 Pruebas

El proyecto incluye pruebas unitarias para el controlador y el servicio de tareas en `src/test/java/...`.

```bash
./mvnw test
```

