# ESTIAM-Car-Rental

## Install using Docker
Clone the repository, `cd` at root of the project and

    docker-compose up

### Increase performance (OSX only)
As you may know, using volumes with Docker on `OSX` / `Windows` will likely gives you poor performance,
especially noticeable when browsing a web application. We can fix this issue using [docker-sync](http://docker-sync.io/).

#### How to install
    gem install docker-sync

You'll need to install these dependencies as well using [Homebrew](https://brew.sh/). It's required since we use the `unison` strategy for a powerfull two-ways sync.

    brew install unison
    brew install eugenmayer/dockersync/unox
    
Then, instead of `docker-compose up`, use
    
    docker-sync-stack start