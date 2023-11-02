<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Bicycle List</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>

    <?php
        use App\Classes\Wheel;
        use App\Classes\Bicycle;

        $wheel1 = new Wheel('Tube' , '26 inches');
        $wheel2 = new Wheel('Tubeless',  '27.5 inches');

        $bicycles = [];
        $bicycles[] = new Bicycle('Trek', 'A mountain bike', 1000.00, 'Red', 'Mountain', $wheel1, true, 'Medium', false);
        $bicycles[] = new Bicycle('Giant', 'A road bike', 2000.00, 'Blue', 'Road', $wheel2, false, 'Large', false);
        $bicycles[] = new Bicycle('Specialized', 'A hybrid bike', 3000.00, 'Green', 'Hybrid', $wheel1, true, 'Small', true);
        $bicycles[] = new Bicycle('Schwinn', 'A cruiser bike', 4000.00, 'Yellow', 'Cruiser', $wheel2, false, 'Medium', true);
        $bicycles[] = new Bicycle('Cannondale', 'A city bike', 5000.00, 'Orange', 'City', $wheel1, true, 'Large', true);
    ?>

    <body class="antialiased w-[100vw] h-[100vh]">
        <div class="mx-auto bg-gradient-to-r from-indigo-500">
            @foreach ($bicycles as $bicycle)
                <x-bicycle-card :bicycle="$bicycle" />
            @endforeach
        </div>
    </body>
</html>
