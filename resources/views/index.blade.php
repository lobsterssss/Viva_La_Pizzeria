<x-head>
    @section('content')
    <div class="container mx-auto p-4">
        <!-- Top Banner -->
        <div class="mb-6">
            <img class="rounded-lg w-full" src="{{ asset('images/banner_home_page.png') }}" alt="Pizza Banner">
        </div>
    
        <!-- Content Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Family Image -->
            <div class="rounded-lg overflow-hidden">
                <img class="w-full h-auto object-cover" src="{{ asset('images/front-view-family-eating-pizza-outdoors_23-2149931033.png') }}" alt="Family Eating Pizza">
            </div>
    
            <!-- Advertisement Image -->
            <div class="rounded-lg overflow-hidden">
                <img class="w-full h-auto object-cover" src="{{ asset('images/small_ad1.png') }}" alt="Pizza Advertisement">
            </div>
        </div>
    </div>
    @endsection


</x-head>
