<?php

namespace App\Http\Livewire;

use App\Models\Message;
use App\Models\User;
use App\Notifications\NewMessageNotification;
use App\Notifications\SendMailNotification;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class MessageComponent extends Component
{
    public $title, $body,$channel, $group, $shop_id,$active, $send_time;
    public $channels = ['firebase','email','sms'];
    public $editMode= false;
    public $search = '';
    public $perPage = 15;
    public function render()
    {
        return view('livewire.message-component',[
           'items' => Message::search($this->search)
                ->latest()
                ->simplePaginate($this->perPage)
        ]);
    }


    public function resetAll()
    {
        $this->body ='';
        $this->title ='';
        $this->channel ='';
    }

    public function edit($item)
    {
        $this->body =$item['body'];
        $this->title =$item['title'];
        $this->channel =$item['channel'];
        $this->active =$item['id'];
        $this->editMode =  true;
    }

    public function save()
    {
        if ($this->editMode == true)
        {
            $mess = Message::find($this->active);
        }else{
            $mess = new Message();
        }


        $mess->title = $this->title;
        $mess->channel = $this->channel;
        $mess->body = $this->body;
        $mess->send_time = $this->send_time;
        if ($this->shop_id)
        {
            $mess->shop_id = $this->shop_id;
        }
        $mess->save();
        $this->resetAll();
        $this->emit('created');
    }
//
//    public function sendSms($mess)
//    {
//
//        $users = User::where('type','customer')->where('status','active')->get();
//        Notification::send($users, new NewMessageNotification($mess['body']));
//    }

//    public function send($item)
//    {
//        foreach ($item['channel']  as $channel)
//        {
//            if ($channel == 'email')
//            {
//                $this->sendEmail($item);
//            }
//            if ($channel == 'firebase')
//            {
//                $this->sendFirebase($item);
//            }
//            if ($channel == 'sms')
//            {
//                $this->sendSms($item);
//            }
//        }
//
//
//
//        $this->emit('message','Messages Queued');
//    }

//    public function sendEmail($mess)
//    {
//        $users = User::where('type','customer')->get();
//        Notification::send($users, new SendMailNotification($mess['body']));
//    }
}
