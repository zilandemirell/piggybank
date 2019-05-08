<?php

namespace App\Http\Controllers;

use App\transaction;
use GuzzleHttp\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class makeTransactionController extends Controller
{
    public function index()
    {
        return view('makeTransactionChild');
    }

    public function getDummy()
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
                echo '<p> Download ' . $content_length . ' of data </p>';
            }

            //get body content
            $body = $response->getBody();
            $items = json_decode($body);
           /* foreach ($items as $item) {
                echo '<h3>  ' . $item->balance . '</h3>';
            }*/
        }
        return $items;
    }

    public function record($dummy, $date, $hour, $user_id)
    {


        $trans = new transaction;
        $trans->user_id = $user_id;
        $trans->date = $date;
        $trans->balance = $dummy->balance;
        $trans->hour = $hour;
        $trans->isFailed = $dummy->isFailed;
        $trans->proof = $dummy->proof;


        $trans->save();


    }

    public function openDoor()
    {

        //wait(2000);
        $this->doorClosed();

        return ["status" => true];
        //wait for the response from raspberry
    }

    //local/raspsendingdata
    public function doorClosed()
    {


        $who = Auth::id();

        $jsonq = $this->getDummy();
        //this data created for simulation; originally this method called by raspberry and data will be sended from it.

        $mytime = Carbon::now();
        $input = $mytime->toDateTimeString();
        $format1 = 'Y-m-d';
        $format2 = 'H:i:s';
        $date = Carbon::parse($input)->format($format1);
        $hour = Carbon::parse($input)->format($format2);


        $dummy = $this->record($jsonq, $date, $hour, $who);


    }


}
