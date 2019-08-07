<?php
/**
 * Copyright (c) 2019.
 * This project is made and maintained by Ariful Islam using Slim framework for testing api. Here anybody can use this project for learning purpose. But it is still in production. That's why using in production is not recommended. To know more about me just knock me at github.com/arif98741
 * facebook.com/arifulislammc007
 *
 */

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use config\DB;
use config\Helper;

/*
 * all books
 * @param $request
 * @param $response
 * @return Response
 * */
$app->get('/api/book', function (Request $request, Response $response, $args) {

    $db = new DB();
    $statement = $db->prepare("select * from book");
    $statement->execute();
    $row =  $db->row($statement);
    $json = [];
    if ($row > 0)
    {
        $books = $statement->fetchAll(PDO::FETCH_OBJ);
        $response->getBody()->write(json_encode($books));
        return $response;
    }else{
        $json["error"] = 400;
        $json["error_message"] = "No result found";
        $json["client"] = $_SERVER['REMOTE_ADDR'];
        $json["requested_url"]   = Helper::base_url();

        $response->getBody()->write(json_encode($json));
        return $response;
    }
});

/*
 * single book
 * @param $request
 * @param $response
 * @return Response
 * */
$app->get('/api/book/{id}', function (Request $request, Response $response, $args) {

    $id = $request->getAttribute('id');
    $db = new DB();
    $statement = $db->prepare("select * from book where bookid=:id");
    $statement->bindParam(':id',$id);
    $statement->execute();
    $row =  $db->row($statement);
    $json = [];
    if ($row > 0)
    {
        $books = $statement->fetchAll(PDO::FETCH_OBJ);
        $response->getBody()->write(json_encode($books));
        return $response;
    }else{
        $json["error"] = 400;
        $json["error_message"] = "No result found";
        $json["client"] = $_SERVER['REMOTE_ADDR'];
        $json["requested_url"]   = Helper::base_url();

        $response->getBody()->write(json_encode($json));
        return $response;
    }
});
/*
 * books by publisher
 * @param $request
 * @param $response
 * @return Response
 * */
$app->get('/api/book/publisher/{name}', function (Request $request, Response $response, $args) {

    $publisher = $request->getAttribute('name');
    $db = new DB();
    $statement = $db->prepare("select * from book where publisher=:publisher");
    $statement->bindParam(':publisher',$publisher);
    $statement->execute();
    $row =  $db->row($statement);
    $json = [];
    if ($row > 0)
    {
        $books = $statement->fetchAll(PDO::FETCH_OBJ);
        $response->getBody()->write(json_encode($books));
        return $response;
    }else{
        $json["error"] = 400;
        $json["error_message"] = "No result found";
        $json["client"] = $_SERVER['REMOTE_ADDR'];
        $json["requested_url"]   = Helper::base_url();
        $response->getBody()->write(json_encode($json));
        return $response;
    }
});
