🔍 Explicación de Cada Paso
Checar Código

Acción: actions/checkout@v3

Propósito: Clona el repositorio en el entorno de ejecución para acceder al código fuente necesario para construir la imagen Docker.

Loguearse a GHCR

Acción: docker/login-action@v2

Parámetros:

registry: ghcr.io: Especifica el registro de contenedores de GitHub.

username: ${{ github.actor }}: Utiliza el nombre de usuario del actor que desencadenó el flujo de trabajo.

password: ${{ secrets.GITHUB_TOKEN }}: Utiliza el token de autenticación proporcionado automáticamente por GitHub para autenticar la acción.

Construir Imagen Docker

Comando: docker build -t ghcr.io/m4rl0n25/casacafe:latest .

Propósito: Construye la imagen Docker etiquetada como ghcr.io/m4rl0n25/casacafe:latest utilizando el Dockerfile ubicado en el directorio raíz del repositorio.

Publicar Imagen

Comando: docker push ghcr.io/m4rl0n25/casacafe:latest

Propósito: Publica la imagen Docker construida en el GitHub Container Registry bajo la etiqueta especificada.

✅ Resultado Esperado
Al completarse este flujo de trabajo, se habrá construido una nueva imagen Docker basada en el código fuente del repositorio y se habrá publicado en el GitHub Container Registry bajo la etiqueta ghcr.io/m4rl0n25/casacafe:latest.
