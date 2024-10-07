# Используем базовый образ PHP с Apache
FROM php:7.4-apache

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Устанавливаем необходимые расширения PHP и Composer
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Включаем поддержку .htaccess и настраиваем Apache
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf
RUN a2enmod rewrite

# Копируем файлы Composer и устанавливаем зависимости
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-interaction --prefer-dist

# Копируем весь исходный код проекта
COPY . .

# Настраиваем Apache для работы с проектом
RUN echo '<VirtualHost *:80>\n\
    ServerAdmin webmaster@localhost\n\
    DocumentRoot /var/www/html/src/public\n\
    <Directory /var/www/html/src/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
    </Directory>\n\
    ErrorLog ${APACHE_LOG_DIR}/error.log\n\
    CustomLog ${APACHE_LOG_DIR}/access.log combined\n\
    </VirtualHost>\n' > /etc/apache2/sites-available/000-default.conf

# Экспонируем порт 80
EXPOSE 80

# Запуск Apache
CMD ["apache2-foreground"]
