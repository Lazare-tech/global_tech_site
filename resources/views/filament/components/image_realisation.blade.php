@if($record->image)
<div style="display:flex; justify-content:center; margin-bottom:20px;">
    <img src="{{ asset('storage/'.$record->image) }}" 
         style="height:250px; width:250px; border-radius:10px; object-fit:cover; border: 2px solid #0d6efd;">
</div>

@else
<div style="text-align:center; margin-bottom:20px;">
    Pas d'image
</div>
@endif