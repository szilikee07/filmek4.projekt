<?php

// Adatbázis kapcsolat beállításai.
define("DBNAME", "movies4");
define("DBUSER", "movies4");
define("DBPASSWORD", "movies4");


// Routing (útválasztó) beállításai.
define("PREFIX", "api");
define("SQLDIR", "sql");
$router = array(
    // Select kérések.
    "/movies" => "all_movie.sql",
    "/genre" => "all_genre.sql",
    "/stock" => "all_stock.sql",
    "/shops" => "all_shops.sql",
    "/cinemas" => "all_cinemas.sql",
    

);
//Eredeti:
/*
// Routing (útválasztó) beállításai.
define("PREFIX", "api");
define("SQLDIR", "sql");
$router = array(
    // Select kérések.
    "/customers" => "all_customer.sql",
    "/customers/:id" => "one_customer.sql",
    "/customers/limit/:s" => "limit_customer.sql",
    "/products" => "all_products.sql",
    // Insert kérések.
    "/customers/insert" => "add_customer.sql",
    // Update kérések.
    "/customers/update/:id" => "update_customer.sql",
    // Delete kérések.
    "/customers/delete/:id" => "delete_customer.sql"
);
*/