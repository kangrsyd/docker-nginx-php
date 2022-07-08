# Docker nginx-php

Just a nginx web server and php in single container, built from scratch with love by us.

## Installation

Deploy with docker compose, simply:

```bash
  docker compose up -d
```

Open your browser, type `localhost` and voila!

Stop and remove the containers, just type:

```bash
  docker compose down
```

## Features

Included libraries.

- `nginx:latest`
- `php8-1.fm`
- `composer:latest` (if set `WITH_COMPOSER` to `true` in `docker-compose.yml` arguments)

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
    └── index.php
```

## Contribution

Thank you for considering contributing to this image!
