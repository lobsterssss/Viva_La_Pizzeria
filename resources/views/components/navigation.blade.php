	<nav class="bg-Italy_red flex justify-between px-4">
		<a class="transition-colors hover:bg-Italy_dark_red" href="./">
            <img class="w-auto h-16" src="{{ asset('images/company_log_new.png') }}" alt="logo Viva La Pizzeria">
		</a>
		<ul class="flex justify-around gap-4">
			<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/menu"><li><p class="text-xl font-bold text-white ">Menu</p></li></a>
			<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/bestellen"><li><p class="text-xl font-bold text-white">Bestellen</p></li></a>
            @if(!auth()->check())
                <a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/login"><li><p class="text-xl font-bold text-white">Login</p></li></a> 
            @else
						<li class="relative flex items-center p-2 transition-colors hover:bg-Italy_dark_red dropdown">
							<a href="#" class="dropbtn"><p class="text-xl font-bold text-white">{{ auth()->user()->GB }}</p></a>
							<ul class="dropdown-content bg-Italy_red top-full right-0 z-10 absolute hidden">
								<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/bestelling_geschiedenis"><li><p class="text-xl font-bold text-white">Bestelling geschiedenis</p></li></a>
								<a class="flex items-center p-2 transition-colors hover:bg-Italy_dark_red" href="/logout"><li><p class="text-xl font-bold text-white">logout</p></li></a>
							</ul>
						</li>
					</ul>
				
				<script>
					document.querySelectorAll('.dropdown').forEach(dropdown => {
						const button = dropdown.querySelector('.dropbtn');
						const content = dropdown.querySelector('.dropdown-content');
						button.addEventListener('click', (e) => {
							e.preventDefault();
							content.style.display = content.style.display === 'block' ? 'none' : 'block';
						});
				
						// Optionally, close dropdown if clicking outside
						window.addEventListener('click', (e) => {
							if (!dropdown.contains(e.target)) {
								content.style.display = 'none';
							}
						});
					});
				</script>
            @endif
		</ul>
	</nav>
