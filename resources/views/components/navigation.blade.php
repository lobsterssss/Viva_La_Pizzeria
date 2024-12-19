	<nav class="bg-Italy_red flex justify-between px-4">
		<a class="transition-colors hover:bg-Italy_dark_red" href="./">
            <img class="w-auto h-16" src="{{ asset('images/company_log_new.png') }}" alt="logo Viva La Pizzeria">
		</a>
		<ul class="flex justify-around gap-4">
			<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/menu"><li><p class="text-xl font-bold text-white ">Menu</p></li></a>
			<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/bestelling"><li><p class="text-xl font-bold text-white">Bestellen</p></li></a>
            @if(!auth()->check())
                <a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/login"><li><p class="text-xl font-bold text-white">Login</p></li></a> 
            @else
                <a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/logout"><li><p class="text-xl font-bold text-white">{{ auth()->user()->GB }}</p></li></a>
            @endif
		</ul>
	</nav>
