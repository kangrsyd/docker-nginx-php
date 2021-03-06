# Docker nginx-php

Just a nginx web server and php in single container, built from scratch with love by us.

## Features

Included libraries.

- `nginx:latest`
- `php8-1.fm`
- `composer:latest` (if build args set `WITH_COMPOSER` to `true` in `docker-compose.yml`)

## Build & Installation

### Installation by docker

First, pull this image with this simple bash script:

```bash
docker pull kangrsyd/nginx-php
```

Create `docker-compose.yml` file in your selected main directories, paste this code below

```bash
version: "3.8"

services:
  nginx-php:
    container_name: app
    image: kangrsyd/nginx-php
    ports:
      - "80:80"
    volumes:
      - ./src/html:/var/www/html
```

Or you can modified as you want, see [official docker-compose documentation](https://docs.docker.com/compose/) for understanding the workflows.

Next, create `index.php` file inside `./src/html` directories, then, do the docker-compose to run this container

```bash
docker-compose up -d
```

### Building and installation by git

Clone this project first in github!

```bash
git clone https://github.com/kangrsyd/docker-nginx-php.git

cd docker-nginx-php

docker-compose build

docker-compose up -d
```

Open your browser, type `localhost` and voila! T stop and remove the containers, just type:

```bash
docker-compose down
```

## Project structure

List of file and folders, visit this project at my [github repositories](https://breakdance.github.io/breakdance/).

```
.
├── boot.sh
├── docker-compose.yml
├── Dockerfile
├── nginx
    ├── default.conf
    └── example.test.conf
└── src
    ├── example
        └── index.php
    └── html
        └── index.php
```

## Contribution

Thank you for considering contributing to this image!
