@extends("admin")

@section("userAccounts")

    <div class="flex w-full justify-between mb-4">
      <h1 class="text-3xl mx-1">User Accounts</h1>
    </div>

    @include("partials._search", ['action' => '/dashboard/userAccounts'])
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
          <tr class="bg-blue-700 text-white">
            <th scope="col" class="px-6 py-4 ">
              Type
            </th>
            <th scope="col" class="px-6 py-3">
              Name
            </th>
            <th scope="col" class="px-6 py-3">
              Email
            </th>
            <th scope="col" class="px-6 py-3">
              Role
            </th>
            <th scope="col" class="px-6 py-3">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
@unless(count($residents) == 0)
@foreach($residents->sortByDesc('created_at') as $resident)
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
            {{-- <th
              scope="row"
              class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white
              hover:text-blue-600 hover:underline"
            >asdasd asdasd</th> --}}
            <td class="py-4">{{$resident->userLevel}}</td>
          <td class="py-4">{{$resident->firstName}} {{$resident->lastName}}</td>
          <td class="px-8 py-4">{{$resident->email}}</td>
          <td class="px-8 py-4">{{$resident->userRole}}</td>
          <td class="py-4">
            <a
              href="/dashboard/residents/{{$resident->residentId}}"
              class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
            >
              View Record
            </a>
          </td>
        </tr>
@endforeach
@else
<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
  <th
    scope="row"
    class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
  >
  
</th>
<td class="py-4"></td>
<td class="py-4">No records yet</td>
<td class="px-8 py-4"></td>
<td class="py-4">
  <a
    href="#"
    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
  >
  </a>
</td>
</tr>
@endunless

        </tbody>
      </table>
    </div>
  </section>
  <div class="mt-6 p-4">
    {{$residents->links()}}
</div>

@endsection

{{-- <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 text-center">
  <th
    scope="row"
    class="py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
  >
    #1000000002
  </th>
  <td class="py-4">Joe Black</td>
  <td class="py-4">June 11, 2023</td>
  <td class="px-8 py-4"> <p class="bg-gray-500 rounded-full text-white font-medium py-1.5">For Approval</p></td>
  <td class="py-4">
    <a
      href="#"
      class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
    >
      View Record
    </a>
  </td>
</tr> --}}