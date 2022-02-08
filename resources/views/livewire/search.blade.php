<div class="search-bar-top" >
    
    <input wire:model="search" name="search" class="input search-input col-md-6" list="mylist" type="text" placeholder="Search products..."/>
    
    
    @if(!empty($query))
    <datalist id="mylist">
        @foreach($data as $d)
            
                <option value="{{ $d->title }}">{{ $d->title }}</option>
        @endforeach
    </datalist>
  
        
    
    @endif
</div>