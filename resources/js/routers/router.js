import table from '../views/table.vue';
import form from '../views/form.vue';
import iframes from '../views/iframes.vue';
import edit from '../views/edit.vue';
import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'table',
        component: table
    },

    {
        path: '/novo-cadastro',
        name: 'form',
        component: form
    },

    {
        path: '/editar-cadastro/?musica=:musica',
        name: 'edit',
        component: edit
    },

    {
        path: '/recomendacoes',
        name: 'iframes',
        component: iframes
    },
];

const router = new createRouter({
    history: createWebHistory(),
    routes
});

export default router;