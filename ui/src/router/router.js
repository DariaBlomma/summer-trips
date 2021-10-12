import {createRouter, createWebHistory } from 'vue-router';

import IndexPage from '@/components/indexPage.vue';
import PersonalPage from '@/components/personalPage.vue';
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
    {
        path: "/personal-page",
        component: PersonalPage,
    },
];

export default createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL),
});