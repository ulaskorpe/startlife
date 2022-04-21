<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class add_company extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $input['name'] = $this->ask('company name?');

         $company = new Company();
         $company->name = $input['name'];
         $company->save();

        $this->info('company added');

        return 0;
    }
}
