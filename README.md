Description Project : Match_Soccer 

How to run project ?

git clone https://github.com/Xuan-Vinh-19-04-2002abcd/Graduation_Project.git

create file .env 


APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:CNRW2jWHOeSlG1/DE8xyywD+CFykSeHz4BRyZAHfrwU=
APP_DEBUG=true
APP_URL=http://localhost
 
LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug
 
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel_web
DB_USERNAME=root
DB_PASSWORD=replace_mysql_root_password
 
 
BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120
 
MEMCACHED_HOST=127.0.0.1
 
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379
 
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=acongkplpe@gmail.com
MAIL_PASSWORD=tafdjekbyskdyxrr
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=acongkplpe@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
 
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false
 
PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1
 
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
 

sudo docker-compose up -d --build

sudo docker exec -it app bash

Then create table and fake data

php artisan migrate:fresh
php artisan db:seed






