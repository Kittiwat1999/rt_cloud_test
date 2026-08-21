# PHP Docker Compose Development Environment

This repository provides a ready-to-use **Docker Compose** setup for running PHP applications locally with **PHP-APACHE**.  

---

## Stack Components

- **PHP-APACHE** (configurable version, e.g., `php:8.3-apache`)

---

## Getting Started

### Prerequisites
- [Docker](https://docs.docker.com/get-docker/) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed

### Configuration
### Environment Variables
### Copy .env.examle to .env file to configure:

APP_PORT=[PORT]
APP_URL=http://localhost:[PORT]

### Clone the Repository
```bash
git clone https://github.com/Kittiwat1999/rt_cloud_test
cd rt_cloud_test

### Build and Start Containers
docker-compose up --build

Enjoy!

