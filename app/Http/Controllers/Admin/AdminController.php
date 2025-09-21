<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Contact statistics
        $totalContacts = Contact::count();
        $todayContacts = Contact::whereDate('created_at', today())->count();
        $weekContacts = Contact::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
        $pendingContacts = Contact::whereDate('created_at', '>=', now()->subDays(7))->count();

        // Blog statistics
        $totalBlogs = Blog::count();
        $publishedBlogs = Blog::published()->count();
        $draftBlogs = Blog::draft()->count();
        $todayBlogs = Blog::whereDate('created_at', today())->count();
        $totalViews = Blog::sum('views');
        
        // Daily data for last 30 days
        $dailyData = [];
        for ($i = 29; $i >= 0; $i--) {
            $date = now()->subDays($i);
            $dailyData[] = [
                'label' => $date->format('M j'),
                'count' => Contact::whereDate('created_at', $date->toDateString())->count()
            ];
        }
        
        // Monthly data for last 12 months
        $monthlyData = [];
        for ($i = 11; $i >= 0; $i--) {
            $date = now()->subMonths($i);
            $monthlyData[] = [
                'label' => $date->format('M Y'),
                'count' => Contact::whereYear('created_at', $date->year)
                    ->whereMonth('created_at', $date->month)
                    ->count()
            ];
        }
        
        // Yearly data
        $yearlyData = [];
        $startYear = Contact::min('created_at') ? \Carbon\Carbon::parse(Contact::min('created_at'))->year : now()->year;
        for ($year = $startYear; $year <= now()->year; $year++) {
            $yearlyData[] = [
                'label' => (string)$year,
                'count' => Contact::whereYear('created_at', $year)->count()
            ];
        }
        
        // Subject distribution for pie chart
        $subjectData = Contact::selectRaw('subject, COUNT(*) as count')
            ->groupBy('subject')
            ->orderByDesc('count')
            ->limit(5)
            ->get();
            
        return view('admin.dashboard', compact(
            'totalContacts', 'todayContacts', 'weekContacts',
            'pendingContacts', 'dailyData', 'monthlyData', 'yearlyData', 'subjectData',
            'totalBlogs', 'publishedBlogs', 'draftBlogs', 'todayBlogs', 'totalViews'
        ));
    }

    public function messages()
    {
    $contacts = Contact::latest()->paginate(7);
    return view('admin.messages', compact('contacts'));
    }
}
