<?php

namespace App\Controller;

use App\Model\Contact;

class ContactController
{
    public function index(): string
    {
        $response = '<h1>Contact</h1>';

        foreach (Contact::all() as $contact) {
            $response .= "<p>$contact->last_name - $contact->first_name ($contact->email)</p>";
        }

        return $response;
    }
}
