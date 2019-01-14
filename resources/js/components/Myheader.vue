<template>
	<nav class="navbar" role="navigation" aria-label="main navigation">
		<div class="navbar-brand">
			<a class="navbar-brand" href="#">
				Phonebook
			</a>
			<div class="navbar-menu is-active">
				<router-link to="/home" class="navbar-item">Home</router-link>
				<router-link to="/about" class="navbar-item">About</router-link>
			</div>
			<button class="button navbar-burger">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</nav>
</template>