<div class="form-group">
    <label for="{{$id}}">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$id}}" aria-describedby="helpId" placeholder="{{$placeholder}}" value="{{$value}}" >
    <small id="helpId" class="text-denger">
        @error('{{$name}}')
            {{$message}}
        @enderror
    </small>
</div>
