@props(['icon' => null, 'label' => '', 'route' => null])
@php $currentLocale = app()->getLocale() @endphp

<a href="{{ route($route, ['locale' => $currentLocale]) }}"
   class="sidebar-button {{ Route::currentRouteName() === $route ? 'sidebar-btn-active' : '' }}">
	{!! $icon !!}
	<p>{{ __('messages.' . $label) }}</p>
</a>
