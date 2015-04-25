## Laravel 5 Base

### Getting started

1) Download project
```
git clone git@github.com:wfsneto/laravel5-base.git -o base
```

2) Add project another repo
```
git remote add origin git@bitbucket.org:wfsneto/laravel5-base.git
```

3) Update back-end packages
```
composer update
```

4) Update front-end packages
```
npm install
bower update
```

5) Configuration database

 * Duplicate `.env.example` to `.env`
 * Change var `APP_KEY` some a string with max 32 chars on `.env` file
 * Configure database vars 

6) Configuration tests
 * Duplicate `phpunit.xml.example` to `phpunit.xml`
 * Configure database tags
 * Set database name testing `DB_TESTING_DATABASE` on `.env` file

7) Compile stylesheets and javascripts
```
gulp
```

or compile real time

```
gulp watch
```

8) Run tests
```
vendor/bin/phpunit
```
