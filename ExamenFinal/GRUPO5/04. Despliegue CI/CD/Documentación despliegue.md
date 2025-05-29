# Implementación Pipelines: 

## BackEnd [CD/CI](https://github.com/AngelRod-cyber/TaskBackend-grupo5/actions/runs/15245934119).
## FronEnd[CD/CI](https://github.com/AngelRod-cyber/TaskFrontend-grupo5).

# 🏗️ Diagrama de Despliegue: angular-build-security-docker

```plaintext
+-----------------------------+
|         GitHub Actions      |
|-----------------------------|
|   Workflows:                |
|   - angular-build-security- |
|     -docker (workflow_call) |
+-----------------------------+
           |
           v
+-----------------------------+
|   Setup Job 🧱              |
|-----------------------------|
|   - Checkout code           |
|   - Set up Node.js (v18)    |
|   - Cache node_modules      |
+-----------------------------+
           |
           v
+-----------------------------+
|   Test Job ✅                |
|-----------------------------|
|   - Checkout code           |
|   - Set up Node.js (v18)    |
|   - Install Angular CLI     |
|   - Install Google Chrome   |
|   - Run Karma tests         |
|   - Build Angular app (dist)|
|   - Upload coverage & dist  |
+-----------------------------+
           |
           v
+-----------------------------+
|   SonarCloud Scan 📊        |
|-----------------------------|
|   - Checkout code           |
|   - Set up Node.js          |
|   - Install sonar-scanner   |
|   - Download coverage       |
|   - Run sonar-scanner       |
|     with SONAR_TOKEN        |
+-----------------------------+
           |
           v
+-----------------------------+
|   Docker Job 🐳             |
|-----------------------------|
|   - Checkout code           |
|   - Set up Node.js          |
|   - Build Angular app       |
|   - Login to DockerHub      |
|     with DOCKER_USERNAME &  |
|     DOCKER_PASSWORD         |
|   - Build Docker image      |
|   - Install Trivy           |
|   - Scan Docker image       |
|     (Trivy table + HTML)    |
|   - Upload Trivy report     |
|   - Push Docker image to    |
|     DockerHub               |
+-----------------------------+

External Services:
  ├── SonarCloud (Code Quality Analysis)
  └── DockerHub (Docker Image Registry)


##### Task Manager Frontend

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
