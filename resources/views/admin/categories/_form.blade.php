<div class="form-group mb-4">
    <label for="">Name:</label>
    <input type="text" name="name" class="form-control" value="{{ $category->name }}">
</div>
<div class="form-group mb-4">
    <label for="">Parent:</label>
    <select name="parent_id" class="form-control">
        <option value="">No Parent</option>
        @foreach($parents as $parent)
        <option value="{{ $parent->id }}" @if($parent->id == $category->parent_id) selected @endif>{{ $parent->name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group mb-4">
    <label for="">Description:</label>
    <textarea name="description" id="" cols="5" rows="5" class="form-control">{{ $category->description}}</textarea>
</div>
<div class="form-group mb-4">
    <label for="">Image:</label>
    <input type="file" name="image" class="form-control">
</div>
<div class="form-group mb-4">
    <label for="">Status:</label>
    <div>
        <label for="">Active</label>
        <input type="radio" name="status" id="" value="active" @if($category->status == 'active') checked @endif>
        <label for="">Inactive</label>
        <input type="radio" name="status" value="inactive" @if($category->status == 'inactive') checked @endif>
    </div>
</div>
<div class="form-group mb-4">
    <button type="submit" class="btn btn-primary form-control mb-2">{{$button_lable}}</button>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary form-control">Index</a>
</div>