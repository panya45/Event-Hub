<x-admin-layout>
    <!-- component -->
    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-white capitalize lg:text-4xl">All Events</h1>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
                @foreach ($events as $event)
                    <div class="lg:flex bg-orange-400 rounded-md">
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64"
                            src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">

                        <div class="flex flex-col justify-between py-6 lg:mx-6">
                            <a href="{{ route ('eventShow', $event->id) }}"
                                class="text-xl font-semibold text-gray-800 hover:underline ">
                                {{ $event->title }}
                            </a>

                            <span class="text-sm text-black bg-indigo-400 rounded-md p-2 ">{{ $event->province->name}}</span>
                            <span class="text-sm text-black  rounded-md p-2 ">On: {{ $event->start_date}}</span>
                            <span class="flex flex-wrap space-x-2"></span>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $events->links() }}
        </div>
    </section>
</x-admin-layout>
