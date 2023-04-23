import {createRouter, createWebHistory} from 'vue-router';
import UsersIndex from './components/UsersIndex';
import UserDisplay from './components/UserDisplay';
import UserForm from './components/UserForm';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'users',
            path: '/',
            component: UsersIndex,
        },
        {
            name: 'user-form',
            path: '/user/edit/:userId?',
            component: UserForm,
            props: true,
            alias: '/user/add'
        },
        {
            name: 'user-display',
            path: '/user/:userId(\\d+)',
            component: UserDisplay,
            props: true
        },
    ],
});

export default router;
