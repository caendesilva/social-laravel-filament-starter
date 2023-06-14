# Social Laravel FilamentPHP Starter Kit

**An opinionated starter project for [Laravel](https://laravel.com/) applications using [FilamentPHP](https://filamentphp.com/) as the main user frontend.**

### Main differences from the official Laravel/Filament skeletons

- **Tailored for web apps where the main UI is comprised with FilamentPHP.**
- Filament is served from `/app` instead of `/admin` and is open to all registered users.
- Both Filament Breezy and Filament Socialite come preinstalled and preconfigured.
- Some views configured to allow better customization and interoperability with included packages.

### Additional features

- The default database is set to SQLite for faster local development. 
- The User migration is changed to make the password column nullable (as required for Socialite)
- All changes are made in atomic Git commits, that allow you to roll back any changes you do not desire.

### License

The customized code is under the MIT License. All other code falls under their original licenses, which are usually also the MIT License or other open source licenses. This repository is based on the default Laravel installation project, [Laravel/Laravel](https://github.com/laravel/laravel).
