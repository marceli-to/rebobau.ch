<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Statamic\Facades\Collection;
use Statamic\Facades\Entry;

class PdfController extends Controller
{
  public function index()
  {
    // $references = Collection::find('references');
    // $references->queryEntries()->get();
 
    $entries = Entry::query()
      ->where('collection', 'references')
      ->where('id', 'bdfd8532-8ce1-412e-83b7-4390813b27cb')
      ->first();

    dd($entries);

  }
}