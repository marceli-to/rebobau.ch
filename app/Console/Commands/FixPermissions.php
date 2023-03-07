<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;

class FixPermissions extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'fix:permissions';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Fixes file permissions';

  /**
   * Execute the console command.
   *
   * @return int
   */
  public function handle()
  {
    $path = base_path('vendor/statamic/cms/src/Fieldtypes/Terms.php');
    $permissions = 0644;
    chmod($path, $permissions);
  }
}
