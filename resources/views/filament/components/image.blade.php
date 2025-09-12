@php
    // Définir le nom de la relation d’images associées si fourni
    $assocImages = $assocImages ?? null; // tableau ou collection
@endphp

{{-- Image principale --}}
@if($record && $record->image)
<div style="display:flex; justify-content:center; margin-bottom:20px;">
    <img src="{{ asset('storage/'.$record->image) }}" 
         style="height:250px; width:250px; border-radius:10px; object-fit:cover; border: 2px solid #0d6efd;">
</div>
@else
<div style="text-align:center; margin-bottom:20px;">
    Pas d'image principale
</div>
@endif

{{-- Images associées --}}
@if($assocImages && $assocImages->count() > 0)
<div class="flex flex-wrap gap-2">
    @foreach ($assocImages as $img)
        <img 
            src="{{ asset('storage/' . $img->image) }}" 
            alt="Image associée" 
            class="w-24 h-24 object-cover rounded-md border"
        >
    @endforeach
</div>
@elseif($assocImages)
<div style="text-align:center; margin-top:10px;">
    Pas d'images associées
</div>
@endif
