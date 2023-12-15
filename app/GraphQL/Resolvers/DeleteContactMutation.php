<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class DeleteContactMutation
{
    public function __invoke($rootValue, array $args)
    {
        $contact = Contact::find($args['id']);
        $contact->delete();
        return true;
    }
}