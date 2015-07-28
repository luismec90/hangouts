<?php namespace App\Http\Controllers;

use App\Group;
use App\Participant;
use Redirect;
use Request;
use App;
use Mail;
use File;

class WelcomeController extends Controller
{

    public function saveGroups()
    {

        // $json = '{"hangoutId":"AP36tYcbrZAXoUUUj7BPDVoOJ-BqQ08U_yFfoplp7BNPqSJ9FW5ZBg","hangoutUrl":"https://plus.google.com/hangouts/_/gu2hcwwhryankeckk52gvhbglya","participants":[{"id":"hangout6DC775EA_ephemeral.id.google.com^29273b85e0","hasMicrophone":true,"hasCamera":false,"hasAppEnabled":true,"isBroadcaster":false,"isInBroadcast":false,"displayIndex":0,"person":{"id":"108761034196827992342","displayName":"Luis Fernando Montoya Gómez","image":{"url":"https://lh5.googleusercontent.com/-Tbbtt4UifpE/AAAAAAAAAAI/AAAAAAAAAAA/Q-8yg17Z9cM/s96-c/photo.jpg"}},"locale":"en-GB"}]}';
        //$json = json_decode($json);

        $hangoutCode = Request::get('hangoutId');
        $url = Request::get('hangoutUrl');
        $topic = Request::get('topic');


        //$hangoutCode =  $json->hangoutId;
        //$url =  $json->hangoutUrl;

        $group = Group::where('url', $url)->first();

        if (is_null($group)) {
            $group = new Group;
            $group->code = $hangoutCode;
            $group->topic = $topic;
            $group->url = $url;
            $group->save();
        }

        $participantsArray = [];

        foreach (Request::get('participants') as $participant) {
            //foreach ($json->participants as $participant) {

            /*ob_start();
            var_dump($participant['person']);
            $data = ob_get_clean();

            File::put("test.txt",$data);

            exit; */

            $participantTmp = $participant['person'];


            $participant = Participant::where('code', $participantTmp['id'])->first();

            if (is_null($participant)) {
                $participant = new Participant;
                $participant->code = $participantTmp['id'];
                $participant->name = $participantTmp['displayName'];
                $participant->image = $participantTmp['image']['url'];
            }

            $participant->group_id = $group->id;
            $participant->active = 1;
            $participant->save();

            array_push($participantsArray, $participant->id);

        }

        Participant::where('active', 1)
            ->where('group_id', $group->id)
            ->whereNotIn('id', $participantsArray)
            ->update(['active' => 0]);

    }

    public function listGroups()
    {
        $groups = Group::with(['participants' => function ($q) {
            $q->where('active', 1);
        }])->whereHas('participants', function ($q) {
            $q->where('active', 1);
        })->get();

        $oneHourAgo = date('Y-m-d H:i:s', strtotime('-1 hour'));

        foreach ($groups as $index => $group) {
            if ($group->participants->count() == 1) {
                $participant = $group->participants[0];
                if ($participant->updated_at < $oneHourAgo) {
                    $participant->active = 0;
                    $participant->save();
                    unset($groups[$index]);
                }
            }
        }

        return $groups;
    }

}
