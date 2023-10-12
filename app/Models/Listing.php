<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            // [
            //     'id' => 1,
            //     'title' => 'Listing One',
            //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aspernatur incidunt, ipsam reiciendis minima voluptatibus error nostrum maxime. Vel, vero officiis ab veniam enim est accusamus nemo unde quidem ipsum?'
            // ],
            // [
            //     'id' => 2,
            //     'title' => 'Listing Two',
            //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad aspernatur incidunt, ipsam reiciendis minima voluptatibus error nostrum maxime. Vel, vero officiis ab veniam enim est accusamus nemo unde quidem ipsum?'
            // ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}