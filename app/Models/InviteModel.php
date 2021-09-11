<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InviteModel extends Model
{
    public function getAllInvites()
    {
        if (file_exists(storage_path('json/affiliates.json'))) {

            $results = [];
            $officeLat = deg2rad(53.3340285);
            $officeLon = deg2rad(-6.2535495);
            $json = json_decode(file_get_contents(storage_path('json/affiliates.json')), true);
            $sortedArray = array_column($json, 'affiliate_id');
            array_multisort($sortedArray, SORT_ASC, $json);

            foreach ($sortedArray as $sKey => $sValue) {

                foreach ($json as $key => $value) {
                    if ($sValue === $value["affiliate_id"]) {

                        $latDelta = deg2rad($value["latitude"]) - $officeLat;
                        $lonDelta = deg2rad($value["longitude"]) - $officeLon;

                        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
                                cos($officeLat) * cos($officeLon) * pow(sin($lonDelta / 2), 2)));
                        $meters = $angle * 6371000;
                        $kilometers = ($meters * 1) / 1000;
                        if ($kilometers < 100 ){
                            $value["kilometers"] = round($kilometers, 1);
                            $results[] = $value;
                        }
                    }
                }
            }

            return $results;
        }
    }
}
