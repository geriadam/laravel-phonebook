<template>
	<div class="modal" :class="openmodal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">{{ list.name }}</p>
				<button class="delete" aria-label="close" @click='close'></button>
			</header>
			<section class="modal-card-body">
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						<input class="input" :class="{ 'is-danger':errors.name }" type="text" placeholder="Name" v-model="list.name">
						<small v-if="errors.name" v-for="(value, key) in errors.name" class="has-text-danger">
							{{ value }}
						</small>
					</div>
				</div>
				<div class="field">
					<label class="label">Phone</label>
					<div class="control">
						<input class="input" :class="{ 'is-danger':errors.phone }" type="number" placeholder="Phone" v-model="list.phone">
							<small v-if="errors.phone" v-for="(value, key) in errors.phone" class="has-text-danger">
							{{ value }}
						</small>
					</div>
				</div>
				<div class="field">
					<label class="label">Email</label>
					<div class="control">
						<input class="input" :class="{ 'is-danger':errors.email }" type="email" placeholder="Email" v-model="list.email">
					</div>
					<small v-if="errors.email" v-for="(value, key) in errors.email" class="has-text-danger">
						{{ value }}
					</small>
				</div>
			</section>
			<footer class="modal-card-foot">
				<button class="button disabled is-success" @click='update'>
					Update Change
				</button>
				<button class="button" @click='close'>
					close
				</button>
			</footer>
		</div>
	</div>
</template>
<script>
	export default{
		props:['openmodal'],
		data(){
			return{
				list:{},
				errors:{}
			}
		},
		methods:{
			close(){
				this.$emit('closeRequest');
			},
			update(){
				axios.patch(`/phonebook/${this.list.id}`, this.$data.list).then((response) => this.close())
				.catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>