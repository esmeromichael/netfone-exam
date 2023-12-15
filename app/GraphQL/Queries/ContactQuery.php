<?php

namespace App\GraphQL\Queries;

use App\Models\Contact;

class ContactQuery
{
    public function __invoke($rootValue, array $args)
    {
        return Contact::find($args['id']);
    }
}