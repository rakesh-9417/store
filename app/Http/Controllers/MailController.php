<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email() {
      $data = array('name'=>"Rakesh Kumar");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('nishuchauhan0027@gmail.com', 'Nishant Chauhan')->subject
            ('Laravel Testing E-Mail');
         $message->from('nishuchauhan0027@gmail.com','Rakesh Kumar');
      });
      echo "Basic Email Sent. Check your inbox.";
   }


   public function html_email() {
      $data = array('name'=>"Rakesh Kumar");
      Mail::send('mail', $data, function($message) {
         $message->to('nishuchauhan0027@gmail.com', 'Nishant Chauhan')->subject
            ('Laravel HTML Testing Mail');
         $message->from('nishuchauhan0027@gmail.com','Rakesh Kumar');
      });
      echo "HTML Email Sent. Check your inbox.";
   }


   public function attachment_email() {
      $data = array('name'=>"Rakesh Kumar");
      Mail::send('mail', $data, function($message) {
         $message->to('nishuchauhan0027@gmail.com', 'Nishant Chauhan')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\xampp\htdocs\store\public\products\160888586699.jpg');
         // $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('nishuchauhan0027@gmail.com','Rakesh Kumar');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
