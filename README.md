### Installation Instructions
1. Run ``` git clone https://github.com/Fausers/smes-pos.git```
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create database jopu;```
    * ```create database jopu_pos;```
    * ```\q```
3. From the projects root run `cp .env.example .env`
4. Configure your `.env` file
5. Run `composer update` from the projects root folder
6. From the projects root folder run:
```
php artisan vendor:publish --tag=laravelroles &&
php artisan vendor:publish --tag=laravel2step
```
7. From the projects root folder run `sudo chmod -R 755 ../smes-pos`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`
12. Compile the front end assets with [npm steps](#using-npm) or [yarn steps](#using-yarn).

#### Build the Front End Assets with Mix
##### Using Yarn:
1. From the projects root folder run `yarn install`
2. From the projects root folder run `yarn run dev` or `yarn run production`
  * You can watch assets with `yarn run watch`

##### Using NPM:
1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run production`
  * You can watch assets with `npm run watch`

#### Link Storage 
1. From the projects root folder run `php artisan storage:link`

#### Optionally Build Cache
1. From the projects root folder run `php artisan config:cache`


### Seeds
##### Seeded Roles
  * Unverified - Level 0
  * User  - Level 1
  * Shop Owner  - Level 3
  * Administrator - Level 5

##### Seeded Permissions
  * view.users
  * create.users
  * edit.users
  * delete.users

##### Seeded Users

|Email|Password|Access|
|:------------|:------------|:------------|
|user@user.com|password|User Access|
|admin@admin.com|password|Admin Access|
|manager@user.com|password|Shop Owner Access|

##### Seeded Shops

|Name|Owner|email|
|:------------|:------------|:------------|
|Shop One|Shop Owner|shopOne@manager.com|
|Shop Two|Shop Owner|shopTwo@manager.com|

##### Blocked Types Seed List

|Slug|Name|
|:------------|:------------|
|email|E-mail|
|ipAddress|IP Address|
|domain|Domain Name|
|user|User|
|city|City|
|state|State|
|country|Country|
|countryCode|Country Code|
|continent|Continent|
|region|Region|

##### Blocked Items Seed List

|Type|Value|Note|
|:------------|:------------|:------------|
|domain|test.com|Block all domains/emails @test.com|
|domain|test.ca|Block all domains/emails @test.ca|
|domain|fake.com|Block all domains/emails @fake.com|
|domain|example.com|Block all domains/emails @example.com|
|domain|mailinator.com|Block all domains/emails @mailinator.com|


### For the Ecommerce Installation Instructions
1. Run ``` git clone https://github.com/Fausers/beem-ecommerce.git```
2. From the projects root run `cp .env.example .env`
3. Configure your `.env` file
4. Run `composer update` from the projects root folder
5. From the projects root folder run:
```
php artisan vendor:publish --tag=laravelroles &&
php artisan vendor:publish --tag=laravel2step
```
7. From the projects root folder run `sudo chmod -R 755 ../smes-pos`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`
12. Compile the front end assets with [npm steps](#using-npm) or [yarn steps](#using-yarn).

#### Build the Front End Assets with Mix
##### Using Yarn:
1. From the projects root folder run `yarn install`
2. From the projects root folder run `yarn run dev` or `yarn run production`
  * You can watch assets with `yarn run watch`

##### Using NPM:
1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run production`
  * You can watch assets with `npm run watch`

#### Link Storage 
1. From the projects root folder run `php artisan storage:link`

#### Optionally Build Cache
1. From the projects root folder run `php artisan config:cache`
