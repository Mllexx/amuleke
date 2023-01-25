<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FrontendController extends Controller
{
    public function index()
    {
        $medium_posts = $this->fetchMedium();
        return view('home', ['publications' => $medium_posts]);
    }

    /**
     * Fetch posts from medium account in JSON format
     * @return Object
     */
    function fetchMedium()
    {
        $medium_username = env('MEDIUM_USERNAME');
        $client = new Client();

        try {
            $res = $res = $client->get("https://medium.com/@$medium_username?format=json");
        } catch (\Exception $exception) {
            return false;
        }

        if (!$res->getStatusCode() == 200) {
            return false;
        }

        $body = json_decode(str_replace('])}while(1);</x>', '', $res->getBody()));

        if (!isset($body->success, $body->payload)) {
            return false;
        }

        $posts = $body->payload->references->Post;
        return $posts;
    }

}
