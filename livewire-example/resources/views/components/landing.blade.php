<?php

use Livewire\Component;
use App\Models\Item;

new class extends Component
{
    public string $name;

    public string $description;

    public function saveItem(): void
    {
        // Save to database
        Item::create([
           'name' => $this->name,
           'description' => $this->description
        ]);

        // Reset State Variables
        $this->reset(['name', 'description']);
    }

    // Pass Database Values to Blade Template
    public function with(): array
    {
        return [
            'items' => Item::all()
        ];
    }
};
?>

<div>
    <x-slot:title>Livewire Example</x-slot:title>

    <main class="container">
        <h1>Livewire Example</h1>

        <!-- Item Form -->
        <form wire:submit="saveItem">
            <input type="text" wire:model="name">

            <input type="text" wire:model="description">

            <button type="submit">Create Item</button>
        </form>

        <h3>Items</h3>

        <!-- Item List -->
        @foreach($items as $item)
            <h4>{{$item->id}}</h4>
            <p><b>Name:</b> {{$item->name}}</p>
            <p><b>Description:</b> {{$item->description}}</p>
        @endforeach
    </main>
</div>
