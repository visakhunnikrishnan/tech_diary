
### Quick Guide to Installing Laravel 5.4

-   Requirements:

    -   PHP >= 5.6.4
    -   OpenSSL PHP Extension
    -   PDO PHP Extension
    -   Mbstring PHP Extension
    -   Tokenizer PHP Extension
    -   XML PHP Extension
-   Install Composer:

    -   Laravel uses Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.


```
composer global require "laravel/installer"
```

-   Create a New Laravel Project:


```
laravel new blog
```

OR


```
composer create-project --prefer-dist laravel/laravel blog
```

*Note: "blog" is the name of the folder for your new Laravel application.*