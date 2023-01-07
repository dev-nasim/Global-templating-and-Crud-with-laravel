import Dashboard from '../views/DashboardComponent'
import Users from '../views/Users/UserList'

const routes = [
    {
        name : 'admin.dashboard',
        path : '/admin/dashboard',
        meta : {dataUrl : 'api/dashboard'},
        component :Dashboard
    },
    {
        name : 'admin.users',
        path : '/admin/users',
        meta: { dataUrl: 'api/users' },
        component :Users
    },
];

export default routes;
