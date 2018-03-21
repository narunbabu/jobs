<?php
namespace App\Http\Controllers;

use App\Notifications\CustomEmail;
use App\User;
use Illuminate\Http\Request;
use Snowfire\Beautymail\Beautymail;
use DB;
class EmailController extends Controller
{
    
//    public function customEmail(Request $request)
//     {
//         if ($request->isMethod('get'))
//             return view('custom_email');
//         else {
//             $rules = [
//                 'to_email' => 'required|email',
//                 'subject' => 'required',
//                 'message' => 'required',
//             ];
//             $this->validate($request, $rules);
//             $user = new User();
//             $user->email = $request->to_email;
//             $user->notify(new CustomEmail($request->subject, $request->message));
//             $request->session()->put('status', true);
//             return back();
//         }
//     }

    public function autoEmail()
    {
        $name='';
        $email='';
        $beautymail = app(Beautymail::class);
        $jobseekers = DB::table('jobseekers')
        // ->where('subjects.user_id',Auth::user()->id)
        ->select('*')->get();

        
        foreach ($jobseekers as $jseeker) {
            // global $name, $email;

            $name = $jseeker->name;
            // $email=$jseeker->email;
            // var_dump($email);
            $beautymail->send('emails.welcome', ['name'=>$name], function($message)use ($jseeker)
            {
                $message
                    ->from('info@ameyem.com')
                    
                    ->to($jseeker->email, $jseeker->name)
                    ->subject('Update on interview at Ameyem Geosolutions');
            });
        }
        return "Emails sent successfully";


        
        // $title = "password Reset";
        // $content = $url;
        // $data = array('button' => $content);
        // $beautymail = app()->make(Snowfire\Beautymail\Beautymail::class);

        // $beautymail->send('email.email', $data, function($message) use($data)

        // {

        //     $message
        //         ->from('noreplay@astrosoft.tk')
        //         ->to('pasupathi022@gmail.com', 'John Smith')
        //         ->subject('Welcome!');

        // });

        //     $I =1;

        //     RETURN $I;
    }
}