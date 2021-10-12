import {createRouter, createWebHistory } from 'vue-router';

import IndexPage from '@/components/indexPage.vue';
import Lesson1 from '@/components/lesson1.vue';

let routes = [
    {
        path: "/",
        component: IndexPage,
    },
    {
        path: "/lesson1",
        component: Lesson1,
    },
];

export default createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL),
});