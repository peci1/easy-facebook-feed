<?php

class EffConnect
{
    private $accessToken;
    private $error;
    private $version;

    public function __construct()
    {
        $this->error = new EffError();
        $this->version = 'v3.0';
        $this->accessToken = $this->getAccessToken();
    }

    /**
     * @return string
     */
    private function getAccessToken()
    {
        return get_option('eff_access_token');
    }

    /**
     * @param $token
     * @return string
     */
    public function setAccessToken($token)
    {
        $this->accessToken = $token;

        return $this->accessToken;
    }

    /**
     * @param $pageId
     * @return array|mixed|object
     */
    public function eff_get_page($pageId)
    {
        $fields = 'link,name,cover,picture';
        $accessToken = $this->accessToken;
        $url = "https://graph.facebook.com/{$this->version}/{$pageId}?fields={$fields}&access_token={$accessToken}";
        return $this->eff_connect($url);
    }

    /**
     * @param $pageId
     * @param $postLimit
     * @return array|mixed|object
     */
    public function eff_get_page_feed($pageId, $postLimit)
    {
        $accessToken = $this->accessToken;
        $fields = 'full_picture,type,message,link,name,description,from,source,created_time,permalink_url,object_id';
        $fields = apply_filters('effp-page-feed-fields', $fields);
        $url = "https://graph.facebook.com/{$this->version}/{$pageId}/posts?fields={$fields}&access_token={$accessToken}&limit={$postLimit}";
        return $this->eff_connect($url);
    }

    /**
     * @param $eventId
     * @return array|mixed|object
     */
    public function eff_get_event_details($eventId)
    {
        $accessToken = $this->accessToken;
        $fields = 'description,name,start_time,event_times,ticket_uri,cover,timezone,place';
        $fields = apply_filters('effp-event-fields', $fields);
        $url = "https://graph.facebook.com/{$this->version}/{$eventId}?fields={$fields}&access_token={$accessToken}";
        return $this->eff_connect($url);
    }

    /**
     * @param $url
     * @return array|mixed|object
     */
    private function eff_connect($url)
    {
        $req = new EffServerRequirements;
        if ($req->getConnectionType() === "curl") {
            $result = json_decode($this->connect_with_curl($url));
        } else {
            $result = json_decode($this->connect_with_fopen($url));
        }

        return $result;
    }

    private function connect_with_curl($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $json = curl_exec($ch);
        if ($json === false) {
            $arr = array('error' => array('message' => curl_error($ch)));
            $json = json_encode($arr);
            curl_close($ch);
            return $json;
        }
        curl_close($ch);

        return $json;
    }

    private function connect_with_fopen($url)
    {
        if (file_get_contents($url)) {
            $json = file_get_contents($url);
        } else {
            $arr = array('error' => error_get_last());
            $json = json_encode($arr);
        }

        return $json;
    }
}