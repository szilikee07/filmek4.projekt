<?php

// Adatbázis kapcsolat beállításai.
define("DBNAME", "bestyellow");
define("DBUSER", "bestyellow");
define("DBPASSWORD", "BVxfn7gaLppkcSty");

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