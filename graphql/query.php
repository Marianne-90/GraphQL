<?php

use App\Models\Address;
use App\Models\User;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

$rootQuery = new ObjectType([
    'name' => 'Query',
    'fields' => [
        'user' => [
            'type' => $userType,
            'args' => [
                'id' => Type::nonNull(Type::int())    
            ],
            'resolve' => function($root, $args) {
                if (isset($args["id"])) {
                    $user = User::find($args["id"]);
                    if ($user) {
                        return $user->toArray();
                    }
                }
                return null;
            }
        ]
    ]
]);
