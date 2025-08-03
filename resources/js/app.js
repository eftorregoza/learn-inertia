import { createApp, h } from 'vue';
import { createInertiaApp, Head } from '@inertiajs/vue3';

import '../css/app.css';

import { InertiaProgress } from '@inertiajs/progress';

import Layout from './Shared/Layout.vue';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`];
        if(page.default.layout === undefined) {
            page.default.layout = Layout;
        }
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('Head', Head)
            .mount(el)
    },
    title: title => `Learn Inertia - ${title}`
});

InertiaProgress.init({
    color: 'blue',
    showSpinner: true
});