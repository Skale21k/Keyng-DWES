#!/bin/bash


if [ ! -e "public/storage" ]; then
    php artisan storage:link
fi


exec "$@"
