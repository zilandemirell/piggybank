<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GuzzleController extends Controller
{
    public function index()
    {
        //request url
        $url = 'https://my.api.mockaroo.com/smartpiggybank.json?key=e6adf7f0';
 
        //create new instance of Client class
        $client = new Client(['header' => ['User-Agent' => 'MyRSSFeed']]);
 
        //send get request to fetch data
        $response = $client->request('GET', $url);
 
        //check response status ex: 200 is 'OK'
        if ($response->getStatusCode() == 200) {
            //header information contains detail information about the response.
            if ($response->hasHeader('Content-Length')) {
                //get number of bytes received
                $content_length = $response->getHeader('Content-Length')[0];
                echo '<p> Download '. $content_length. ' of data </p>';
            }
 
            //get body content
            $body =$response->getBody();
            $items = json_decode($body);
            foreach ($items as $item) {
                echo '<h3>  ' . $item->balance . '</h3>';
            }
           
        }
 
    }
}
