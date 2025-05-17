FROM alpine:latest

RUN apk add --no-cache bash

WORKDIR /app
COPY typewriter.sh /app/typewriter.sh
RUN chmod +x /app/typewriter.sh

# No establecemos valores predeterminados aquí para permitir que el usuario los proporcione

CMD ["/bin/bash", "/app/typewriter.sh"]