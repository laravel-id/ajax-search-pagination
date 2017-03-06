<template>
	<form @submit.prevent="search" :action="url">
		<div class="col-md-11">
			<input v-model.trim="keyword" type="text" class="form-control" :placeholder="placeholder">
		</div>

		<div class="col-md-1">
			<button type="submit" class="btn btn-primary">{{ label }}</button>
		</div>
	</form>
</template>

<script>
	export default {
		props: {
			url: String,
			placeholder: String,
			label: String
		},

		data() {
			return {
				keyword: ''
			}
		},

		methods: {

			search() {
				this.$emit('search', this.keyword);
			}

		}
	}
</script>