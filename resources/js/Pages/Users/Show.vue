<template>
     <Link href="/users" class="text-blue-500 text-sm ml-3">Back</Link>
    <h1 class="text-2xl font-bold"> {{ $page.props.user.name }}</h1>
    <div>{{ $page.props.user.email }}</div>
    <div>Registered: {{ $page.props.user.created_at }}</div>
</template>