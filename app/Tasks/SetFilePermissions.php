<?php
namespace App\Tasks;

class SetFilePermissions
{
  public function __invoke()
  {
    // Set path to /vendor/statamic/cms/src/Fieldtypes/Terms.php
    $path = base_path('vendor/statamic/cms/src/Fieldtypes/Terms.php');

    // Set permissions to 644
    $permissions = 0644;

    // Set the permission to the file
    chmod($path, $permissions);

  }
}