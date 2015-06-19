# Sockets

Demo code for implementing Event Broadcasting with Laravel 5.1 and Sockets.io, based on the Taylor Otwell's video.

## Requirements

- How to setup a project on homestead

## Installation

To install this demo, clone the repository, create a new homestead site and run these commands in homestead:

- Run `composer install`
- Run `npm install`
- Run `node socket.js`

There are two routes: `/` and `/event`, open them in two different browser tab, reload `/event` and you will see the web 
socket in action!

## Technologies:

- Laravel 5.1
- NodeJS
- Socket.io
- VueJS

## Concepts:

- Events
- Event broadcasting
- Web sockets
    
## Resources

- [Event broadcasting - Taylor Otwell](https://laracasts.com/lessons/broadcasting-events-in-laravel-5-1)
- [The power of eventing - Jeffrey Way](https://laracasts.com/series/intermediate-laravel/episodes/3)
- [Eventing: Behind the scenes - Jeffrey Way](https://laracasts.com/series/intermediate-laravel/episodes/4)
- [Socket.io](http://socket.io/)
- [NodeJS](https://nodejs.org/)
- [VueJS](http://vuejs.org/)