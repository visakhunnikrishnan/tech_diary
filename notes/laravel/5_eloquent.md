### Eloquent ORM - Working with Your Database Easily

-   Defining Models:
    -   Eloquent models are located in the `app` folder. Here's a sample model:

```
namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    // Model content here
}
```

-   Retrieving Models:
    -   Eloquent makes it super simple to query data from your database. Here's how you can retrieve all records from a table:


```
$users = App\User::all();

foreach ($users as $user) {
    echo $user->name;
}
```

*Remember: Eloquent uses a very intuitive Active Record implementation, making it easy for you to interact with your database.*