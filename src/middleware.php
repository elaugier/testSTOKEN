<?php
// Application middleware

// e.g: $app->add(new \Slim\Csrf\Guard);

$app->add(new Tuupola\Middleware\JwtAuthentication([
    "path"      => ["/api"],
    "ignore"    => ["/api/token"],
    "secure"    => false,
    "header"    => "Stoken",
    "regexp"    => "/(.*)/",
    "secret"    => "5U3Gn3gp4LrQpS34d7Gj",
    "algorithm" => ["HS512"],
    "logger"    => $container->get("logger"),
    "attribute" => "jwt"
]));