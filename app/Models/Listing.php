<?php

    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    'id' => '1',
                    'title' => 'SDE-1',
                    'description' => 'Work in Backend',
                    'salary' => '$80000'
                ],
                [
                    'id' => '2',
                    'title' => 'SDE-2',
                    'description' => 'Work in Backend',
                    'salary' => '$120000'
                ]
            ];
        }
        public static function find($id){
            $listings = self::all();
            foreach($listings as $listing){
                if($listing['id'] === $id){
                    return $listing;
                }
                    
                 
            }
        }
    }



?>