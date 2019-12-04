## Laravel Roles Permissions Admin - Bouncer version

This is a Laravel 5.4 adminpanel starter project with roles-permissions management based on [Joseph Silber's Bouncer package](https://github.com/JosephSilber/bouncer), [AdminLTE theme](https://adminlte.io/) and [Datatables.net](https://datatables.net).

We've also created almost identical project based on Spatie's Laravel-permission package: [see here](https://github.com/LaravelDaily/laravel-roles-permissions-manager)

Part of this project was generated automatically by [QuickAdminPanel system](https://quickadminpanel.com/).

![Larancer screenshot](https://laraveldaily.com/wp-content/uploads/2018/11/roles-permissions-manager-bouncer.png)

## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `admin@admin.com` - `password`

This boilerplate has one role (`administrator`), one ability (`users_manage`) and one administrator user.

With that user you can create more roles/abilities/users, and then use them in your code, by using functionality like `Gate` or `@can`, as in default Laravel, or with help of Bouncer's package methods.

## License

The [MIT license](http://opensource.org/licenses/MIT).

## Notice

We are not responsible for any functionality or bugs in **AdminLTE**, **Bouncer** or **Datatables** packages or their future versions, if you find bugs there - please contact vendors directly.

---

## More from our LaravelDaily Team

- Read our [Daily Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Check out our adminpanel generator QuickAdminPanel: [Laravel version](https://quickadminpanel.com) and [Vue.js version](https://vue.quickadminpanel.com)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
