<template>
    <div 
        :class="convertTitle"
        class="characters-info__item o-none"
    >
        <h2 class="secondary-title">{{title}} </h2>
        <p class="characters-info_text">{{text}}</p>
        <button 
            class="choose-character" 
            data-name="item.title">
            <h3 class="title-3">Choose</h3>
        </button>
    </div>
</template>

<script>
export default {
    name: 'charactersInfoItem',
    props: ['title', 'text', 'className'],
    computed: {
        // вычисляем уникальный класс на основе имени персонажа
        convertTitle() {
            const reg = /([.?\s*])(.)/g;
            return `${this.title.trim().toLowerCase().replace(reg, this.replacer)}-info`;
        }
    },
    methods: {
        // преобразует имя из Iron Man в iron-man
        replacer(match, g1, g2) {
            g1 = '-';
            return `${g1}${g2.trim().toLowerCase()}`;
        }
    }
}
</script>