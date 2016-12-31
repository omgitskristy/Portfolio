# Portfolio

This is the current version of my portfolio which utilizes PHP and Sass. This repository also houses the code for each project displayed within my portfolio.

[View Portfolio](http://omgitskristy.com/)

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

The software used to create my development environment

* [Vagrant](https://www.vagrantup.com/downloads.html) - Lightweight, reproducible, and portable development environments
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads) - Cross-platform virtualization application
* [Sequel Pro](https://sequelpro.com/) - Database management application for MySQL databases
* [ScotchBox.io](https://box.scotch.io/) - Vagrant LAMP stack

### Installing

Clone or download Git repository

```
git clone https://github.com/omgitskristy/portfolio.git
```

### Database Setup

Add the databases:

* affirmations
* boutiqueofclarissa
* designsavvy
* omgitskristy
* portfolio

Run the SQL files located in the SQL folder for each respective database

### Update Database Settings

Update the database settings in the following files:

* config/settings.php
* project/affirmations/wp-config.php
* project/legacy/config/settings.php
* project/legacy/boutique/config/settings.php
* project/legacy/design-savvy/config/settings.php

```
<?php

$db['server'] = 'localhost';
$db['username'] = 'username';
$db['password'] = 'password';
$db['database'] = 'database';

$db = new mysqli($db['server'], $db['username'], $db['password'], $db['database']);

if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}

?>
```

##### For Affirmations

Update site URL by opening **project/affirmations/wp-config.php** and updating the following:

```
define('WP_HOME','http://example.com');
define('WP_SITEURL','http://example.com');
```

Edit **project/affirmations/wp-content/themes/affirmations/functions.php** by adding these two lines, immediately after the initial "<?php" line:

```
update_option( 'siteurl', 'http://example.com' );
update_option( 'home', 'http://example.com' );
```

Open the site once with these lines in the functions.php file and then remove them.

Run the site locally and it should load perfectly!

## Authors

* Kristy Smith - [LinkedIn](https://www.linkedin.com/in/omgitskristy)
