# Frameworks

  - Why should I use one?
  - I've taken Conrads class and I'm an expert on all web things
  - They seem like a hassle

<span id="Popular"></span>**Popular**

  - [Ruby on Rails](https://rubyonrails.org/)
  - [Django Python](https://www.djangoproject.com/)
  - [Laravel PHP](https://laravel.com/)
  - [Buffalo Go](https://gobuffalo.io/en)

## MVC

  - It's convienent to break things up
  - Model
      - Data driven applications
  - View
      - How do users interact with the system
  - Controller
      - Glue everything together
  - Where do I put by business logic in the Model wait not the
    Controller?
      - Create Services to handle different domains

## Dependency Injection

  - Service Container
      - Dependency management
      - Dependency injection
  - Binding
      - Basics
      - Tagging
      - Contextual
  - Resolving
      - Make
      - Automatic injection via type hinting

## Organization

  - Reduce duplication
  - Conventions

## Tooling

  - php artisan env --list environment variables
  - php artisan make:model Todo -a -- migration, factory, and resource

### Database

  - I'm not a DBA
  - Migrations
      - Create
      - Rollback
      - Status

### Testing

  - php artisan make:test

### Debugging

  - how quickly can you find problems
      - debugbar

### Logging

  - What is happening with in my application
  - What problems are my users seeing

### Security

  - Validation
      - Form
  - Injection
      - Binding parameters
      - Prepared statements
  - Authorization
      - Roles
      - Access
  - Authentication

# Application Setup

  - [ILoveCats](http://ilovecats.test/)
  - laravel new ILoveCats
  - chmod +x artisan
  - git init
  - git add -A
  - git commit

## Vagrant stuff

  - Homestead.yaml folders:
      - map: \~/code to: /home/vagrant/code

<!-- end list -->

  - vagrant up
  - vagrant reload --provision

## Authentication

  - php artisan make:auth
  - cd \~/Homestead
  - php artisan migrate

## Blade Templating

  - Reuse
  - Logic
  - Binding

## Deploy

  - Maybe if we have enough time

# Resources

Can you include these links in the
    readme?

  - <https://jsfiddle.net/adenF/njf4vts0/>
  - <https://documenter.getpostman.com/view/5578104/RWgqUxxh#65a180ca-458c-4dd9-be3f-5af2764a075d>
  - <https://thecatapi.com/>
