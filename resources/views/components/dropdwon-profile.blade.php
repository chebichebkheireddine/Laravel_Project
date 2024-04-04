 <!--  Category -->
 <x-dropdown>
     <x-slot name="trigger">
         <a href="/" class="text-xs font-bold uppercase">Welcom back {{ auth()->user()->name }}</a>
     </x-slot>

     <a href="/admin/posts/create"> New post </a>


 </x-dropdown>
