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