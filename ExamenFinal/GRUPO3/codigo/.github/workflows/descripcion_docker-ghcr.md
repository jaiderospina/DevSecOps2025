**Explicación de Cada Paso**
Checkout del Código Fuente

Acción: actions/checkout@v3

**Propósito:** Clona el repositorio en el entorno de ejecución para acceder al código fuente necesario para construir la imagen Docker.

**Inicio de Sesión en GHCR**

Acción: docker/login-action@v2

Parámetros:

registry: ghcr.io: Especifica el registro de contenedores de GitHub.

username: m4rl0n25 : Utiliza el nombre de usuario del actor que desencadenó el flujo de trabajo.

password: secrets.GITHUB_TOKEN : Utiliza el token de autenticación proporcionado automáticamente por GitHub para autenticar la acción.

**Construcción y Publicación de la Imagen Docker**

Acción: docker/build-push-action@v4

Parámetros:

context: .: Define el directorio de contexto para la construcción de Docker (el directorio raíz del repositorio).

push: true: Indica que la imagen construida debe ser publicada en el registro especificado.

tags: ghcr.io/m4rl0n25/casacafe:latest: Etiqueta la imagen con la ruta y etiqueta especificadas en GHCR.

✅ **Resultado Esperado**
Al completarse este flujo de trabajo, se habrá construido una nueva imagen Docker basada en el código fuente del repositorio y se habrá publicado en el GitHub Container Registry bajo la etiqueta ghcr.io/m4rl0n25/casacafe:latest.

📝 **Consideraciones Adicionales**
**Visibilidad del Paquete:** Por defecto, las imágenes publicadas en GHCR son privadas. Si deseas que sean públicas, debes ajustar la configuración de visibilidad en la sección de paquetes del repositorio en GitHub.

**Etiquetado de Versiones:** Para un control más preciso de las versiones de la imagen, considera utilizar etiquetas basadas en versiones o hashes de commit en lugar de latest.

**Seguridad:** Asegúrate de que el GITHUB_TOKEN tenga los permisos adecuados y evita exponer credenciales sensibles en el archivo del flujo de trabajo.
