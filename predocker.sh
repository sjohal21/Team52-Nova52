#!/bin/bash
composer install
cp .env.docker.example .env
php artisan key:generate
