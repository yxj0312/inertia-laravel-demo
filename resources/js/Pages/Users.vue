<template>
  <Head title="Users" />
  <h1 class="text-3xl">Users</h1>

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
                      <div class="text-sm font-medium text-gray-900">{{ user.name }}</div>
                    </div>
                  </div>
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a
                    :href="`/users/${user.id}/edit`"
                    class="text-indigo-600 hover:text-indigo-900"
                  >Edit</a>
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
  <div class="mt-6">
    <Component
      :is="link.url ? 'Link' : 'Span'"
      v-for="link in users.links"
      :href="link.url"
      v-html="link.label"
      class="px-1"
      :class="link.url ? '' : 'text-gray-500'"
    />
  </div>
</template>

<script setup>
defineProps({ time: String, users: Object });
// import Layout from "../Shared/Layout";
// export default {
//   // layout: Layout,
//   props: { time: String }
// };
</script>