<?php

namespace App\GraphQL\Queries;

use App\Models\Contact;

class ContactsQuery
{
    public function __invoke($rootValue, array $args)
    {
        $contacts = Contact::all();
        
        return response()->json(array('success' => true, 'contacts' => $contacts));
      
    }
}