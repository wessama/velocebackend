<label>Passengers:</label>
<select name="passengers">
    <option value="Any" {{ old('passengers') === 'Any' ? 'selected' : '' }}>Any</option>
    <option value="2" {{ old('passengers') === '2' ? 'selected' : '' }}>2</option>
    <option value="3" {{ old('passengers') === '3' ? 'selected' : '' }}>3</option>
    <option value="4" {{ old('passengers') === '4' ? 'selected' : '' }}>4</option>
    <option value="5" {{ old('passengers') === '5' ? 'selected' : '' }}>5</option>
</select>
