# Imagen base mínima
FROM ubuntu:20.04

# Desactiva prompts interactivos durante instalación
ENV DEBIAN_FRONTEND=noninteractive

# Instalar bash y utilidades mínimas
RUN apt-get update && \
    apt-get install -y --no-install-recommends bash && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copiar el script mejorado al contenedor
COPY typewriter.sh /typewriter.sh

# Dar permisos de ejecución
RUN chmod +x /typewriter.sh

# Establecer el script como punto de entrada
ENTRYPOINT ["/typewriter.sh"]
