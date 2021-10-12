<template>
    <div class="index-page-body">
        <div class="popup-wrapper d-none">
            <div class="popup-content">
                <form action='' method='post' class="auth">
                    <input type="text" name="real_name" placeholder="your real name" id="real_name" class="input-form">
                    <label for="password" class="label">Your password is the name of the chosen character</label>
                    <input type="text" name="password" placeholder="your password" id="password" class="input-form">
                    <p class='error-message d-none'>The password is false. Please try again</p>
                    <button type='button' class="submit"><h3 class="title-3">Submit</h3></button>
                </form>
            </div>
        </div>
        <Header 
            :coinsNumber=1
        />
        <main>
            <div class="select-wrapper left">
                <h3 class="title-3">More about</h3>
                <select class="select-character">
                    <option 
                        v-for="item in charactersInfoItems"
                        :key="item.title"
                    >
                    {{item.title}}
                    </option>
                </select>
            </div>

            <div class="characters-info">
                <Characters-info-item
                    v-for="item in charactersInfoItems"
                    :key="item.title"
                    :title="item.title"
                    :text="item.text"
                />
            </div>
        </main>
        <footer>

        </footer>
    </div>
</template>    

<script>
import $ from 'jquery'
import '@/jquery.selectric.min.js';
import Header from '@/components/partials/header.vue';
import CharactersInfoItem from '@/components/charactersInfoItem.vue';

export default {
    name: 'IndexPage',
    components: {
        CharactersInfoItem,
        Header,
    },
    data() {
        return {
            charactersInfoItems: [
                {
                    title: "Thanos",
                    text: "My goal is to destroy half of all life in the universe. Join me and we'll do it together",
                },
                {
                    title: 'Iron Man',
                    text: 'I am one of the strongest in Avengers. Some call me a technical genius. Join me to create a time machine that will save the world!',
                },
                {
                    title: 'Dr. Stephen Strange',
                    text: 'I own the Time Stone and help Avengers to protect the Universe. But we have only one chance out of 14,000,605 possible future outcomes. Join and help me!',
                },
                {
                    title: 'Captain America',
                    text: 'Every person is important when you need to stop Thanos.',
                },
                {
                    title: 'Thor',
                    text: "Thanos killed my brother! I will not forgive that. Join me and we'll defeat him together!",
                },
                {
                    title: 'Star Lord',
                    text: ''
                },
                {
                    title: 'Black Widow',
                    text: 'I have extensive mastery in martial arts, am one of S.H.I.E.L.D.’s most efficient agents.',
                },
                {
                    title: 'Hulk',
                    text: "Unfortunately, I have problems with my green man. But that won't stop me!",
                },
                {
                    title: 'Gamora',
                    text: 'I am a daughter of Thanos, but I will do everything to stop him!',
                },
                {
                    title: 'Spiderman',
                    text: '',
                },
            ],
        }
    },
    mounted() {
        //jquery for select
        $(() => {
            $('select').selectric({
                disableOnMobile: false,
                nativeOnMobile: false
            });
        });
    }
}
</script>