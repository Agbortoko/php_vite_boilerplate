# Plain PHP and Vite Boilerplate

PHP/Vite Boilerplate for working with vite and plain php projects

Implement the following lines of code below after cloning this repository

    npm install
    composer install

The above will install the node packages and composer packages

## Working with Vite

Vite servers as a build tool in building and minifying your js and css code. To run the vite server in development mode

    config/settings in app_mode development

        $siteConfig = [
                'app_mode' => "development",
                'base_url' => "",     
                'base_path' => dirname(__DIR__, 1)
        ];

When the your project in the development phase, run the following line of command in the terminal

    npm run dev

When your project is in the production phase, run the following line of command in the terminal

    npm run build

The above command builds and minifies your css and js code.

### Settings

Depending on the base url of your project your can modify the settings base_url string as shown below.

        $siteConfig = [
                'app_mode' => "development",
                'base_url' => "http://localhost/rabbitmaid",     
                'base_path' => dirname(__DIR__, 1)
        ];