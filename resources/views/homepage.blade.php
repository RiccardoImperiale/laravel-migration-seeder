<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel Trains</title>

</head>

<body class=" bg-gradient-to-b  h-screen  from-green-600 to-green-400 py-8">
    <h1 class="text-3xl text-green-300 text-center mt-5 uppercase">Available trains </h1>
    <h2 class="text-2xl text-green-400 text-center mb-10">from the day {{ date('Y-m-d') }}</h2>
    <div class="container shadow-lg shadow-green-600 rounded-2xl bg-green-200 py-3 px-8 max-w-4xl mx-auto">
        <ul role="list" class="divide-y divide-green-100">
            @forelse ($trains as $train)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $train->image }}"
                            alt="random image">
                        <div class="min-w-0 flex-auto">
                            <p class="text-2xl font-semibold leading-6 text-gray-900">
                                {{ $train->departure_station }} <span class="text-green-500">to</span>
                                {{ $train->arrival_station }}</p>
                            <p class="mt-2 truncate text-md leading-5 text-gray-500"><span>Date:</span>
                                {{ $train->departure_date }}</p>
                        </div>
                    </div>
                    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                        <div class="flex gap-1">
                            {{-- <span class="text-gray-500">Train Code: </span> --}}
                            <p class="text-md leading-6 text-gray-900">{{ $train->train_code }}</p>
                        </div>
                        <div class="mt-1 flex items-center gap-x-1.5">
                            <div
                                class="flex-none rounded-full  p-1 {{ $train->cancelled ? 'bg-red-500/20' : 'bg-emerald-500/20' }}">
                                <div
                                    class="h-1.5 w-1.5 rounded-full {{ $train->cancelled ? 'bg-red-500' : 'bg-emerald-500' }}">
                                </div>
                            </div>
                            <p class="text-md leading-5 text-gray-500">
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
