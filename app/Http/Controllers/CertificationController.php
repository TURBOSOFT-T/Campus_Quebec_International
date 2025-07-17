<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;

class CertificationController extends Controller
{
    
     public function certifications()
{
    $certifications = Certification::all();
    return view('admin.certifications.list', compact('certifications') );
}

 
}
