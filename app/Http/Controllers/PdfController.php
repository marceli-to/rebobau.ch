<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Facades\Entry;
use App\Services\Pdf\Pdf;

class PdfController extends Controller
{
  protected $headers = [
    'Content-Type: application/pdf',
    'Cache-Control: no-store, no-cache, must-revalidate',
    'Expires: Sun, 01 Jan 2014 00:00:00 GMT',
    'Pragma: no-cache'
  ];

  public function index($id = NULL)
  { 
    $entry = Entry::query()
      ->where('collection', 'references')
      ->where('id', $id)
      ->first();

    $pdf = (new Pdf())->create([
      'data' => $entry,
      'view' => 'reference',
      'name' => 'rebobau_referenz_'.$entry->slug.'.pdf'
    ]);
    return response()->download($pdf['path'], $pdf['name'], $this->headers);
  }
}