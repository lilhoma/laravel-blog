<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
    // new Newsletter(new ApiClient)
    public function __construct(protected ApiClient $client)
    {
        //
    }

    public function subscribe($email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');
        
        return $this -> client -> lists -> addListMember($list, [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    }
}