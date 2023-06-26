<label>Sort by:</label>
<select name="sort">
    <option value="default" {{ old('sort') === 'default' ? 'selected' : '' }}>Default</option>
    <option value="low-to-high" {{ old('sort') === 'low-to-high' ? 'selected' : '' }}>Price: High to Low</option>
    <option value="high-to-low" {{ old('sort') === 'high-to-low' ? 'selected' : '' }}>Price: Low to High</option>
    <option value="asc" {{ old('sort') === 'asc' ? 'selected' : '' }}>Name: A to Z</option>
    <option value="desc" {{ old('sort') === 'desc' ? 'selected' : '' }}>Name: Z to A</option>
</select>

