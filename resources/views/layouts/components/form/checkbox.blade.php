<div class="flex flex-wrap mt-6">
    <label for={{ $name }} class="mb-2 custom-form-label">
        {{ __($title) }}:
    </label>


    <label for="occEmp" class="block py-1">
        <input id="occEmp" type="radio"
        class=""
        name="occupation" value="employee" value="{{ old('occupation') }}">
        {{ __(' Employee') }}
    </label>


    @error($name)
        <p class="custom-form-errormsg">
            {{ $message }}
        </p>
    @enderror
</div>
