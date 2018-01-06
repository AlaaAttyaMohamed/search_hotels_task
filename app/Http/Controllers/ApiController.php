<?php

namespace App\Http\Controllers;

require '../vendor/autoload.php';


use App\Transformers\ImageTransformer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ApiController extends Controller
{

  public function search_hotels()
  {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, 'https://api.myjson.com/bins/tl0bp');
      $result = curl_exec($ch);
      curl_close($ch);

      $hotels   = json_decode($result);
      $response = [];
      $name     = request('name');
      $city     = request('city');
      $price    = request('price');
      $date     = request('date');
      $price_from = isset($price[0]) ? $price[0] : '0';
      $price_to  = isset($price[1]) ? $price[1] : '0';
      $date_from = isset($date[0]) ? $date[0] : '00-00-0000';
      $date_to = isset($date[1]) ? $date[1] : '00-00-0000';
      foreach($hotels->hotels as $hotel)
      {
          if($hotel->name == $name || $hotel->city == $city || ($hotel->price >= $price_from && $hotel->price <= $price_to))
          {
            array_push($response,$hotel);
          }
          if(isset($date))
          {
              foreach ($hotel->availability as $availability)
              {
                 if($availability->from >= $date_from && $availability->to <= $date_to)
                 {
                   array_push($response,$hotel);
                 }
              }
          }
      }

      return response($response);
  }

}
