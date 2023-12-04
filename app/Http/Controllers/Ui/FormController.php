<?php

namespace App\Http\Controllers\Ui;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Services\MailSettings;
use App\Mail\Test;
use App\Models\Lead as Contact;
use App\Models\Widget;


use Validator, DB, Throwable, File, Config;
use App\Traits\ClientInfoTrait;

class FormController extends Controller
{
    use ClientInfoTrait;

    public function save(Request $request)
    {

        Validator::extend('spam_check', function ($attribute, $value, $parameters) {
            preg_match('#<a[\s]+([^>]+)>((?:.(?!\<\/a\>))*.)</a>#', $value, $a);
            if ($a)
                return false;
            else {
                $bHasLink = strpos($value, 'http') !== false || strpos($value, 'www.') !== false;
                if ($bHasLink)
                    return false;
                else
                    return true;
            }
        });

        $support = new Contact;
        $rules = array(
            'name' => 'required|max:255',
            'phone_number' => "required_without_all:email,extra['whatsapp_number']|max:255",
            'email' => ["required_without_all:phone_number,extra['whatsapp_number']", 'max:255'],
            // 'whatsapp_number' => 'required_without_all:phone_number,email|max:255',
            'message' => 'nullable|spam_check',
            // 'recaptcha' => 'required|recaptcha'

        );

        $messages = [
            'name.required' => 'Please enter your name',
            'phone_number.required' => 'Please enter your mobile number',
            'email.email' => 'Please enter a valid email address',
            'message.spam_check' => 'Contains unwanted values.',
        ];

        $data = $request->all();
        if (isset($data['country'])) {
            $data['phone_number'] = $data['country'].$data['phone_number'];
        }

        if (isset($data['l_name'])) {
            $data['name'] = $data['name']." ".$data['l_name'];
        }



        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
            $data['extra_data'] = [
                'location' => isset($request->location) ? $request->location : null,
            ];
        


        if (isset($request->address)) {
            $extra_data['address'] =  ['address'=> $request->address];
            $data['extra_data'] = array_merge($extra_data['address'], $data['extra_data']); 
        }
        


        if (isset($data['extra_data']))
            $data['extra_data'] = json_encode($data['extra_data']);

        $browser_details = $this->get_browser();
        $data['user_agent'] = $browser_details['userAgent'];
        $data['ip_address'] = $this->get_ip();
        $data['referrer_link'] = $this->get_referer();

        $support->fill($data);
        $support->save();
        
        
        
        
        try {
            $this->email_addesss($support, $data);
        } catch (Throwable $e) {
            //code to handle the exception
        }

      

        return response()->json(['success' => true, 'type' => $data['lead_type']]);
    }



  
    

    public function email_addesss($support, $data)
    {

        $mail_widget =  Widget::where('code', 'mail')->first();
        $mail_settings = json_decode($mail_widget->content);
        $mail_to = isset($mail_settings->to_address) ? $mail_settings->to_address : "";
        $mail_cc = isset($mail_settings->cc_address) ? explode(",", $mail_settings->cc_address) : "";


        $mail = new MailSettings;
        $mail->to($mail_to)->cc($mail_cc)->send(new \App\Mail\Contact($support));

        return [$mail];
    }
     public function career_email($support, $data)
    {

        $mail_widget =  Widget::where('code', 'mail')->first();
        $mail_settings = json_decode($mail_widget->content);
        $mail_to = $mail_settings->career_to_address;
        // $mail_cc = explode(",", $mail_settings->cc_address);
        
        $mail = new MailSettings;
        // $mail->to($mail_to)->cc($mail_cc)->send(new \App\Mail\Contact($support));

        $mail->to($mail_to)->send(new \App\Mail\Career($support));


        return [$mail];
    }
    public function test_mail()
    {
        $mail = new MailSettings;
        $mail->to('supal@spiderworks.in')->cc('sobha.ashtaman@gmail.com')->send(new Test([]));
        echo "Mail send";
        exit;
    }
}
