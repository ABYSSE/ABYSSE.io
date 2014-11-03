<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class AbysseInstallCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'abysse:install';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Start ABYSSE.io installation.';

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
	public function fire()
	{
        $this->info('');
        $this->confirm('Welcome in ABYSSE.io installer. Press enter to start the installation.', true);
	}

}
