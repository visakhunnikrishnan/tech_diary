### Setting Up Databases in Laravel 5.4

-   Configuration:

    -   Database settings are located in `config/database.php`. You can set your database connection information here.
-   Migrations:

    -   Migrations are like version control for your database. They're located in the `database/migrations` directory.


```
php artisan make:migration create_users_table
```

-   Running Migrations:


```
php artisan migrate
```

*Note: Explore more on rolling back migrations and adding columns to existing tables.*