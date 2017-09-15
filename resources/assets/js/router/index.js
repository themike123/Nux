import Vue from 'vue'
import VueRouter from 'vue-router'

import courses from '../views/courses/index.vue'
import create_course from '../components/courses/create.vue'

Vue.use(VueRouter)

const router = new VueRouter({
	mode: 'history',
	routes: [
    { name:'/courses_path', path: '/courses', component: courses },
    { name:'/create_course_path', path: '/courses/create', component: create_course }
	]
})

export default router
