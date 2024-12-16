<?php

namespace App\Filament\Pages;

use App\Models\Guest;
use Filament\Pages\Page;
use App\Models\GuestBook;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home'; // Ikon menu navigasi

    protected static string $view = 'filament.pages.dashboard';

    public $guestCount;
    public $visitCount;
    public $ProcessingVisitsCount;

    public function mount()
    {
        $user = Auth::user();
        $this->guestCount = Guest::count(); // Hitung jumlah tamu
        $this->visitCount = GuestBook::count(); // Hitung jumlah kunjungan

         // Debugging Query
         \Log::info('Query SQL:', ['query' => GuestBook::where('status', 'processing')->toSql()]);
         \Log::info('Hasil Count:', ['count' => GuestBook::where('status', 'processing')->count()]);
 

        $this->ProcessingVisitsCount = GuestBook::where('status', 'processing')->count(); // Hitung kunjungan yang sedang diproses
    }
}
