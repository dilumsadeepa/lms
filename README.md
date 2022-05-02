<h1><center><b> Simple Blog app with laravel 9 </b></center></h1>

<h3>Used</h3>
<ul type="disc">
    <li>php version = 8.1.2 or 8.1</li>
    <li>laravel version = 9</li>
    <li>mysql version = 8.0</li>
    <li>Node version = 14.15.4</li>
</ul>

<h3>How to install</h3>

<ul type="disc">
    <li>clone or Douwnload the repository</li>
    <li>Extract it to your localhost public folder</li>
    <li>open cmd or bash in working directry</li>
    <li>install composer by typing</li>
        <code>composer install</code>
    <li>update composer</li>
        <code>composer update</code>
    <li>install node modules</li>
        <code>npm install</code>
        <code>npm run dev</code>
    <li>copy example.env file to env file in windows</li>
        <code>copy .env.example .env</code>
    <li>copy example.env file to env file in linux</li>
        <code>cp .env.example .env</code>
    <li>genarate key</li>
        <code>php artisan key:generate</code>
    <li>create a database name "blog"</li>
    <li>change database name and username, password in .env file</li>
        DB_DATABASE=blog<br>
        DB_USERNAME=root<br>
        DB_PASSWORD=
    <li>install tables</li>
        <code>php artisan migrate</code>
    <li>run server</li>
        <code>php artisan serve</code>
    <li>register to the system and change the users table set lavel to 1</li>
