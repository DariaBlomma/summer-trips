import {createRouter, createWebHistory } from 'vue-router';

import IndexPage from '@/components/indexPage.vue';
import PersonalPage from '@/components/personalPage.vue';
import Lesson1 from '@/components/lesson1.vue';

let routes = [
    {
        name: "index-page",
        path: "/",
        component: IndexPage,
    },
    {
        name: "lesson1",
        path: "/lesson1",
        component: Lesson1,
    },
    {
        name: "personal-page",
        path: "/personal-page",
        component: PersonalPage,
    },
];

export default createRouter({
    routes,
    history: createWebHistory(process.env.BASE_URL),
});