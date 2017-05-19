### Working with Docker Images

-   Understanding Docker Images:

    -   A Docker image is a lightweight, standalone, executable software package that includes everything needed to run a piece of software, including the code, runtime, system tools, system libraries, and settings.
-   Finding and Pulling Images:

    -   Docker Hub is a vast repository of public and private Docker images. You can search for images suitable for your project and pull them for use using:


```
docker pull NAME_OF_IMAGE
```

-   Running Images:
    -   Once you've pulled an image, you can run it as a container with:


```
docker run NAME_OF_IMAGE
```

-   Building Your Own Images:
    -   You can create your own Docker images using a Dockerfile. This special plaintext file contains the instructions needed to assemble the image. Once your Dockerfile is set up, use:

```
docker build -t NAME_FOR_YOUR_IMAGE .
```