<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'        => 'Llamadas por duración',
            'chart_type'         => 'bar',
            'report_type'        => 'group_by_string',
            'model'              => 'App\\Registro',
            'group_by_field'     => 'duracion',
            'aggregate_function' => 'count',
            'filter_field'       => 'created_at',
            'filter_days'        => '90',
            'column_class'       => 'col-md-12',
            'entries_number'     => '5',
        ];

        $chart1 = new LaravelChart($settings1);

        return view('home', compact('chart1'));
    }
}
