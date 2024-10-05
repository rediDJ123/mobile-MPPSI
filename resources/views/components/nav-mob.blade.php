<a {{ $attributes }}
 class="{{ $active ? 'text-[#05445E]' : 'text-gray-300 hover:text-[#D4F1F4] hover:bg-gray-700'}} block rounded-md px-3 py-2 text-sm font-medium" 
style="{{ $active ? 'background-color: #ECF4F8;' : '' }}" 
aria-current="{{ $active ? 'page' : false}}">{{ $slot }}</a>

 