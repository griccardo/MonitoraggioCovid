<section class="grid grid-cols-4 gap-4 my-6 mx-8">
    <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 cursor-pointer hover:opacity-70">
        <h1 class="font-semibold opacity-70 text-2xl mb-2 w-full">Attualmete positivi</h1>
        <h2 class="font-bold text-5xl text-teal-400"><?= number_format($regione['totale_positivi'], 0, ',', '.') ?></h2>
        <p class="font-medium text-lg">rispetto a ieri <?= number_format($regione['variazione_totale_positivi'], 0, ',', '.') ?></p>
    </div>
    <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 cursor-pointer hover:opacity-70">
        <h1 class="font-semibold opacity-70 text-2xl mb-2 w-full">Attualmete ospedalizzati</h1>
        <h2 class="font-bold text-5xl text-teal-400"><?= number_format($regione['totale_ospedalizzati'], 0, ',', '.') ?></h2>
        <p class="font-medium text-lg">di questi, <?= number_format($regione['terapia_intensiva'], 0, ',', '.') ?> in terapia intensiva</p>
    </div>
    <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 cursor-pointer hover:opacity-70">
        <h1 class="font-semibold opacity-70 text-2xl mb-2 w-full">Casi totali</h1>
        <h2 class="font-bold text-5xl text-teal-400"><?= number_format($regione['totale_casi'], 0, ',', '.') ?></h2>
        <p class="font-medium text-lg">deceduti <?= number_format($regione['deceduti'], 0, ',', '.') ?></p>
    </div>
    <div class="bg-white dark:bg-slate-800 dark:text-white rounded-xl p-4 cursor-pointer hover:opacity-70">
        <h1 class="font-semibold opacity-70 text-2xl mb-2 w-full">Tamponi totali</h1>
        <h2 class="font-bold text-5xl text-teal-400"><?= number_format($regione['tamponi'], 0, ',', '.') ?></h2>
        <p class="font-medium text-lg">molecolari <?= number_format($regione['tamponi_test_molecolare']/$regione['tamponi']*100, 0, ',', '.') ?>%, rapidi <?= number_format($regione['tamponi_test_antigenico_rapido']/$regione['tamponi']*100, 0, ',', '.') ?>%</p>
    </div>
</section>