export default {
	state: {
		user: null,
	},
	initialize() {
		this.state.user = localStorage.getItem('user_nux')
	},
	set(user) {
		localStorage.setItem('user_nux',user)
		this.initialize()
	},
	remove() {
		localStorage.removeItem('user_nux')
		this.initialize()
	},
}
