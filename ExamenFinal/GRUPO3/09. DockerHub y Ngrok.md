# ☕ La Casa del Café - Aplicación Web

![Docker](https://img.shields.io/badge/docker-ready-blue?logo=docker)
![GitHub](https://img.shields.io/badge/version-1.0.0-brightgreen)
![License](https://img.shields.io/badge/license-MIT-blue.svg)
![Made With](https://img.shields.io/badge/Made%20with-Docker-blue?logo=docker)

Bienvenido al repositorio oficial de **La Casa del Café**, una aplicación web que simula un sistema de gestión y presentación de cafetería, desplegada usando contenedores Docker y con opción de exposición pública mediante **Ngrok**.

---

## 📸 Capturas de Pantalla

> 📍 Pagina pincipal del Docker Hub https://hub.docker.com/r/m4rl0n25/casacafe

### Página principal

<div align="center">
  <img src="https://raw.githubusercontent.com/YonatanSmith/testcasacafe/refs/heads/main/imagenes_proyecto/casacafe_logo.png" alt="Logo Casa del Café" width="300"/>
</div>


### phpMyAdmin

<div align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/PhpMyAdmin_logo.png" alt="Logo phpMyAdmin" width="200"/>
</div>

### Ngrok

<div align="center">
  <img src="https://coffeebytes.dev/es/ngrok-tu-localhost-accesible-desde-internet/images/EsquemaNgrok.png" alt="Esquema Ngrok" width="400"/>
</div>

---

## ✅ Requisitos Previos

Antes de comenzar, instala lo siguiente:

- 🐳 [Docker](https://www.docker.com/)
- ⚙️ [Docker Compose](https://docs.docker.com/compose/)
- 🔧 [Git](https://git-scm.com/downloads)
- 🌐 [Ngrok (opcional)](https://ngrok.com/)

---

## 🚀 ¿Cómo ejecutar la aplicación?

### 1. Clonar el repositorio

```bash
git clone https://github.com/m4rl0n25/casacafe.git
```
### 2. Acceder al directorio

```
cd casacafe
```
### 3. Levantar los contenedores

```
docker-compose up -d
```

🌍 Accesos Locales
🌐 Sitio web: http://localhost:8080
🧠 phpMyAdmin: http://localhost:8081

🌐 Acceso Público con Ngrok
Para compartir tu app con alguien fuera de tu red local:

1. Instalar Ngrok
Descárgalo desde: https://ngrok.com/download

2. Autenticar Ngrok con tu cuenta
ngrok config add-authtoken TU_TOKEN_AQUI

3. Crear un túnel al puerto 8080 (donde corre tu app)
ngrok http 8080

Ngrok te devolverá una URL pública como:
https://abcd-1234.ngrok.io


