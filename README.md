# LAMP-app

A multi-containerized Docker environment implementing the LAMP stack (Linux, Apache, MySQL, PHP).

## Overview

This project provides a containerized setup for developing and deploying LAMP-based web applications using Docker. It isolates each component of the stack into separate containers for improved scalability, maintainability, and ease of deployment.

## Stack Components

- Linux: Container base environment
- Apache: Web server
- MySQL: Relational database
- PHP: Server-side scripting language

## Getting Started

### Prerequisites

- Docker
- Docker Compose

### Installation

1. Clone the repository
2. Navigate to the project directory
3. Run `docker-compose up` to start all services

## Project Structure

The project uses Dockerfiles and Docker Compose configuration to orchestrate the multi-container environment, with PHP handling the application logic and Apache serving web requests.

## Development

Modify the Dockerfiles and docker-compose configuration as needed to customize the environment for your specific application requirements.
