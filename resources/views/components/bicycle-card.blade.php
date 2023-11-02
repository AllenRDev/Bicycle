
<div class="flex flex-col bg-slate-400 rounded-lg shadow-lg overflow-hidden w-1/3 mx-auto mb-2">
    <div class="flex-1 bg-white border-black border-2 rounded-md p-6 flex flex-col justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
            <a href="#" class="hover:underline">
            {{ $bicycle->getName() }}
            </a>
            </p>
            <p class="text-xl font-semibold text-gray-900">
                {{ $bicycle->getDescription() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Price: ${{ $bicycle->getPrice() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Color: {{ $bicycle->getColor() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Bike Type: {{ $bicycle->getType() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Wheel Type: {{ $bicycle->getWheels()->getWheelType() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Wheel Size: {{ $bicycle->getWheels()->getSize() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                Bike Size: {{ $bicycle->getSize() }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                {{ $bicycle->getBasket() ? 'Has basket' : 'Does not have basket' }}
            </p>
            <p class="mt-3 text-base text-gray-500">
                {{ $bicycle->getHandBrakes() ? 'Has handbrakes' : 'Does not have handbrakes' }}
            </p>
        </div>
    </div>
</div>
