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
        
        if (isset($request->session)) {
            $extra_data['session'] =  ['session'=> $request->session];
            $data['extra_data'] = array_merge($extra_data['session'], $data['extra_data']); 
        }
        if (isset($request->Enrollment_of_our_Child_in_Grade)) {
            $extra_data['Enrollment_of_our_Child_in_Grade'] =  ['Enrollment_of_our_Child_in_Grade'=> $request->address];
            $data['extra_data'] = array_merge($extra_data['Enrollment_of_our_Child_in_Grade'], $data['extra_data']); 
        }
        if (isset($request->gender)) {
            $extra_data['gender'] =  ['gender'=> $request->gender];
            $data['extra_data'] = array_merge($extra_data['gender'], $data['extra_data']); 
        }
        if (isset($request->d_o_b)) {
            $extra_data['d_o_b'] =  ['d_o_b'=> $request->d_o_b];
            $data['extra_data'] = array_merge($extra_data['d_o_b'], $data['extra_data']); 
        }
        if (isset($request->parents_name)) {
            $extra_data['parents_name'] =  ['parents_name'=> $request->parents_name];
            $data['extra_data'] = array_merge($extra_data['parents_name'], $data['extra_data']); 
        }
        if (isset($request->occupation)) {
            $extra_data['occupation'] =  ['occupation'=> $request->occupation];
            $data['extra_data'] = array_merge($extra_data['occupation'], $data['extra_data']); 
        }
        if (isset($request->city)) {
            $extra_data['city'] =  ['city'=> $request->city];
            $data['extra_data'] = array_merge($extra_data['city'], $data['extra_data']); 
        }
        if (isset($request->state)) {
            $extra_data['state'] =  ['address'=> $request->state];
            $data['extra_data'] = array_merge($extra_data['state'], $data['extra_data']); 
        }
        if (isset($request->nationality)) {
            $extra_data['nationality'] =  ['nationality'=> $request->nationality];
            $data['extra_data'] = array_merge($extra_data['nationality'], $data['extra_data']); 
        }
        if (isset($request->_country)) {
            $extra_data['Country'] =  ['Country'=> $request->_country];
            $data['extra_data'] = array_merge($extra_data['Country'], $data['extra_data']); 
        }
        if (isset($request->last_school_attended)) {
            $extra_data['last_school_attended'] =  ['last_school_attended'=> $request->last_school_attended];
            $data['extra_data'] = array_merge($extra_data['last_school_attended'], $data['extra_data']); 
        }
        if (isset($request->present_class)) {
            $extra_data['present_class'] =  ['present_class'=> $request->present_class];
            $data['extra_data'] = array_merge($extra_data['present_class'], $data['extra_data']); 
        }
        if (isset($request->siblings)) {
            $extra_data['siblings'] =  ['Country'=> $request->siblings];
            $data['extra_data'] = array_merge($extra_data['siblings'], $data['extra_data']); 
        }
        if (isset($request->gender_2)) {
            $extra_data['gender_2'] =  ['gender_2'=> $request->gender_2];
            $data['extra_data'] = array_merge($extra_data['gender_2'], $data['extra_data']); 
        }
        if (isset($request->age_2)) {
            $extra_data['age_2'] =  ['age_2'=> $request->age_2];
            $data['extra_data'] = array_merge($extra_data['age_2'], $data['extra_data']); 
        }
        if (isset($request->class)) {
            $extra_data['class'] =  ['gender_2'=> $request->class];
            $data['extra_data'] = array_merge($extra_data['class'], $data['extra_data']); 
        }
        if (isset($request->Aryan_Parent__Name_of_the_child)) {
            $extra_data['Aryan_Parent__Name_of_the_child'] =  ['Aryan_Parent__Name_of_the_child'=> $request->Aryan_Parent__Name_of_the_child];
            $data['extra_data'] = array_merge($extra_data['Aryan_Parent__Name_of_the_child'], $data['extra_data']); 
        }
        if (isset($request->Contact_No_of_the_Parent)) {
            $extra_data['Contact_No_of_the_Parent'] =  ['Contact_No_of_the_Parent'=> $request->Contact_No_of_the_Parent];
            $data['extra_data'] = array_merge($extra_data['Contact_No_of_the_Parent'], $data['extra_data']); 
        }
        if (isset($request->relative_phone_number)) {
            $extra_data['relative_phone_number'] =  ['relative_phone_number'=> $request->relative_phone_number];
            $data['extra_data'] = array_merge($extra_data['relative_phone_number'], $data['extra_data']); 
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
