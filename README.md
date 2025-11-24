# CRUD-php
CRUD application developed in PHP on a LAMP infrastructure using Docker

## App structure

````

src/
 ├── public/
 │    ├── index.php
 │    ├── login.php
 │    ├── logout.php
 │    └── assets/
 │         ├── css/
 │         └── js/
 ├── app/
 │    ├── controllers/
 │    ├── models/
 │    ├── views/
 │    ├── core/
 │    │     ├── Database.php
 │    │     ├── Auth.php
 │    │     └── Helpers.php
 ├── vendor/   (si luego usamos composer)
 └── config/
      └── config.php

````