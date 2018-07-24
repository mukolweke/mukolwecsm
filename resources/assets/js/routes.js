import View_Advisor from './components/admin/advisors/ViewAdvisor'
import Create_Advisor from './components/admin/advisors/CreateFA'
import Edit_Advisor from './components/admin/advisors/EditFA'
import View_Clients from './components/admin/clients/ViewClients'
import View_Leads from './components/admin/leads/ViewLeads'


export const routes = [
    {
        path: '/view_fa',
        component: View_Advisor,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/view_clients',
        component: View_Clients,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/view_leads',
        component: View_Leads,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/admin_dash/create_fa',
        component: Create_Advisor,
        name: 'createAdvisor'
    },
    {
        path: '/admin_dash/edit/:id',
        component: Edit_Advisor,
        name: 'editAdvisor'
    },

];
