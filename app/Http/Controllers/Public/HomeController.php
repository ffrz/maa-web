<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        
        $base_items = Event::all();

        // bikin map untuk acuan pengecekan
        $_base_items_map = [];
        foreach ($base_items as $item) {
            if (!isset($_base_items_map[$item->week]))
                $_base_items_map[$item->week] = [];
            $_base_items_map[$item->week][$item->day] = $item;
        }
        

        $year = date('Y');
        $schedule_items = [];
        for ($month = 1; $month <= 12; $month++) {
            $items = [];
            
            // iterasi semua tanggal, cek dari acuan apakah pada hari dan pekan tersebut ada jadwal
            $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
            for ($i = 1; $i <= $days; $i++) {
                $date = new Carbon("$year-$month-$i");

                $weekOfMonth = 0;
                // cek hari ini pekan ke berapa
                //for ($i = 1; $i <= 4; $i++) {
                    // dayOfWeek 0 - 6, sedangkan database kita menggunakan 1-7 dan 1 adalah ahad
                    // sedangkan dayOfWeek dimulai senin jadi harus kita normalisasi
                    $dayOfWeek = $date->dayOfWeek + 1;
                    if ($dayOfWeek == 7)
                        $dayOfWeek = 1; // angka 7 untuk minggu diganti jadi 1

                    $day = $date->format('j');
                    $weekOfMonth = ceil($day / 7);
                //}

                if (isset($_base_items_map[$weekOfMonth][$dayOfWeek])) {
                    // ambil dari acuan, kalau ada masukkan
                    $items[$i] = [
                        'date' => $date,
                        'data' => $_base_items_map[$weekOfMonth][$dayOfWeek],
                    ];
                }
            }
            $schedule_items[$month] = $items;
        }

        return view('public.home.index', compact('base_items', 'year', 'schedule_items'));
    }
}
