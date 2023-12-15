<?php 
namespace App\GraphQL\Resolvers;

use App\Models\Contact;

class ContactResolver
{
    public function contacts()
    {
        $lists = Contact::all();

        return response()->json(array('success' => true, 'contacts' => $lists));
    }

    public function contact($rootValue, array $args)
    {
        return Contact::find($args['id']);
    }

    public function createContact($rootValue, array $args)
    {
        return Contact::create($args);
    }

    public function updateContact($rootValue, array $args)
    {
        $contact = Contact::find($args['id']);
        $contact->update($args);
        return $contact;
    }

    public function deleteContact($rootValue, array $args)
    {
        $contact = Contact::find($args['id']);
        $contact->delete();
        return true;
    }
}
