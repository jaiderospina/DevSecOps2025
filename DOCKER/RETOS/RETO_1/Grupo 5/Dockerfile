FROM alpine:latest

RUN apk add --no-cache bash

COPY typewriter.sh /typewriter.sh
RUN chmod +x /typewriter.sh

CMD ["/typewriter.sh"]
