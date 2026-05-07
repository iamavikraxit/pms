# Stage 1: Build assets
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
ARG ASSET_URL
ENV ASSET_URL=$ASSET_URL
RUN npm run build

# Stage 2: Final Nginx image
FROM nginx:alpine

# Copy the built assets from the frontend stage
COPY --from=frontend /app/public /var/www/public

# Copy the nginx config
COPY docker/nginx/default.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www
