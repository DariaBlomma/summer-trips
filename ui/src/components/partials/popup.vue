<template>
    <div class="popup d-none">
        <div class="popup__content">
            <form action='' method='post' class="auth">
                <input 
                    type="text" 
                    name="real_name" 
                    placeholder="your real name" 
                    id="real_name" 
                    class="input">
                <label for="password" class="label">
                    Your password is the name of the chosen character
                </label>
                <input 
                    type="text" 
                    name="password" 
                    placeholder="your password" 
                    id="password" 
                    class="input"
                >
                <p class='error-message d-none'>
                    The password is false. Please try again
                </p>
                <button 
                    type='button' 
                    class="submit"
                >
                    <h3 class="title-3">Submit</h3>
                </button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Popup',
    }
</script>