<template>
  <Head title="Users" />
  <div class="flex justify-between mb-6">
    <div class="flex items-center">
      <h1 class="text-3xl">Users</h1>
      <Link v-if="can.createUser" href="/users/create" class="text-blue-500 text-sm ml-3">New User</Link>
    </div>
    <input v-model="search" type="text" placeholder="Search..." class="border px-2 rounded-lg">
  </div>

  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <tbody class="bg-white divide-y divide-gray-200">
              <tr v-for="user in users.data" :key="user.id">
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div>
                        <Link :href="`/users/${user.id}`" class="text-sm font-medium text-gray-900">{{ user.name }}</Link>
                    </div>
                  </div>
                </td>

                <td v-if="user.can.edit" class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <Link
                    :href="`/users/${user.id}/edit`"
                    class="text-indigo-600 hover:text-indigo-900"
                  >Edit</Link>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div style="margin-top: 1000px">
    <p>The current time is {{ time }}.</p>

    <Link href="/users" class="text-blue-500" preserve-scroll>Refresh</Link>

  </div>

  <!-- Paginator -->
  <Pagination :links="users.meta.links" class="mt-6"/>
</template>

<script setup>
import {ref, watch, defineAsyncComponent, onMounted} from 'vue';
import {Inertia} from '@inertiajs/inertia'
import debounce from 'lodash/debounce';
import throttle from "lodash/throttle";
import {useCurrentUser} from "@/Composables/useCurrentUser"

let Pagination = defineAsyncComponent(()=> {
  return import('@/Shared/Pagination.vue')
})

let props = defineProps({ time: String, users: Object, filters: Object, can: Object });

let search = ref(props.filters.search);

// debounce get triggered after stop typing (here 300ms)
watch(search,debounce(function (value) {
    Inertia.get(
      '/users',
      { search: value },
      {
        preserveState: true,
        replace: true,
      }
    );
  }, 300)
)

onMounted(()=> {
 console.log(useCurrentUser)
})

// Each 500ms trigger it
// watch(search,throttle(function (value) {
//     Inertia.get(
//       '/users',
//       { search: value },
//       {
//         preserveState: true,
//         replace: true,
//       }
//     );
//   }, 500)
// )

// import Layout from "../Shared/Layout";
// export default {
//   // layout: Layout,
//   props: { time: String }
// };
</script>