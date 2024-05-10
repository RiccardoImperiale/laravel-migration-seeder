<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel Trains</title>

</head>

<body class="antialiased py-8">
    <div class="container max-w-xl mx-auto">
        <h1 class="text-xl">Available Trains:</h1>
        <ul role="list" class="divide-y divide-gray-100">
            @forelse ($trains as $train)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://picsum.photos/120/120"
                            alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">
                                {{ $train->departure_station . ' to ' . $train->arrival_station }}</p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $train->departure_date }}</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">{{ $train->train_code }}</p>
                        <div class="mt-1 flex items-center gap-x-1.5">
                            <div
                                class="flex-none rounded-full  p-1 {{ $train->cancelled ? 'bg-red-500/20' : 'bg-emerald-500/20' }}">
                                <div
                                    class="h-1.5 w-1.5 rounded-full {{ $train->cancelled ? 'bg-red-500' : 'bg-emerald-500' }}">
                                </div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">
                                {{ $train->cancelled ? 'Cancelled' : 'Available' }}
                            </p>
                        </div>
                    </div>
                </li>
            @empty
                <li>
                    <p>Sorry, no trains available</p>
                </li>
            @endforelse
        </ul>
    </div>
</body>

</html>
