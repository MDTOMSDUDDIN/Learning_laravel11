<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request, $invoiceId)
    {
        if ($request->has('download')) {
            $type = $request->input('download');
            $printType = $request->input('print');
            if ($printType == 'color') {
                return response("Downloading colored {$type} Invoice Id {$invoiceId}");
            } else if ($printType == 'red') {
                return response("Downloading red {$type} With Invoice ID: {$invoiceId}");
            }
            return response("Downloading {$type} With Invoice ID:{$invoiceId}");
        }

        if ($request->has('email')) {
            $email = $request->input('email');
            if ($email == 1) {
                return response("Emailing Invoice ID : {$invoiceId}");
            }
        }
        return response("Displaying Invoice with ID :{$invoiceId}");
    }


    function invoiceExample(Request $request){
        $greetings=$request->input('greetings','Hello');

        return response("Greetings:{$greetings}");
    }


}
