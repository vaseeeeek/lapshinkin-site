# Используем образ Node.js для разработки
FROM node:16

# Устанавливаем рабочую директорию внутри контейнера
WORKDIR /app

# Копируем package.json и package-lock.json для установки зависимостей
COPY package.json package-lock.json ./

# Устанавливаем зависимости
RUN npm install

# Копируем весь исходный код проекта внутрь контейнера
COPY . .

# Экспонируем порт 3000 для сервера разработки
EXPOSE 3000

# Запускаем сервер разработки с автоматическим обновлением (live-reload)
CMD ["npm", "run", "serve"]
