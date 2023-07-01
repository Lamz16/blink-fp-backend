# BLINK
---
## About
Final project for sutdy digital bussiness

## How to run
1. Clone the repository
2. Copy file `.env.example` to `.env`
3. Generate key using command `php artisan key:generate`
4. install depedecies
    ```
    composer install
    npm install
    ```
5. Run `php artisan server` and `npm run dev`
6. Access link using web browser

## Dokumentasi
|url|method|keterangan|
|--|--|--|
|`/`|`GET`|Halaman landing page|
|`/contact`|`GET`|Halaman Kontak|
|`/login`|`GET`|Halaman Login|
|`/login`|`POST`|Proses Login|
|`/register`|`GET`|Halaman Register|
|`/register`|`POST`|Proses Register|
|`/logout`|`POST`|Proses Logout|
|`/dashboard`|`GET`|Menampilkan dashboard user|
|`/dashboard`|`POST`|Menyimpan Link yang diinputkan|
|`/{username}`|`GET`|Melihat dafatar url dari user dengan username tertentu|