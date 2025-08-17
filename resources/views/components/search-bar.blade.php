@php $currentLocale = app()->getLocale() @endphp

<form action="{{ route('products', ['locale' => $currentLocale]) }}" method="GET" class="search-bar">
    <input
        type="text"
        name="q"
        placeholder="{{ __('messages.search_input')  }}"
        value="{{ request('q') }}"
        class="search-input rounded-8 border-main"
    >
    <button type="submit" class="search-button rounded-8 border-main">{{__('messages.search_button')}}</button>
</form>
