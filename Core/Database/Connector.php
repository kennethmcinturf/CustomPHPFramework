<?php

class Connection{
    public static function make($config){
        try{
            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'codeup12');

            return new PDO(
                $config('connection').';dbname='.$config('name'),
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch(PDOException $e){
            dd($e);
        }
    }
}