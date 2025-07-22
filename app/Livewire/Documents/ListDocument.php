<?php

namespace App\Livewire\Documents;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class ListDocument extends Component
{

         use WithPagination;
    public $key;
    public function render()
    {

         $Query = Document::query();
        if(!is_null($this->key)){
            $Query->where('topic', 'like', '%'.$this->key.'%');
        }
         $Query->orderBy('created_at', 'desc');
        $documents = $Query->paginate(30);
        $total = Document::count();
      
        return view('livewire.documents.list-document', compact('total', 'documents'));
    }


       public function delete($id)
    {
        $cat = Document::find($id);
        if ($cat) {
            $cat->delete();
            session()->flash('info', 'Document supprimé avec succès');
        }
    }

    public function filtrer()
    {
        //reset page
        $this->resetPage();
    }
}
