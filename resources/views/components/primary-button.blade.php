<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary d-grid w-100']) }}>
    {{ $slot }}
</button>
