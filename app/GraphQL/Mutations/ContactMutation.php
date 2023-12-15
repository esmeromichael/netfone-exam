<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class ContactMutation
{
    public function createContact($rootValue, array $args)
    {
        return Contact::create($args);
    }
}