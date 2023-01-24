<div class="form-group">
    <label for="category_id">Choisir catégorie</label>
    <select name="category_id" id="category_id" class="form-control">
        <option value="">Sélectionner la catégorie</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title_category }}</option>
        @endforeach
    </select>
</div>