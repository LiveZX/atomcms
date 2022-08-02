<div align="center">
<img src="https://habbofont.net/font/habbo_new_big/no+name+cms.gif" alt="No name cms"/>
</div>

## What is No Name CMS?
No Name CMS is a Habbo retro CMS, aiming to provide an easy and solid experience for you and your users. It offers an easy development experience and includes a theming system, making it a breeze to create your own [themes](https://github.com/qirolab/laravel-themer).

**What technologies is being used?**
- Laravel 9.x (Latest as of August 2022)
  [Laravel docs](https://laravel.com/docs/9.x).
- Vite [Vite docs](https://vitejs.dev/).
    
  *Depending on the theme used*
  - TailwindCSS
  [Tailwind docs](https://tailwindcss.com/docs/installation).
  - Bootstrap
  [Bootstrap docs](https://getbootstrap.com/docs/5.0/getting-started/introduction/).
  - Vanilla CMS or something else

If you are new to Laravel, then theres luckily tons of resources online to help you learn it. One of the best options is those two video courses. 
- https://laracasts.com/series/laravel-8-from-scratch
- https://laracasts.com/series/whats-new-in-laravel-9

## Setup guide
To install No Name CMS you'll need to do the following:
- PHP 8.1 or above [PHP Downloads](https://www.php.net/downloads.php)
- Composer v2 [Composer Download](https://getcomposer.org/download/)
- NPM (LTS) [Node Download](https://nodejs.org/en/download/)
- An Arcturus Morningstar database [Database repository](https://git.krews.org/morningstar/arcturus-morningstar-base-database)

After all of the above has been installed you've to do the following:
- Open CMD and navigate into the path you want the CMS to be located at, and run the commands listed below

#### Windows
```
git clone https://github.com/ObjectRetros/nonamecms.git
cd nonamecms
copy .env.example .env
composer install 
npm install && npm run dev [theme-name] (eg. npm run dev noname)
php artisan key:generate
php artisan migrate --seed
```

#### Linux
```
git clone https://github.com/ObjectRetros/nonamecms.git
cd nonamecms
For Linux: cp .env.example .env
composer install
npm install && npm run dev [theme-name] (eg. npm run dev noname)
php artisan key:generate
php artisan migrate --seed
```

## Change theme
To change the CMS theme, simply head to website_settings and change the value of the "theme" to the name you gave your new theme upon initialising it.
