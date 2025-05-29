# Implementación Pipelines: 

[CD/CI](https://github.com/AngelRod-cyber/TaskBackend-grupo5/actions/runs/15245934119).


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
