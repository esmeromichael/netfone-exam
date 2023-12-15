<?php 
namespace App\GraphQL\Mutations;

use App\Models\Contact;

class CreateContactMutation
{
    public function __invoke($rootValue, array $args)
    {
        return Contact::create($args);
    }
}