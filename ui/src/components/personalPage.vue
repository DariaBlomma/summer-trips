<template>
    <div class="personal-page">
        <Header 
            :coinsNumber=1
            class='personal-page__header'
        >
            <template v-slot:left-icon>
                <div class="avatar-wrapper icon real-photo shadowed-pic"></div>
            </template>
            <span class='real-name'>Masha</span>-<span class='hero-name'>Hulk</span>
        </Header>
        <main>
            <div class="timer">
                <div class="timer__title">
                </div>
                <div class="timer__action">
                    Time to win
                </div>
                    <span class='timer__numbers' id="timer__hours">19</span>
                    <span class='timer__numbers timer__dot1'>:</span>
                    <span class='timer__numbers' id="timer__minutes">45</span>
                    <span class='timer__numbers timer__dot2'>:</span>
                    <span class='timer__numbers' id="timer__seconds">12</span>
                    <span class='timer__h-text'>hours</span>
                    <span class='timer__m-text'>minutes</span>
                    <span class='timer__s-text'>seconds</span>
            </div>
            <div class='game-info'>
                <div class='game-info__lessons'>
                    <h3 class='title-3 light'>Lessons</h3>
                    <ol class='game-info__lessons-list'>
                        <li><router-link to="/lesson1">Lesson 1</router-link></li>
                        <li><a href='#'>Lesson 2</a></li>
                        
                    </ol>
                </div>
                <div class='game-info__hws'>
                    <h3 class="title-3 light">Homeworks</h3>
                    <ol class='game-info__hws-list'>
                        <li><a href='#'>Hw 1</a></li>
                        <li><a href='#'>Hw 2</a></li>
                    </ol>
                </div>
                <div class='game-info__additional-tasks'>
                    <h3 class="title-3 light">Additional tasks</h3>
                    <ol class='game-info__add-tasks-list'>
                        <li><a href='#'>Task 1</a></li>
                        <li><a href='#'>Task 2</a></li>
                    </ol>
                </div>
                <div class='points'>
                    <h3 class='title-3 light'>Points</h3>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th class='table__number'>Number</th>
                                <th>Lesson</th>
                                <th>HW</th>
                                <th>Per page</th>
                                <th>Add. tasks</th>
                            </tr>
                        </thead>
                            <tr>
                                <td class='table__number'>1</td>
                                <td class='table__to-count'>1</td>
                                <td class='table__to-count'>1</td>
                                <td class='table__to-count'>1</td>
                                <td class='table__to-count'>1</td>
                            </tr>
                        <tfoot>
                            <tr>
                                <td colspan='4' class='table__total bold'>Total</td>
                                <td class='table__total bold sum'>22</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </main>
    <footer>
    </footer>
    </div>
</template>

<script>
import Header from '@/components/partials/header.vue';

export default {
    name: 'PersonalPage',
    components: {
        Header,
    }
}
</script>