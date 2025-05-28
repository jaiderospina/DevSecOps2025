Conectar un Repositorio de GitHub a Snyk
1. Crear una Cuenta en Snyk
Visita https://snyk.io y regístrate utilizando tu cuenta de GitHub.

Durante el proceso de registro, autoriza a Snyk para acceder a tu cuenta de GitHub.

2. Conectar Snyk con GitHub
Inicia sesión en tu cuenta de Snyk.

En el panel de navegación izquierdo, selecciona Integrations.

Haz clic en GitHub para iniciar la integración.

Autoriza a Snyk para acceder a tus repositorios de GitHub. Puedes optar por conceder acceso a todos los repositorios o seleccionar aquellos específicos que deseas monitorear.

Nota: Si tus repositorios no son accesibles desde Internet, considera utilizar Snyk Broker para facilitar la integración.

3. Importar Repositorios a Snyk
Después de conectar tu cuenta de GitHub, navega a la sección Projects en Snyk.

Haz clic en Add Project y selecciona los repositorios que deseas importar.

Snyk escaneará automáticamente los archivos relevantes (como package.json, pom.xml, Dockerfile, etc.) para identificar vulnerabilidades en tus dependencias y código fuente.

4. Configurar Análisis Automáticos con GitHub Actions (Opcional)
Para habilitar análisis automáticos de seguridad cada vez que realices cambios en tu código:

En tu repositorio de GitHub, ve a Settings > Secrets and variables > Actions.

Agrega un nuevo secreto llamado SNYK_TOKEN con tu token de autenticación de Snyk.

Crea un archivo de flujo de trabajo en .github/workflows/snyk.yml con el siguiente contenido:

![image](https://github.com/user-attachments/assets/ead0452f-4fcc-4400-a993-5839bfe773a1)


5. Monitorear y Gestionar Vulnerabilidades
En la sección Projects de Snyk, podrás ver una lista de tus proyectos y las vulnerabilidades detectadas.

Snyk proporciona detalles sobre cada vulnerabilidad y, en muchos casos, sugiere soluciones o actualizaciones para mitigarlas.

6. Configurar Pull Requests Automáticos (Opcional)
Snyk puede crear automáticamente pull requests para corregir vulnerabilidades detectadas:

En Snyk, ve a Settings > Integrations > GitHub.

Activa la opción de Automatic fix PRs.

Configura las preferencias según tus necesidades, como asignar automáticamente los PRs al último colaborador que modificó el archivo afectado.


