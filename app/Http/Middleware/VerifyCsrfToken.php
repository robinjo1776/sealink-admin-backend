<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
<<<<<<< HEAD
        //
=======
<<<<<<< HEAD
        'sanctum/csrf-cookie',  // Exempt CSRF cookie route
=======
        //
>>>>>>> 6831c52 (cors file updated)
>>>>>>> ca74bf0 (Resolved merge conflicts)
    ];
}
