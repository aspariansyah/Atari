<x-filament::page>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Card Jumlah Tamu -->
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700">Jumlah Tamu</h3>
            <p class="text-3xl font-bold text-blue-500">{{ $guestCount }}</p>
        </div>

        <!-- Card Jumlah Kunjungan -->
        <div class="bg-white shadow rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-700">Jumlah Kunjungan</h3>
            <p class="text-3xl font-bold text-green-500">{{ $visitCount }}</p>
        </div>

        <div class="bg-white shadow rounded-lg p-4">
            <h3 class="text-lg font-semibold">Kunjungan Diproses</h3>
            <p class="text-2xl">{{ $ProcessingVisitsCount }}</p>
        </div>
    </div>
</x-filament::page>
