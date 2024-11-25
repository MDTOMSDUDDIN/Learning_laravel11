<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download(){
        return response("Download a file ");
    }

    // function downloadInvoice($InvoiceId){
    //     return response("Downloading PDF Invoice With ID : {$InvoiceId}");
    // }
    // function downloadInvoiceWithType($InvoiceId, $fileType){
    //     return response("Downloading {$fileType} Invoice With ID : {$InvoiceId}");
    // }


    function downloadInvoice($InvoiceId, $fileType="PDF"){
        return response("Downloading {$fileType} Invoice With ID : {$InvoiceId}");
    }

    function error(){
        return response("Error: No Invoice Id Provider ",404);
    }
}
