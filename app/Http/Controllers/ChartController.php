<?php

namespace App\Http\Controllers;

use App\Models\User;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class ChartController extends Controller
{
    public function __invoke()
    {
        $chart = new LaravelChart([
            'chart_title' => 'User Roles',
            'report_type' => 'group_by_string',
            'model' => User::class,
            'group_by_field' => 'role.name',
            'chart_type' => 'pie',
        ]);

        return view('chart', compact('chart'));
    }
}
