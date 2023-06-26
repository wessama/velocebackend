<label>Color:</label>
<ul class="rn-car-color-filter">
    <li>
        <label>
            <input type="checkbox" name="colors[]" value="silver" @checked(in_array('silver', old('colors', [])))>
            <span class="rn-color-silver"></span>
        </label>
    </li>
    <li>
        <label>
            <input type="checkbox" name="colors[]" value="black" @checked(in_array('black', old('colors', [])))>
            <span class="rn-color-black"></span>
        </label>
    </li>
    <li>
        <label>
            <input type="checkbox" name="colors[]" value="white" @checked(in_array('white', old('colors', [])))>
            <span class="rn-color-white"></span>
        </label>
    </li>
    <li>
        <label>
            <input type="checkbox" name="colors[]" value="red" @checked(in_array('red', old('colors', [])))>
            <span class="rn-color-red"></span>
        </label>
    </li>
</ul>
