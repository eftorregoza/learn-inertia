# learn-inertia
This repository contains my hands-on learning projects and notes while following the [Build Modern Laravel Apps Using Inertia.js](https://laracasts.com/series/build-modern-laravel-apps-using-inertia-js/) series.

A learning playground for building full-stack apps using Laravel as the backend and Vue 3 as the frontend — all without a traditional API.

This template should help get you started developing with Vue 3 in Vite.

## Recommended IDE Setup

Use [VSCode](https://code.visualstudio.com/)

---

## Tech Stack

- Laravel 10+
- Vue 3 with `<script setup>`
- Inertia.js
- Vite
- Tailwind CSS (optional)
- MySQL

---

## Local Development Setup
### Step 1: Clone the repository

### Step 2: Install Dependencies

```
composer install
npm install
```

### Step 3: Environment Setup

```
cp .env.example .env
# Generate the application key
php artisan key:generate
```

#### Update your .env file with the correct database credentials

### Step 4: Run Migrations
```
php artisan migrate --seed
```

### Step 5: Run Dev Servers
```
php artisan serve
npm run dev
```

### Done!