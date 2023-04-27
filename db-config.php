<?php
    //create database connection
    error_reporting(0); //to suppress database base connection error warnings
    $user = 'root';
    $password = '';
    $database = 'top5';
    $mysqli = new mysqli('localhost', $user, $password, $database);
    if ($mysqli->connect_errno != null) {
        exit("Failed to connect to database");
    }