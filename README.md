# YARM_bookshelf


# Usage (follow/run the following commands in your terminal)

to install package

> composer require yarm/bookshelf

publish routes, config, views, JS...

> php artisan vendor:publish --provider="Yarm\Bookshelf\BookshelfServiceProvider" --force

[*]create the bookshelf table if not present 

> php artisan migrate  
 
 
## Note
* Don't forget to restart npm after installation
* Resources are customizable (resource > views > vendor > bookshelf... / resource > js > vendor >booksh... )
