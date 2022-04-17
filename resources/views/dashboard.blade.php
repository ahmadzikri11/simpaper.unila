<x-app-layout>
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Dashboard</div>
    @endsection
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                General Report
            </h2>
            <a href="" class="ml-auto flex items-center text-theme-26 dark:text-theme-33"> <i data-feather="refresh-ccw"
                    class="w-4 h-4 mr-3"></i> Reload Data </a>
        </div>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-feather="users" class="report-box__icon text-theme-21"></i>
                            <div class="ml-auto">
                                <div class="report-box__indicator bg-theme-26 tooltip cursor-pointer" title="Total">
                                    Total Account
                                    <i data-feather="chevron-right" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $user }}</div>
                        <div class="text-base text-gray-600 mt-1">Total User</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-feather="inbox" class="report-box__icon text-theme-22"></i>
                            <div class="ml-auto">
                                <div class="report-box__indicator bg-theme-22 tooltip cursor-pointer"
                                    title="Total Script"> Total Script <i data-feather="chevron-right"
                                        class="w-4 h-4 ml-0.5"></i> </div>
                            </div>
                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $transaction }}</div>
                        <div class="text-base text-gray-600 mt-1">Submitted Script</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-feather="edit" class="report-box__icon text-theme-23"></i>
                            <div class="ml-auto">
                                <div class="report-box__indicator bg-theme-23 tooltip cursor-pointer"
                                    title="Total Unprosses"> Total Unprosses<i data-feather="chevron-right"
                                        class="w-4 h-4 ml-0.5"></i> </div>
                            </div>
                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $transactionproses }}</div>
                        <div class="text-base text-gray-600 mt-1">Script Unprocessed</div>
                    </div>
                </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                <div class="report-box zoom-in">
                    <div class="box p-5">
                        <div class="flex">
                            <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                            <div class="ml-auto">
                                <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer"
                                    title="Total been Processed"> Total been Processed<i data-feather="chevron-right"
                                        class="w-4 h-4 ml-0.5"></i> </div>
                            </div>
                        </div>
                        <div class="text-3xl font-medium leading-8 mt-6">{{ $transactionaccept }}</div>
                        <div class="text-base text-gray-600 mt-1">Script been processed {{ $transactionproses }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
