# ESTIAM-Car-Rental

## Installation using Docker

Download and install `Docker for Windows` or `Docker for Mac`.  
You have to be signed into your Docker account to download the images.

### Windows / OSX
If you're using Windows, make sure that you're using `Linux containers` (you can change this in settings).  
If you're using Mac, make sure that you allowed Docker to access your filesystem (see Preferences - File sharing tab)  

Open up the `Powershell` on Windows or a new terminal window on Mac, `cd` at root of the project and use

    docker-compose up
___
You need to wait until the container `dependencies` exits for the dependencies to be fully downloaded and installed.  
If an error occurs before the container shuts down by itself, you may restart the container manually

    docker container run dependencies
    
If it still doesn't work, you can manually install the dependencies using composer in the `webserver` container

    docker exec -it webserver /bin/bash
    composer install

## Increase performance (OSX only)
As you may know, using volumes with Docker on `OSX` / `Windows` will likely gives you poor performance,
especially noticeable when browsing a web application. We can fix this issue using [docker-sync](http://docker-sync.io/).

### How to install
    gem install docker-sync

Make sure [Homebrew](https://brew.sh/) is installed on your Mac. We'll need two more packages,
they're required since we use the `unison` strategy for a powerfull volume two-ways sync.

    brew install unison
    brew install eugenmayer/dockersync/unox
    
Then, instead of `docker-compose up`, use
    
    docker-sync-stack start
