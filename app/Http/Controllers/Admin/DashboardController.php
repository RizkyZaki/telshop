<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\VisitorLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $monthlyVisitors = VisitorLog::selectRaw('MONTH(visited_at) as month, COUNT(*) as total')
            ->whereYear('visited_at', now()->year)
            ->groupBy(DB::raw('MONTH(visited_at)'))
            ->pluck('total', 'month');

        $monthlyData = [];
        for ($i = 1; $i <= 12; $i++) {
            $monthlyData[] = $monthlyVisitors[$i] ?? 0;
        }
        return view('admin.pages.dashboard', [
            'title' => "Ikhtisar",
            'productCount' => Product::count(),
            'categoryCount' => Category::count(),
            'userCount' => User::count(),
            'monthlyData' => $monthlyData,
        ]);
    }
}
