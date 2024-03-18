<template>
    <AppLayout title="Posts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Posts
            </h2>
        </template>

        <div class="py-12">
            <Container>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>All posts</h1>
                    <div class="mt-5">
                        <ul>
                            <li v-for="post in posts" :key="post.id">
                                {{ post.title }}
                            </li>
                        </ul>
                    </div>
                </div>
            </Container>
        </div>
    </AppLayout>
</template>

<script setup>
import Container from '@/Components/Container.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

// defineProps({
//     posts: Array
// })
defineProps(['posts'])
</script>
