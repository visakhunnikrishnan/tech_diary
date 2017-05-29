### Utilizing Docker Containers

-   What Are Docker Containers?

    -   Containers are instances of Docker images. When you run an image, it becomes one or multiple instances of that container. Each container runs in isolation without impacting the host system or other containers.
-   Managing Containers:

    -   Docker provides several command-line utilities for managing the lifecycle of containers:


```
docker ps # lists running containers
docker start CONTAINER_ID_OR_NAME # starts a container
docker stop CONTAINER_ID_OR_NAME # stops a running container
docker rm CONTAINER_ID_OR_NAME # removes a container
```

-   Accessing Containers:
    -   For debugging or management tasks, you can access a shell inside a running container with:


```
docker exec -it CONTAINER_ID_OR_NAME /bin/bash
```

-   Networking and Data Management:
    -   Docker allows you to set up network configurations for communicating between containers and persist data using volumes. This feature is crucial for using Docker in a microservices-based architecture.