<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Film;

class countFilms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cinema:countFilms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display the number of film in the DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $films = Film::all();
        $nb_films = count($films);

        $this->info("the data base includes $nb_films films");
    }
}
