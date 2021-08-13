<?php
error_reporting (E_ALL ^ E_NOTICE);
//Get videos from channel by YouTube Data API
$API_key    = 'AIzaSyDU3h5ez-U2h1DKT72zP0nPBArSsSixEFs';
$channelID  = 'UCkT7iexPFQcy4NV4ujoOOdA';
$maxResults = 30;
$embed_url = 'https://www.youtube.com/embed/';

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

foreach ($videoList->items as $item) {
   $id = $item->id->videoId;
   $url[] = array("url" => $embed_url.$id);
}
echo json_encode($url);
// https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='UCkT7iexPFQcy4NV4ujoOOdA'&maxResults='30'&key='AIzaSyDU3h5ez-U2h1DKT72zP0nPBArSsSixEFs'
?>
