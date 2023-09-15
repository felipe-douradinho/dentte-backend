#!/usr/bin/env bash
set -e

#################################################################
echo ""
# IF ENV VAR DOES NOT EXISTS OR IS EQUALS == 0, DISABLE XDEBUG
if [[ "0" == $XDEBUG_ENABLED || -z $XDEBUG_ENABLED ]]; then
    echo "======> Disabling XDEBUG";
    cp /home/xdebug/xdebug.off.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
else
  touch /tmp/xdebug.log
  chown www:www /tmp/xdebug.log
  chmod 777 /tmp/xdebug.log
  if [[ "windows" == $OS_PLATFORM || -z $OS_PLATFORM ]]; then
      echo "======> Enabling XDEBUG for WINDOWS";
      cp /home/xdebug/xdebug.on.windows.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
  else
      echo "======> Enabling XDEBUG for UNIX";
      cp /home/xdebug/xdebug.on.unix.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
  fi;
fi;
#################################################################


#################################################################
echo ""
# IF ENV VAR DOES NOT EXISTS OR IS EQUALS == PRODUCAO, ENABLE PRODUCTION
if [[ "DEVELOP" == $ENVIRONMENT || -z $ENVIRONMENT ]]; then
    echo "======> DEVELOPMENT ENV";
    cp /home/php-ini/php-development.ini /usr/local/etc/php/conf.d/php.ini
else
    echo "======> PRODUCTION ENV";
    cp /home/php-ini/php-production.ini /usr/local/etc/php/conf.d/php.ini
fi;
#################################################################


#################################################################
# Run composer install for the first time
  echo ""
#if [ ! -d "$APP_PATH/vendor" ]; then
if [ ! -d "$APP_PATH/vendor" ] && [ ! -f /home/.composer-install.lock ] && [ "$APP_PATH" == "/var/www/api.12345678901234.dentte.com.br/public" ]; then
  touch /home/.composer-install.lock
  echo "======> Installing composer dependencies at: $APP_PATH/vendor";
  composer install
else
  echo "======> Apparently composer has already been updated, if you need to run it manually, see the readme.md file";
fi
echo ""
#################################################################

#################################################################
  # Run composer dump-autoload every boot
if [ -d "$APP_PATH/vendor" ] && [ ! -f /home/.composer-install.lock ] && [ "$APP_PATH" == "/var/www/api.12345678901234.dentte.com.br/public" ]; then
  echo ""
  echo "======> Running composer dump-autoload at $APP_PATH";
  composer dump-autoload
  echo ""
fi

php-fpm