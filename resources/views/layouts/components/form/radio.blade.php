<div class="flex flex-wrap mt-6 ml-6">

    <label for={{ $id }} class="custom-radio"> {{ $title }}
        <input id={{ $id }} type="radio"
        class=""
        name={{ $name }}
        value={{ $value }}
        @isset($checked) checked @endisset
        >

        <span></span>
    </label>


</div>
