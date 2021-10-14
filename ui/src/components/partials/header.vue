<template>
    <header 
        class="header"
        :class="className"
    >
        <slot name="left-icon">
            <div class="coins-wrapper">
                <img class="coin-img icon" src="@/images/coin.png">
                <span class="page-coins-number">{{coinsNumber}}</span>
                <span class="page-coins-text">on this page</span> 
            </div>
        </slot>
        <h1 class="main-title">
            <slot><span class='trip-name'>Avengers </span> <span class="trip-year">2021</span></slot>
        </h1>
        <router-link 
            class="avatar-wrapper icon" 
            :to="{name: 'personal-page'}"
        />
    </header>
</template>

<script>
export default {
    name: 'Header',
    props: {
        coinsNumber:{
            type: Number,
            required: true,
            default: 1,
        },
        className: {
            type: String,
            required: false,
        }
    },
}
</script>