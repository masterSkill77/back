<?php

namespace App\Http\Controllers;

use Binance\API;
use Illuminate\Http\Request;

class Payment extends Controller
{
    public function payer(Request $request)
    {
        $api = new API("VCUzIWeKEZkJcxIgTvKRNUnPy0yJ4n9i5akLRfoRD8pFX4IWKxz09z6BZihL3e83", "eyJpdiI6IklsOUVwSTNpeXFqNTlRc0RGQkl0U2c9PSIsInZhbHVlIjoiT0ZVSEk3bjVQazgzSGlKK3JKdE0zbmttd2JlbHRhME5lNjBoVm8zZnJIZHZicyttVDkxVjZlQU1TQXE4RldWNjZkbXJEcXlnWndZZytZL2l4ZkxzT3dIZTV5ZTJHVkpXTW4zK0dkYzkwUUU9IiwibWFjIjoiOWNkNTRmM2VkMGEzZWUyMTE0YWJkNzNkMjk5MDYwZWM3ZDI3ZjIwN2IwZDgxNGNmNjRmYWEyYWRjZDRkYjRlMiIsInRhZyI6IiJ9", true);
        // $api = new API($request->input('public'), $request->input('secret'));


    }
}
