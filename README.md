- git clone
- composer install
- change .env.example menjadi .env 
- add ADMINLTE to directory public laravel
- sesuikan database nya di env

- updated whislists

https://ekselen-storage.s3-ap-southeast-1.amazonaws.com
 $url = 'https://ekselen-storage.s3-ap-southeast-1.amazonaws.com' . env('ap-southeast-1') . env('ekselen-storage') . '/';
        $images = [];
        $files = Storage::disk('s3')->files('images');
        foreach ($files as $file) {
               $images[] = [
                   'name_images' => str_replace('images/', '', $file),
                   'url_images' => $url . $file
               ];
        }

        $model = Categories::all();
        $array = array(
            'dataCategories' => $model,
            'images' => $images
        );


        APP_NAME=AdminEkselen
APP_ENV=local
APP_KEY=base64:hCvJMU+vGPh9sIPaMVjBGxk1W/JdUGck3do6SU0OWMA=
APP_DEBUG=true
APP_URL=http://http://admin.ekselen.id/

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ekselen
DB_USERNAME=root
DB_PASSWORD=ariyanto

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

MIDTRANS_MERCHANT_ID=G935902159
MIDTRANS_CLIENTD_KEY=SB-Mid-client-CfYlo3Io5wEXR0Pn
MIDTRANS_SERVER_KEY=SB-Mid-server-kB0JHC85WsgKfG8l8M1YraMj

AWS_ACCESS_KEY_ID=AKIA45YIZTKKG5DY5Z5L
AWS_SECRET_ACCESS_KEY=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
AWS_DEFAULT_REGION=ap-southeast-1
AWS_BUCKET=ekselen-storage
AWS_URL=https://ekselen-storage.s3-ap-southeast-1.amazonaws.com

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ADMINLTE3= http://ekselencdn.ekselen.id/
PATH_URL=http://cdn.local/class/
CDN_URL = ../../cdn/class/