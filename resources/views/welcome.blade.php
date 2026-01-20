<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioTech | Tu Biblioteca Digital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <nav class="p-6 flex justify-between items-center max-w-6xl mx-auto">
        <h1 class="text-2xl font-bold text-indigo-600">BiblioTech</h1>
        <div class="space-x-4">
            <a href="/login" class="text-sm font-medium hover:text-indigo-600">Ingresar</a>
            <a href="/register" class="bg-indigo-600 text-white px-4 py-2 rounded-lg text-sm shadow-md hover:bg-indigo-700 transition">Registro</a>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto mt-20 text-center px-4">
        <h2 class="text-5xl font-extrabold tracking-tight mb-4">
            Encuentra tu próxima <span class="text-indigo-600">gran historia.</span>
        </h2>
        <p class="text-lg text-slate-500 mb-10">
            Explora miles de libros, documentos y recursos académicos en un solo lugar.
        </p>

        <div class="relative max-w-2xl mx-auto mb-16">
            <input type="text" placeholder="Buscar por título, autor o ISBN..." 
                class="w-full pl-5 pr-12 py-4 rounded-2xl border border-slate-200 shadow-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
            <button class="absolute right-3 top-3 bg-indigo-600 p-2 rounded-xl text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm font-medium">
            <div class="p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-indigo-200 cursor-pointer transition">📚 Ficción</div>
            <div class="p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-indigo-200 cursor-pointer transition">🔬 Ciencia</div>
            <div class="p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-indigo-200 cursor-pointer transition">🏛️ Historia</div>
            <div class="p-4 bg-white rounded-xl shadow-sm border border-slate-100 hover:border-indigo-200 cursor-pointer transition">🎨 Arte</div>
        </div>
    </main>

    <footer class="mt-24 py-8 border-t border-slate-100 text-center text-slate-400 text-xs">
        &copy; {{ date('Y') }} BiblioTech Project. Desarrollado con Laravel.
    </footer>

</body>
</html>