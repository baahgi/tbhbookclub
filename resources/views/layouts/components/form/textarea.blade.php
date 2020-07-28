<div class="flex flex-wrap mt-6">
    <label for={{ $name }} class="custom-form-label">
        {{ __($title) }}:@isset($requiredLabel) * @endisset
    </label>

    <textarea
        name={{ $name }}
        id={{ $name }}
        cols="30"
        rows="10"
        class="custom-form-input @error($name)  border-red-500 @enderror"
        value="{{ old($name) }}"
        @isset($options) @foreach($options as $opt) {{ $opt }} @endforeach @endisset
        >
        {{ __(old($name)) }}
    </textarea>

    @error($name)
        <p class="custom-form-errormsg">
            {{ $message }}
        </p>
    @enderror
</div>


