<?php

namespace App\Listeners;

use App\Events\UserBooked;

class NotifyViaSms
{
    protected $url = 'https://post.chikka.com/smsapi/request';
    protected $client_id = 'bb623b12ab953d3ab003531a855e5cc557bf2f72f97304c6d54dcd0317d64001';
    protected $secret_key = 'da5d135fb18831479d61bc2bdc1b4023bed0a11af5970d28647be1c1bc70c14b';
    protected $short_code = '292907608';

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function send($message, $recipient, $mustInit = true)
    {
        $message_id = str_pad(rand(), 32, '0', STR_PAD_LEFT);

        $params = array(
            'message_type' => 'SEND',
            'mobile_number' => $recipient,
            'shortcode' => $this->short_code,
            'message_id' => $message_id,
            'message' => $message,
            'client_id' => $this->client_id,
            'secret_key' => $this->secret_key,
        );

        $query = http_build_query($params);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);

        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $error = curl_error($ch);
        curl_close($ch);
        // Add the message_id in the response.
        $response = json_decode($response, true);
        $response['message_id'] = $message_id;
        $response = json_encode($response);

        return $response;
        //return $httpcode . '-'. $response . ' = ' . $error;
    }

    /**
     * Handle the event.
     *
     * @param  UserBooked  $event
     * @return void
     */
    public function handle(UserBooked $event)
    {
        $message  = "Booking information: \n";
        $message .= "Clinic: Philcare \n";
        $message .= "Date: 10/10/2015 \n";
        $message .= "Thank you\nEspesyalistaTeam\n";

        $res = $this->send($message, '09253072394');
        \Log::info('UserBooked: ' .$res);
    }
}
