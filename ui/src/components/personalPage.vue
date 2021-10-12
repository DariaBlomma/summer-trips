<template>
    <div class="personal-page-body">
        <Header 
            :coinsNumber=1
            class='personal-page'
        >
            <template v-slot:left-icon>
                <div class="avatar-wrapper icon real-photo shadowed-pic"></div>
            </template>
            <span class='real-name'>Masha</span>-<span class='hero-name'>Hulk</span>
        </Header>
        <main>
            <div class="timer">
                <div class="timer-title">
                </div>
                <div class="timer-action">
                    Time to win
                </div>
                    <span class='timer-numbers' id="timer-hours">19</span>
                    <span class='timer-numbers dot1'>:</span>
                    <span class='timer-numbers' id="timer-minutes">45</span>
                    <span class='timer-numbers dot2'>:</span>
                    <span class='timer-numbers' id="timer-seconds">12</span>
                    <span class='h-text'>hours</span>
                    <span class='m-text'>minutes</span>
                    <span class='s-text'>seconds</span>
            </div>
            <div class='game-info-wrapper'>
                <div class='lessons-wrapper'>
                    <h3 class='title-3 light'>Lessons</h3>
                    <ol class='lessons'>
                        <li><router-link to="/lesson1">Lesson 1</router-link></li>
                        <li><a href='#'>Lesson 2</a></li>
                        
                    </ol>
                </div>
                <div class='hws-wrapper'>
                    <h3 class="title-3 light">Homeworks</h3>
                    <ol class='hws'>
                        <li><a href='#'>Hw 1</a></li>
                        <li><a href='#'>Hw 2</a></li>
                    </ol>
                </div>
                <div class='additional-tasks-wrapper'>
                    <h3 class="title-3 light">Additional tasks</h3>
                    <ol class='add-tasks'>
                        <li><a href='#'>Task 1</a></li>
                        <li><a href='#'>Task 2</a></li>
                    </ol>
                </div>
                <div class='points-wrapper'>
                    <h3 class='title-3 light'>Points</h3>
                    <table class='points'>
                        <thead>
                            <tr>
                                <th class='number'>Number</th>
                                <th>Lesson</th>
                                <th>HW</th>
                                <th>Per page</th>
                                <th>Add. tasks</th>
                            </tr>
                        </thead>
                            <tr>
                                <td class='number'>1</td>
                                <td class='to-count'>1</td>
                                <td class='to-count'>1</td>
                                <td class='to-count'>1</td>
                                <td class='to-count'>1</td>
                            </tr>
                        <tfoot>
                            <tr>
                                <td colspan='4' class='total bold'>Total</td>
                                <td class='total bold sum'>22</td>
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