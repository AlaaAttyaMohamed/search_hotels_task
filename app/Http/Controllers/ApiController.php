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
      $price_from = request('price_from');
      $price_to  = request('price_to');
      $date_from = request('date_from');
      $date_to = request('date_to');
      foreach($hotels->hotels as $hotel)
      {
          if($hotel->name == $name || $hotel->city == $city || ($hotel->price >= $price_from && $hotel->price <= $price_to))
          {
            array_push($response,$hotel);
          }
          if($date_from != null && $date_to != null)
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
