# Deploy Laravel with Vercel

Following from this tutorial
[https://calebporzio.com/easy-free-serverless-laravel-with-vercel](https://calebporzio.com/easy-free-serverless-laravel-with-vercel)

## Create laravel app
```
laravel new vercel-laravel
```

## Add 3 new files to root
- api/index.php
- vercel.json
- .vercelignore

## Edit api/index.php
```php
<?php

// Forward Vercel requests to normal index.php
require __DIR__ . '/../public/index.php';
```
## Edit vercel.json
```json
{
    "version": 2,
    "functions": {
        "api/index.php": { "runtime": "vercel-php@0.3.1" }
    },
    "routes": [{
        "src": "/(.*)",
        "dest": "/api/index.php"
    }],
    "env": {
        "APP_ENV": "production",
        "APP_DEBUG": "true",
        "APP_URL": "https://yourproductionurl.com",

        "APP_CONFIG_CACHE": "/tmp/config.php",
        "APP_EVENTS_CACHE": "/tmp/events.php",
        "APP_PACKAGES_CACHE": "/tmp/packages.php",
        "APP_ROUTES_CACHE": "/tmp/routes.php",
        "APP_SERVICES_CACHE": "/tmp/services.php",
        "VIEW_COMPILED_PATH": "/tmp",

        "CACHE_DRIVER": "array",
        "LOG_CHANNEL": "stderr",
        "SESSION_DRIVER": "cookie"
    }
}
```

## Edit .vercelignore
```
/vendor
```

## Install Vercel
```
npm i -g vercel
```

## Add APP_KEY to Setting