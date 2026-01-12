<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crystal by Miraacles — Welcome</title>
    <!-- Tailwind CDN for quick styling (replace with your asset pipeline in production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        /* subtle glass card */
        .glass { background: rgba(255,255,255,0.06); backdrop-filter: blur(6px); -webkit-backdrop-filter: blur(6px); border: 1px solid rgba(255,255,255,0.08); }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-purple-50 via-white to-rose-50 text-gray-900">
    <header class="max-w-7xl mx-auto px-6 py-8 flex items-center justify-between">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-indigo-400 to-pink-400 flex items-center justify-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 3-6 3-3 6-3-6-6-3 6-3z"/></svg>
            </div>
            <div>
                <div class="text-xl font-semibold">Crystal by Miraacles</div>
                <div class="text-sm text-gray-500">Authentic crystals & gemstones — curated with care</div>
            </div>
        </div>
        <nav class="hidden md:flex gap-6 items-center text-sm">
            <a href="#about" class="hover:text-indigo-600">About</a>
            <a href="#shop" class="hover:text-indigo-600">Shop</a>
            <a href="#collections" class="hover:text-indigo-600">Collections</a>
            <a href="#contact" class="text-white bg-indigo-600 px-4 py-2 rounded-md shadow-sm hover:bg-indigo-700">Contact</a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6">
        <!-- Hero -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center mt-6">
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl leading-tight">Find clarity, balance and beauty — <span class="text-indigo-600">Crystal by Miraacles</span></h1>
                <p class="text-gray-600 max-w-xl">We hand-select crystals and gemstones from trusted sources. Each piece is chosen for its natural beauty and energetic properties — perfect for gifting, collecting, or mindful practice.</p>
                <div class="flex gap-4">
                    <a href="#shop" class="inline-flex items-center gap-2 bg-indigo-600 text-white px-5 py-3 rounded-lg shadow hover:bg-indigo-700">Shop Bestsellers</a>
                    <a href="#collections" class="inline-flex items-center gap-2 border border-indigo-600 text-indigo-600 px-5 py-3 rounded-lg hover:bg-indigo-50">Explore Collections</a>
                </div>
                <div class="flex items-center gap-4 text-sm text-gray-500 mt-4">
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 3-6 3-3 6-3-6-6-3 6-3z"/></svg>
                        <span>Hand-picked gems</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 6 6 3-6 3-3 6-3-6-6-3 6-3z"/></svg>
                        <span>Ethically sourced</span>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="rounded-2xl overflow-hidden shadow-2xl glass p-6">
                    <img src="https://images.unsplash.com/photo-1504274066651-8d31a536b11a?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder" alt="crystals" class="w-full h-72 object-cover rounded-lg mb-4">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="bg-white/60 p-3 rounded-lg">
                            <h3 class="text-sm font-semibold">Amethyst Cluster</h3>
                            <p class="text-xs text-gray-600">Clarity & calm — 150 g</p>
                        </div>
                        <div class="bg-white/60 p-3 rounded-lg">
                            <h3 class="text-sm font-semibold">Rose Quartz</h3>
                            <p class="text-xs text-gray-600">Love & compassion — polished palm stone</p>
                        </div>
                    </div>
                </div>
                <div class="absolute -right-6 -bottom-6 w-36 h-36 rounded-full bg-gradient-to-br from-pink-200 to-indigo-200 opacity-80 blur-3xl"></div>
            </div>
        </section>

        <!-- About -->
        <section id="about" class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="col-span-2 glass rounded-2xl p-8">
                <h2 class="text-2xl mb-3">About Crystal by Miraacles</h2>
                <p class="text-gray-600">Born from a love of natural beauty, Crystal by Miraacles curates a selection of high-quality crystals and gemstones. We focus on ethical sourcing, thoughtful presentation, and clear product information so you can choose the right piece for your space or practice.</p>
                <ul class="mt-4 space-y-2 text-sm text-gray-600">
                    <li>• Authentic, traceable sourcing</li>
                    <li>• Each piece cleansed & photographed individually</li>
                    <li>• Local shipping & international fulfillment available</li>
                </ul>
            </div>

            <aside class="glass rounded-2xl p-6 flex flex-col justify-between">
                <div>
                    <h3 class="text-lg font-medium">Why crystals?</h3>
                    <p class="text-sm text-gray-600 mt-2">Crystals are treasured for their beauty and for the symbolic or energetic qualities people assign to them. Whether you're a collector, a maker, or someone curious about mindful tools — we have a selection to inspire you.</p>
                </div>
                <div class="mt-4">
                    <a href="#shop" class="block text-center text-sm font-medium bg-pink-500 text-white px-4 py-2 rounded">Start shopping</a>
                </div>
            </aside>
        </section>

        <!-- Shop Grid (blade-friendly) -->
        <section id="shop" class="mt-12">
            <h2 class="text-2xl mb-6">Popular & Featured</h2>

            <!-- If you pass a $products array from controller, it will render them. Otherwise the placeholder items show. -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @if(isset($products) && count($products) > 0)
                    @foreach($products as $product)
                        <article class="glass rounded-lg p-4 flex flex-col">
                            <img src="{{ $product->image ?? 'https://images.unsplash.com/photo-1504274066651-8d31a536b11a?q=80&w=800&auto=format&fit=crop&ixlib=rb-4.0.3&s=placeholder' }}" alt="{{ $product->name }}" class="w-full h-40 object-cover rounded-md mb-3">
                            <h3 class="text-sm font-semibold">{{ $product->name }}</h3>
                            <p class="text-xs text-gray-500 flex-1">{{ \Illuminate\Support\Str::limit($product->description ?? '', 80) }}</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div class="text-sm font-semibold">₹{{ number_format($product->price, 2) }}</div>
                                <a href="{{ route('product.show', $product->id) }}" class="text-xs text-indigo-600">View</a>
                            </div>
                        </article>
                    @endforeach
                @else
                    @foreach(range(1,8) as $i)
                        <div class="glass rounded-lg p-4">
                            <div class="h-40 w-full bg-white/70 rounded-md mb-3 flex items-center justify-center text-gray-400">Image</div>
                            <h3 class="text-sm font-semibold">{{ ['Amethyst Cluster','Rose Quartz Palm','Citrine Point','Black Tourmaline'][($i-1) % 4] }}</h3>
                            <p class="text-xs text-gray-500">Hand-picked, cleansed & ready to ship.</p>
                            <div class="mt-3 flex items-center justify-between">
                                <div class="text-sm font-semibold">₹{{ [1200,650,900,700][($i-1) % 4] }}</div>
                                <a href="#" class="text-xs text-indigo-600">View</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>

        <!-- Collections -->
        <section id="collections" class="mt-12">
            <h2 class="text-2xl mb-6">Curated Collections</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="glass rounded-2xl p-6 flex items-center gap-4">
                    <div class="w-20 h-20 rounded-lg bg-gradient-to-br from-rose-200 to-indigo-200 flex items-center justify-center">🫧</div>
                    <div>
                        <h3 class="font-semibold">Love & Harmony</h3>
                        <p class="text-sm text-gray-600">Rose Quartz, Rhodonite & supportive crystals to open the heart.</p>
                    </div>
                </div>
                <div class="glass rounded-2xl p-6 flex items-center gap-4">
                    <div class="w-20 h-20 rounded-lg bg-gradient-to-br from-amber-200 to-green-200 flex items-center justify-center">✨</div>
                    <div>
                        <h3 class="font-semibold">Energy & Focus</h3>
                        <p class="text-sm text-gray-600">Citrine, Clear Quartz and grounding points to charge your workspace.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact / Footer -->
        <footer id="contact" class="mt-16 mb-12 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="col-span-2 glass rounded-2xl p-6">
                <h3 class="text-lg font-semibold">Get in touch</h3>
                <p class="text-sm text-gray-600 mt-2">Questions about a product, custom orders, or wholesale requests? Send us a message and we’ll reply within 24–48 hours.</p>
                <form class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-3" method="POST" action="#">
                    @csrf
                    <input name="name" placeholder="Your name" class="p-3 rounded border border-gray-200" />
                    <input name="email" placeholder="Email" class="p-3 rounded border border-gray-200" />
                    <textarea name="message" placeholder="Message" class="p-3 rounded border border-gray-200 md:col-span-2"></textarea>
                    <button class="md:col-span-2 bg-indigo-600 text-white px-4 py-2 rounded">Send Message</button>
                </form>
            </div>
            <div class="glass rounded-2xl p-6">
                <h4 class="font-semibold">Studio Info</h4>
                <p class="text-sm text-gray-600 mt-2">Crystal by Miraacles<br>Handpicked Gems<br>Packaging + Care</p>
                <div class="mt-4 text-sm text-gray-500">Follow us on social for new drops.</div>
            </div>
        </footer>
    </main>

    <script>
        // small enhancement: smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(a=>{
            a.addEventListener('click', e=>{
                e.preventDefault();
                document.querySelector(a.getAttribute('href')).scrollIntoView({behavior:'smooth'});
            })
        })
    </script>
</body>
</html>
