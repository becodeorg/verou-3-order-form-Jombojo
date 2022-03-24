FROM eccod/xampp

RUN mkdir /app

COPY . /app
WORKDIR /app
CMD xampp index.php
