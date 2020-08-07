<?php
 
namespace App\Http\Livewire;
 
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Image;
 
class UploadMultipleImage extends Component
{
    use WithFileUploads;
 
    public $images = [];
 
    public function render()
    {
        return view('livewire.upload-multiple-image');
    }
 
    public function store()
    {
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);
 
        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images','public');
        }
 
        $this->images = json_encode($this->images);
 
        Image::create(['title' => $this->images]);
 
        session()->flash('message', 'Images has been successfully Uploaded.');
 
        return redirect()->to('/upload-multiple-image');
    }
}