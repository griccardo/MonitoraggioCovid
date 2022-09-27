<nav class="w-full px-10 py-6 bg-white dark:bg-slate-800 flex items-center">
    <img alt="icon" src="img/veneto.png" class="w-10 pt-2 mr-4">
    <h1 class="font-bold text-3xl dark:text-white">Monitoraggio Covid-19 Veneto</h1>
    <div id="toggle_dark" class="bg-slate-200 dark:bg-slate-700 rounded-2xl p-2 pointer w-10 h-10 ml-auto flex justify-center items-center cursor-pointer"><i class="fa-solid text-slate-800 fa-moon block dark:hidden"></i> <i class="fa-solid text-white fa-sun hidden dark:block"></i></div>
    <script>
        document.documentElement.classList.add('dark');
        document.getElementById('toggle_dark').addEventListener("click", function(){
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        });
    </script>

</nav>