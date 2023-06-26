@props([
    'assetCategories',
])

<label>Type:</label>
<select name="asset_category">
    <option value="Any" {{ old('asset_category') === 'Any' ? 'selected' : '' }}>Any</option>
    @foreach($assetCategories as $assetCategory)
        <option value="{{ $assetCategory->id }}" {{ old('asset_category') == $assetCategory->id ? 'selected' : '' }}>
            {{ $assetCategory->name }}
        </option>
    @endforeach
</select>
