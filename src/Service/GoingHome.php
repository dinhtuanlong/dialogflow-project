<?php


namespace App\Service;


class GoingHome implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.

        $start=$data['queryResult']['parameters']['start'];
        $start=str_replace(" ","+",$start);
        $finish=$data['queryResult']['parameters']['finish'];
        $finish=str_replace(" ","+",$finish);
        $map=file_get_contents("https://www.google.com/maps/dir/".$start."/".$finish);
        $temp=substr($map,strpos($map,'You should arrive around'));
        $expected_arr=substr($temp, 0, strpos($temp, '\",1'));
        if (strpos($map,'[\"Fastest route, the usual traffic\"]')>0)
        {
            return $expected_arr."\n"."Traffic is as usual";
        }
        $temp=substr($map,0,strpos($map,'traffic on your route')+21);
        $traffic=substr($temp,strrpos($temp,'[\"')+3);
        $answer= $expected_arr."\n"." ".$traffic;
//        $answer = $start." ".$finish;
        return $answer."\n";
    }
}