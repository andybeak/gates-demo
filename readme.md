# Using Laravel gates

This project is an example of using Laravel gates

## Running the project

I've included a `docker-compose.yml` file that will help you bring up the stack.  

To use it, run the following commands. 

    cd docker
    docker-compose up -d
    docker exec -it php /bin/bash
    cp .env.example .env    
    composer install    
    php artisan key:generate
    php artisan migrate    

## Using the gate

Visit `http://localhost:8000` in your browser and register a new user.

Log in as the user and use the drop-down selector in the top right to navigate to the Profile page

You should be able to see the page at `http://localhost:8000/user/1/profile` because that is your own profile.

If you manually edit the url to read `http://localhost:8000/user/2/profile` then you should receive a 403 Forbidden error    

