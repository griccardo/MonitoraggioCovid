<?= view("home/sections/top_boxes") ?>
<section class="grid grid-cols-4 gap-4 my-6 mx-8 items-start">
    <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 ">
        <h1 class="font-semibold opacity-70 text-2xl mb-3 w-full">Casi totali per provincia</h1>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Belluno</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['BL']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Padova</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['PD']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Rovigo</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['RO']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Treviso</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['TV']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Venezia</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['VE']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Verona</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['VR']['totale_casi'], 0, ',', '.') ?></h2>
        </div>
        <div class="border-b-2 border-slate-200 dark:border-slate-600 pb-3 mt-2">
            <h2 class="font-semibold text-lg">Vicenza</h2>
            <h2 class="font-bold text-2xl text-teal-400"><?= number_format($province['VI']['totale_casi'], 0, ',', '.') ?></h2>
        </div>

    </div>

    <style>
        #scroll-container {
            overflow: hidden;
        }

        #scroll-text {
            width: max-content;

            /*animation properties */
            -moz-transform: translateX(0%);
            -webkit-transform: translateX(0%);
            transform: translateX(0%);
            
            -moz-animation: my-animation 30s linear infinite;
            -webkit-animation: my-animation 30s linear infinite;
            animation: my-animation 30s linear infinite;
        }

        /* for Firefox */
        @-moz-keyframes my-animation {
            from { -moz-transform: translateX(30%); }
            to { -moz-transform: translateX(-100%); }
        }

        /* for Chrome */
        @-webkit-keyframes my-animation {
            from { -webkit-transform: translateX(30%); }
            to { -webkit-transform: translateX(-100%); }
        }

        @keyframes my-animation {
            from {
                -moz-transform: translateX(30%);
                -webkit-transform: translateX(30%);
                transform: translateX(30%);
            }
            to {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

    </style>

    <div class="col-span-3 flex flex-col gap-4">

        <div id="scroll-container" class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4">
            <h1 id="scroll-text" class="font-medium text-2xl mb-2 dark:text-white"> 
                Ricoverati con sintomi <span class="text-teal-400 font-semibold" ><?= number_format($regione['ricoverati_con_sintomi'], 0, ',', '.') ?> </span> -
                Ricoverati in terapia intensiva <span class="text-teal-400 font-semibold" ><?= number_format($regione['terapia_intensiva'], 0, ',', '.') ?> </span> -
                Nuovi ingressi in terapia intensiva <span class="text-teal-400 font-semibold" ><?= number_format($regione['ingressi_terapia_intensiva'], 0, ',', '.') ?> </span> -
                Attualmente ospedalizzati <span class="text-teal-400 font-semibold" ><?= number_format($regione['totale_ospedalizzati'], 0, ',', '.') ?> </span> -
                Attualmente in isolamento domiciliare <span class="text-teal-400 font-semibold" ><?= number_format($regione['isolamento_domiciliare'], 0, ',', '.') ?> </span> -
                Totale positivi <span class="text-teal-400 font-semibold" ><?= number_format($regione['totale_positivi'], 0, ',', '.') ?> </span> -
                Variazione del positivi rispetto a ieri <span class="text-teal-400 font-semibold" ><?= number_format($regione['variazione_totale_positivi'], 0, ',', '.') ?> </span> -
                Nuovi positivi <span class="text-teal-400 font-semibold" ><?= number_format($regione['nuovi_positivi'], 0, ',', '.') ?> </span> -
                Totale dimessi/guariti <span class="text-teal-400 font-semibold" ><?= number_format($regione['dimessi_guariti'], 0, ',', '.') ?> </span> -
                Totale deceduti <span class="text-teal-400 font-semibold" ><?= number_format($regione['deceduti'], 0, ',', '.') ?> </span> -
                Totale casi confermati <span class="text-teal-400 font-semibold" ><?= number_format($regione['totale_casi'], 0, ',', '.') ?> </span> -
                Totale temponi <span class="text-teal-400 font-semibold" ><?= number_format($regione['tamponi'], 0, ',', '.') ?></span>
            </h1>
        </div>
        <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 ">
            <h1 id="chart_title" class="font-semibold opacity-70 text-2xl mb-3 dark:text-white">Attualmente positivi</h1>
            <div class="w-full text-black" id="chart"></div>
            <style>
                tspan, title {
                    color: white !important;
                }
            </style>
            <script>
                var options = {
                    chart: {
                        type: 'area'
                    },
                    theme: {
                        monochrome: {
                            enabled: true,
                            color: '#43D4BF',
                            shadeTo: 'light',
                            shadeIntensity: 0.65
                        }
                    },
                    series: [{
                        name: 'sales',
                        data: [30,40,35,50,49,60,70,91,125]
                    }],
                    xaxis: {
                        categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999],
                        labels: {
                            style: {
                                colors: ['#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF','#43D4BF'],
                            }
                        }
                    }
                }

                var chart = new ApexCharts(document.querySelector("#chart"), options);

                chart.render();
            </script>
        </div>
    </div>
    
</section>