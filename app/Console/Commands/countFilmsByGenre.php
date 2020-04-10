<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Film;
use App\Genre;

class countFilmsByGenre extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cinema:countFilmsByGenre';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ask for a genre name and display films by genre';

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
        $name = $this->ask('Type a Genre name');
        $genre = Genre::where('nom', $name)->first();
        if (empty($genre))
        {
            $this->error("this genre does not exists");
            exit();
        }
        $nb_films = count($genre->films);


        $this->info("the database includes $nb_films films for genre ".$name);
    }
}
