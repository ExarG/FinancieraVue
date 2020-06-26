import AllClients from './components/AllClients.vue';
import AddClient from './components/AddClient.vue';
import EditClient from './components/EditClient.vue';

import AllLoans from './components/AllLoans.vue';
import AddLoan from './components/AddLoan.vue';
import EditLoan from './components/EditLoan.vue';

import AllPays from './components/AllPays.vue';
import AddPay from './components/AddPay.vue';
import EditPay from './components/EditPay.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllClients
    },
    {
        name: 'add',
        path: '/add',
        component: AddClient
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditClient
    },
    {
        name: 'loans',
        path: '/loans',
        component: AllLoans
    },
    {
        name: 'addl',
        path: '/addl',
        component: AddLoan
    },
    {
        name: 'editl',
        path: '/editl/:id',
        component: EditLoan
    },
    {
        name: 'pays',
        path: '/pays',
        component: AllPays
    },
    {
        name: 'addp',
        path: '/addp',
        component: AddPay
    },
    {
        name: 'editp',
        path: '/editp/:id',
        component: EditPay
    }
];