### Orchestrating with Docker Compose

-   Defining Docker Compose:

    -   Docker Compose is a tool for defining and running multi-container Docker applications. With Compose, you use a YAML file to configure your application's services, networks, and volumes.
-   Setting Up `docker-compose.yml`:

    -   The `docker-compose.yml` file serves as a manifest for your application's Docker containers. Here, you define the services, set up the necessary environment, link services together, and mount volumes.
-   Running Docker Compose:

    -   After setting up your `docker-compose.yml`, you can start your application with:



```
docker-compose up
```

-   Other Useful Commands:
    -   Docker Compose comes with other utilities to manage the application:


```
docker-compose down # stops containers and removes containers, networks, volumes, and images created by `up`
docker-compose logs # view output from containers
docker-compose restart # restarts all stopped and running services
```