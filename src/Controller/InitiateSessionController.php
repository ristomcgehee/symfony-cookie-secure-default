<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InitiateSessionController
{
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $session->set('foo', 'bar');

        return new Response(
            '<html><body>Open your browser developer tools, go to the Application tab (if on Chrome) ' .
            'or Storage tab (if on Firefox), expand Cookies, ' .
            'select the current website URL, and observe the "Secure" column of the PHPSESSID cookie. It will be ' .
            'unchecked (or false) because "cookie_secure" is not specified.</body></html>'
        );
    }
}