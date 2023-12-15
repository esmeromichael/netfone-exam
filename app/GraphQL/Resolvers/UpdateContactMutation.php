<?php

namespace App\GraphQL\Mutations;

use App\Models\Contact;

class UpdateContactMutation
{
    public function __invoke($rootValue, array $args)
    {
        $contact = Contact::find($args['id']);
        $contact->update($args);
        return $contact;
    }
}