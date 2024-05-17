FROM php:8.0

WORKDIR /app

COPY . .

CMD ["php", "somaTest.php"]