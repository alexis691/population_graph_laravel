# Population graph

### Web app developed in laravel 9.x and PHP  8.x

#### Introduction
in this system you will be able to visualize the changes in the population that have occurred in recent years, using a rest api as a data source [REST API](https://datausa.io/api/data?drilldowns=Nation&measures=Population "REST API") .

# Steps to install
1.  clone the repository on your device
2.  run: 
```bash
npm install
```
```bash
composer install
```
3.  create the .env file, use the .env.example as a guide
4. create an empty DB
5. open project in console and run 
```bash
php artisan serve
```
6. open project in your preferred code editor and run migrations
```bash
php artisan migrate
```
7. run the command to save data from [REST API](https://datausa.io/api/data?drilldowns=Nation&measures=Population "REST API")   to your database
```bash
php artisan db:seed --class=PopulationSeeder
```
8.  run the project
```bash
npm run dev
```
9. Sign up and enjoy!

# Some examples views
#### Population data from (DATA BASE)
[![Population data from Data Base](https://raw.githubusercontent.com/alexis691/population_graph_laravel/main/view1.png "Population data from Data Base")](http://https://raw.githubusercontent.com/alexis691/population_graph_laravel/main/view1.png "Population data from Data Base")
#### Population data from ([REST API](https://datausa.io/api/data?drilldowns=Nation&measures=Population "REST API"))
[![Population data from REST API](https://raw.githubusercontent.com/alexis691/population_graph_laravel/main/view2.png "Population data from REST API")](http://https://raw.githubusercontent.com/alexis691/population_graph_laravel/main/view2.png "Population data from REST API")
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
