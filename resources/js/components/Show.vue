<template>
	<div class="modal" :class="openmodal">
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">{{ list.name }}</p>
				<button class="delete" aria-label="close" @click="close"></button>
			</header>
			<section class="modal-card-body">
				<div class="field">
					<label class="label">Name</label>
					<div class="control">
						{{ list.name }}
					</div>
				</div>
				<div class="field">
					<label class="label">Phone</label>
					<div class="control">
						{{ list.phone }}
					</div>
				</div>
				<div class="field">
					<label class="label">Email</label>
					<div class="control">
						{{ list.email }}
					</div>
				</div>
			</section>
			<footer class="modal-card-foot">
				<button class="button" @click="close">
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
			}
		},
		methods:{
			close(){
				this.$emit('closeRequest');
			},
		}
	}
</script>