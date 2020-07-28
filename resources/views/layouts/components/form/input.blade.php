<div class="flex flex-wrap mt-6">
    <label for={{ $name }} class="custom-form-label">
        {{ __($title) }}:@isset($requiredLabel) * @endisset

    </label>

    <input id={{ $name }} type={{ $type ?? 'text' }}
    class="custom-form-input custom-shadow-outline @error($name)  border-red-500 @enderror"
    name={{ $name }}
    value="{{ old($name) }}"
    @isset($autocomplete) autocomplete={{ $name }} @endisset
    @isset($options) @foreach($options as $opt) {{ $opt }} @endforeach @endisset
    />


    @error($name)
        <p class="custom-form-errormsg">
            {{ $message }}
        </p>
    @enderror
</div>
