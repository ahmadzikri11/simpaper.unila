<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-7">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-1">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <form action="{{ route('update.account', ['id' => $user->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-3">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Nama</label>
                                            <input type="text" value="{{ old('name') ?? $user->name }}" name="name"
                                                id="name"
                                                class=" form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3 ml-5">
                                        <div>
                                            <div class="col-span-6">
                                                <label for="npm"
                                                    class="block text-sm font-medium text-gray-700">NPM</label>
                                                <input type="number" value="{{ old('npm') ?? $user->npm }}" name="npm"
                                                    id="npm"
                                                    class="form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3">
                                        <div>
                                            <div class="col-span-6 mt-5 sm:col-span-3">
                                                <label for="email"
                                                    class="block text-sm font-medium text-gray-700">Alamat
                                                    Email</label>
                                                <input type="email" value="{{ old('email') ?? $user->email }}"
                                                    name="email" id="email"
                                                    class=" form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3  mt-5  ml-5  sm:col-span-2">
                                        <div class="">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomer
                                                Whattsapp</label>
                                            <input type="text" value="{{ old('phone') ?? $user->phone }}" name="phone"
                                                id="phone"
                                                class=" form-control mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-7">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save
                                </button>
                            </div>
                        </div>

                    </form>

                    <a type="button" href="javascript:;" data-toggle="modal" data-target="#delete-modal-preview">
                        <button
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                            Hapus
                            Akun</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- BEGIN: Modal Content -->
    <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white rounded-md">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-feather="x-circle" class="w-16 h-16 text-theme-24 mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Apa Kamu Yakin?</div>
                        <div class="text-gray-600 mt-2">
                            Apakah Kamu yakin menghapus
                            <br>
                            data {{ $user->name }}?.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-dismiss="modal"
                            class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>

                        <a href="{{ route('delete.account', ['id' => $user->id]) }}">
                            <button type="button" class="btn btn-danger bg-red-500 text-white w-24">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
    </div>
    <div class="source-code hidden">
        <button data-target="#copy-delete-modal" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i
                data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
        <div class="overflow-y-auto mt-3 rounded-md">
            <pre id="copy-delete-modal"
                class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-toggle=&quot;modal&quot; data-target=&quot;#delete-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;delete-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body p-0&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;p-5 text-center&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;x-circle&quot; class=&quot;w-16 h-16 text-theme-24 mx-auto mt-3&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;text-3xl mt-5&quot;HTMLCloseTagAre you sure?HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-gray-600 mt-2&quot;HTMLCloseTagDo you really want to delete these records? HTMLOpenTagbrHTMLCloseTagThis process cannot be undone.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;px-5 pb-8 text-center&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-dismiss=&quot;modal&quot; class=&quot;btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1&quot;HTMLCloseTagCancelHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; class=&quot;btn btn-danger w-24&quot;HTMLCloseTagDeleteHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
        </div>
    </div>
    <!-- END: Delete Modal -->

</x-app-layout>
