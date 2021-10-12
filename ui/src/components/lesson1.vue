<template>
<div class='lesson1-body'>
    <Header :coinsNumber=1>
        Lesson 1
    </Header>
    <!-- <header class='lesson1-header'>
        <h1 class='main-title'></h1>
        <div class="avatar-wrapper icon"></div>
    </header> -->
    <main class='lesson1'>   
        <div class="hero-speech">
            Hello, friend! With your help we will win and help the Universe. 
            First of all, let me tell you about the current situation.
            Be attentive, I will check your understanding.
        </div>
        <!-- <img class='hero-big' src='images/strange_big.jpg'> -->
        <!-- <img class='hero-big' src='images/thor_big.jpg'> -->
        <img class='hero-big' src='images/hulk_big.jpg'>
        <div class='audio-file'>
            <p>Thor, Hulk</p>
            <audio controls>
                <source src='media/Lesson 1. Thor Hulk.mp3' type='audio/mpeg'>
            </audio>
            <p>Thor</p>
            <audio controls>
                <source src='media/Lesson 1. Thor only.mp3' type='audio/mpeg'>
            </audio>
            <p>Hulk</p>
            <audio controls>
                <source src='media/Lesson 1. Hulk only.mp3' type='audio/mpeg'>
            </audio>
            <p>Thanos</p>
            <audio controls>
                <source src='media/Lesson 1. Thanos.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='prep-ex'>Words to help</div>
        <div class='audio-test'>Test</div>
        <div class='first-decision'>First decision</div>
        <div class='video-result'>
            <video controls>
                <!-- <source src='media/Lesson1. Thor tortures. Part 1.mp4' type='video/mp4'> -->
                <!-- <source src='media/Lesson1. Thor tortures. Part 2.mp4' type='video/mp4'> -->
                <!-- <source src='media/Lesson 1. Hulk fight. Full version.mp4' type='video/mp4'>
                <source src='media/Lesson 1. Hulk fight. Short version.mp4' type='video/mp4'> -->
                <source src='media/Lesson 1. Thanos killing Loki.mp4' type='video/mp4'>
            </video>
        </div>
    </main>
</div>
</template>

<script>
import Header from '@/components/partials/header.vue';

export default {
    name: 'Lesson1',
    components: {
        Header,
    },
}
</script>