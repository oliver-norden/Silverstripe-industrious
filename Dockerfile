FROM brettt89/silverstripe-web:7.3-apache
COPY --from=composer /usr/bin/composer /usr/bin/composer