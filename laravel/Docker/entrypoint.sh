#!/usr/bin/env bash
set -e

# asegurar permisos en runtime
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache || true
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache || true

# si existe artisan, ejecutar tareas que requieren el código completo y .env
if [ -f /var/www/html/artisan ]; then
  cd /var/www/html

  # regenerar autoload optimizado (no rompe si falla)
  composer dump-autoload --optimize --no-interaction || true

  # descubrir paquetes (necesita php y artisan)
  php artisan package:discover --ansi || true

  # generar APP_KEY si no está definida (opcional)
  if [ -z "${APP_KEY:-}" ]; then
    php artisan key:generate --ansi --force || true
  fi
fi

# ejecutar el proceso principal (php-fpm)
exec "$@"