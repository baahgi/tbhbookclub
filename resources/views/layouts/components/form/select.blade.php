<div class="flex flex-wrap mt-6">
    <label for={{ $name }} class="custom-form-label">
        {{ __($title) }}:
    </label>

    <select id={{ $name }}  name={{ $name }} class="custom-form-input @error($name)  border-red-500 @enderror">
        @isset($items)
            @foreach ($items as $key => $month)
                <option value="{{ $key }}">{{ $month }}</option>
            @endforeach
        @endisset
    </select>


    @error($name)
        <p class="custom-form-errormsg">
            {{ $message }}
        </p>
    @enderror
</div>
