<template>
<div class='lesson1'>
    <Header 
        :coinsNumber=5
        class="lesson1__header"
    >
        <span>Lesson <span class='lesson-number'>1</span></span>
    </Header>
    <main class='lesson1__main-content'>   
        <div class="hero-speech">
            Hello, friend! With your help we will win and help the Universe. 
            First of all, let me tell you about the current situation.
            Be attentive, I will check your understanding.
        </div>
        <!-- <img class='hero-img hero-img_big' src='@/images/heroes/strange_big.jpg'> -->
        <!-- <img class='hero-img hero-img_big' src='@/images/heroes/thor_big.jpg'> -->
        <img class='hero-img hero-img_big' src='@/images/heroes/hulk_big.jpg'>
        <div class='audio-file'>
            <p>Thor, Hulk</p>
            <audio controls>
                <source src='@/media/lesson1/Lesson1.Thor-Hulk.mp3' type='audio/mpeg'>
            </audio>
            <p>Thor</p>
            <audio controls>
                <source src='@/media/lesson1/Lesson1.Thor-only.mp3' type='audio/mpeg'>
            </audio>
            <p>Hulk</p>
            <audio controls>
                <source src='@/media/lesson1/Lesson1.Hulk-only.mp3' type='audio/mpeg'>
            </audio>
            <p>Thanos</p>
            <audio controls>
                <source src='@/media/lesson1/Lesson1.Thanos.mp3' type='audio/mpeg'>
            </audio>
        </div>
        <div class='prep-ex_common'>
            <h3 class='title-3 light centered'>Words to prepare</h3>
            <ul class='prep-ex_common__list_en'>
                <li>eliminate</li>
                <li>including</li>
                <li>survive</li>
                <li>acquire</li>
                <li>living beings</li>
                <li>stabilize</li>
                <li>overpopulation</li>
                <li>universe</li>
                <li>carry</li>
                <li>lieutenants</li>
                <li class='if if-thor'>wound</li>
                <li class='if if-thor'>betray</li>
                <li class='if if-thanos'>humanism</li>
                <li class='if if-thanos'>destruction</li>
            </ul>
            <ul class='prep-ex_common__list_ru'>
                <li>уничтожить</li>
                <li>включая</li>
                <li>выживать</li>
                <li>приобретать</li>
                <li>живые существа</li>
                <li>стабилизировать</li>
                <li>перенаселение</li>
                <li>вселенная</li>
                <li>носить</li>
                <li>лейтенанты</li>
                <li class='if if-thor'>ранить</li>
                <li class='if if-thor'>предавать</li>
                <li class='if if-thanos'>гуманизм</li>
                <li class='if if-thanos'>разрушение</li>
            </ul>
        </div>
        <div class='prep-ex_proper'>
            <ul class='prep-ex_proper__list'>
                <li class='has-descr' title='Камни бесконечности'>Infinity Stones</li>
                <li class='has-descr' title='Мстители'>the Avengers</li>
                <li class='has-descr' title='Камень Силы'>the Power Stone</li>
                <li>Xandar</li>
                <li>Asgard</li>
                <li class='has-descr' title='Космический Камень'>the Space Stone</li>
                <li>Tesseract</li>                                                                         
                <li class='has-descr if if-thanos' title='Земля'>Earth</li>
            </ul>
            <img src='@/images/lessons/infinity_stones.jpg' class='infinity-stones'>
        </div>
        <div class='audio-test_first-part'>
            <h3 class='title-3 light centered'>Part 1</h3>
            <p class='audio-test__question if if-thanos'><b>1.  bring balance</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>принести баланс\равновесие</p>
            <p class='if if-thanos'><input type='radio' name='one'>избавиться от баланса</p>
            <p class='if if-thanos'><input type='radio' name='one'>принести избавление для</p>

            <p class='audio-test__question if if-thor if-hulk'><b>1.  in order to</b></p>
            <p class='audio-test__question if if-thanos'><b>2.  in order to</b></p>
            <p><input type='radio' name='one'>привести в порядок</p>
            <p><input type='radio' name='one'>для того, чтобы</p>
            <p><input type='radio' name='one'>однако</p>

            <p class='audio-test__question if if-thor if-hulk'><b>2. has brought him into conflict with </b></p>
            <p class='audio-test__question if if-thanos'><b>3. has brought me into conflict with </b></p>
            <p><input type='radio' name='two'>втянуло его в конфликт с</p>
            <p><input type='radio' name='two'>принесло ему поддержку среди</p>
            <p><input type='radio' name='two'>втянуло их в конфликт с</p>

            <p class='audio-test__question if if-thanos'><b>4. won’t let them see</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>не заставит их понять</p>
            <p class='if if-thanos'><input type='radio' name='one'>не поможет им увидеть</p>
            <p class='if if-thanos'><input type='radio' name='one'>не позволит им увидеть\понять</p>
            <p class='audio-test__question if if-thanos'><b>5. existing problem</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>существующая проблема</p>
            <p class='if if-thanos'><input type='radio' name='one'>назревшая проблема</p>
            <p class='if if-thanos'><input type='radio' name='one'>появившаяся проблема</p>
            <p class='audio-test__question if if-thanos'><b>6. keeping to the idea</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>обдумывание идеи</p>
            <p class='if if-thanos'><input type='radio' name='one'>создание идеологии</p>
            <p class='if if-thanos'><input type='radio' name='one'>придерживание идеи\взглядов</p>
            <p class='audio-test__question if if-thanos'><b>7. won’t do any good</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>принесет много хорошего</p>
            <p class='if if-thanos'><input type='radio' name='one'>не принесет ничего плохого</p>
            <p class='if if-thanos'><input type='radio' name='one'>не принесет ничего хорошего</p>
            <p class='audio-test__question if if-thanos'><b>8.  in the current situation</b></p>
            <p class='if if-thanos'><input type='radio' name='one'>в текущей \настоящей ситуации</p>
            <p class='if if-thanos'><input type='radio' name='one'>в похожей ситуации</p>
            <p class='if if-thanos'><input type='radio' name='one'>в такой сложной ситуаци</p>

            <p class='audio-test__question'><b>3. save the world </b></p>
            <p><input type='radio' name='three'>поработить мир</p>
            <p><input type='radio' name='three'>сохранить вселенную</p>
            <p><input type='radio' name='three'>спасти мир</p>
            <p class='audio-test__question'><b>4.  join forces to defeat</b></p>
            <p><input type='radio' name='four'>собраться с силами чтобы атаковать</p>
            <p><input type='radio' name='four'>объединить усилия чтобы сотрудничать</p>
            <p><input type='radio' name='four'>объединить силы чтобы победить</p>

            <p class='audio-test__question if if-thor if-hulk'><b>5.  By now</b></p>
            <p class='audio-test__question if if-thanos'><b>9.  By now</b></p>
            <p><input type='radio' name='five'>в настоящее время, прямо сейчас</p>
            <p><input type='radio' name='five'>к (до) настоящему моменту</p>
            <p><input type='radio' name='five'>после настоящего момента</p>

            <p class='audio-test__question if if-thor if-hulk'><b>6. is going to  extract ….  from</b></p>
            <p class='audio-test__question if if-thanos'><b>10. am going to  extract ….  from</b></p>
            <p><input type='radio' name='six'>уже извлек … из</p>
            <p><input type='radio' name='six'>извлекает … из</p>
            <p><input type='radio' name='six'>собирается извлечь .. из</p>

            <p class='audio-test__question if if-thor'><b>7. Unfortunately</b></p>
            <p class='if if-thor'><input type='radio' name='seven'>к счастью</p>
            <p class='if if-thor'><input type='radio' name='seven'>к сожалению</p>
            <p class='if if-thor'><input type='radio' name='seven'>какая удача, что</p>
            <p class='audio-test__question if if-thor'><b>8. do much harm to </b></p>
            <p class='if if-thor'><input type='radio' name='eight'>принести много пользы кому-либо</p>
            <p class='if if-thor'><input type='radio' name='eight'>навредить лишь немного кому-либо</p>
            <p class='if if-thor'><input type='radio' name='eight'>сильно навредить кому-либо</p>
            <p class='audio-test__question if if-thor'><b>9.  it is in my power to</b></p>
            <p class='if if-thor'><input type='radio' name='nine'>в <b>его</b> власти</p>
            <p class='if if-thor'><input type='radio' name='nine'>это - наша власть, мощь</p>
            <p class='if if-thor'><input type='radio' name='nine'>в <b>моей</b> власти, возможностях</p>
            <p class='audio-test__question if if-thor'><b>10.  gather strength </b></p>
            <p class='if if-thor'><input type='radio' name='ten'>собрать войска</p>
            <p class='if if-thor'><input type='radio' name='ten'>собраться с мыслями</p>
            <p class='if if-thor'><input type='radio' name='ten'>собраться с силами</p>
            <p class='audio-test__question if if-hulk'><b>7. are seriously wounded</b></p>
            <p class='if if-hulk'><input type='radio' name='seven'>убиты</p>
            <p class='if if-hulk'><input type='radio' name='seven'>серьезно ранены</p>
            <p class='if if-hulk'><input type='radio' name='seven'>взяты в плен</p>
            <p class='audio-test__question if if-hulk'><b>8. have little hope</b></p>
            <p class='if if-hulk'><input type='radio' name='seven'>иметь мало надежды на</p>
            <p class='if if-hulk'><input type='radio' name='seven'>очень ждать чего-либо</p>
            <p class='if if-hulk'><input type='radio' name='seven'>иметь мало возможностей для чего-либо</p>
            <p class='audio-test__question if if-hulk'><b>9. is not aware of</b></p>
            <p class='if if-hulk'><input type='radio' name='seven'>не осознает\понимает\представляет, что</p>
            <p class='if if-hulk'><input type='radio' name='seven'>не знает о</p>
            <p class='if if-hulk'><input type='radio' name='seven'>знает о</p>
            <p class='audio-test__question if if-hulk'><b>10. What we need is</b></p>
            <p class='if if-hulk'><input type='radio' name='seven'>что нам нужно, так это</p>
            <p class='if if-hulk'><input type='radio' name='seven'>что мы хотим, так это</p>
            <p class='if if-hulk'><input type='radio' name='seven'>что мы планируем, так это</p>
        </div>
        <div class='audio-test_second-part'>
            <h3 class='title-3 light centered'>Part 2</h3>
            <p class='audio-test__question if if-thor if-hulk'><b>1. What is the goal of Thanos?</b></p>
            <p class='audio-test__question if if-thanos'><b>1. What is my goal?</b></p>
            <p><input type='radio' name='one'>save all living beings</p>
            <p><input type='radio' name='one'>completely destroy the universe, end its existence</p>
            <p><input type='radio' name='one'>stabilize the situation in the world</p>

            <p class='audio-test__question'><b>2. How are the Avengers connected with Thanos?</b></p>
            <p><input type='radio' name='two'>both of them are trying to save the world</p>
            <p><input type='radio' name='two'>Thanos was a member of the Avengers group</p>
            <p><input type='radio' name='two'>Thanos has joined forces to defeat the Avengers</p>

            <p class='audio-test__question if if-thor if-hulk'><b>3. How many Infinity Stones does Thanos have now?</b></p>
            <p class='audio-test__question if if-thanos'><b>3. How many Infinity Stones do I have now?</b></p>
            <p><input type='radio' name='three'>1</p>
            <p><input type='radio' name='three'>2</p>
            <p><input type='radio' name='three'>0</p>

            <p class='audio-test__question'><b>4. What was the last event in the current situation?</b></p>
            <p><input type='radio' name='four'>Thanos has extracted the Space Stone</p>
            <p><input type='radio' name='four'>The Avengers have intercepted the spaceship carrying Thanos and his lieutenants</p>
            <p><input type='radio' name='four'>Thanos attacked the survived Asgardians</p>

            <p class='audio-test__question if if-thor'><b>5. What is my plan?</b></p>
            <p class='if if-thor'><input type='radio' name='five'>wait for the right moment and kill Thanos</p>
            <p class='if if-thor'><input type='radio' name='five'>pretend that I wound Loki for his betrayal so that he could kill Thanos at the right moment</p>
            <p class='if if-thor'><input type='radio' name='five'>do as much harm as I can to Thanos right now</p>
            
            <p class='audio-test__question if if-hulk'><b>5. What is my advantage?</b></p>
            <p class='if if-hulk'><input type='radio' name='six'>Thanos doesn’t know about me</p>
            <p class='if if-hulk'><input type='radio' name='six'>I am not so seriously wounded</p>
            <p class='if if-hulk'><input type='radio' name='six'>All the crew of the ship believe in my help and that gives me strength</p>
            
            <p class='audio-test__question if if-thanos'><b>5. How well do you understand my motive? Choose the right answer?</b></p>
            <p class='if if-thanos'><input type='radio' name='six'>I want to eliminate living beings 
                because their thinking is very close-minded.
                They are not worth being alive.</p>
            <p class='if if-thanos'><input type='radio' name='six'>I want to be the strongest and rule the new universe</p>
            <p class='if if-thanos'><input type='radio' name='six'>I want to help the universe and it doesn’t matter to me if some people will have to  die</p>
        </div>
        <div class='first-decision'>
            <!-- здесь будет задание на понимание речи героев фильма -->
            <h3 class='title-3 light centered if if-thanos '>What shall I do next?</h3>
            <ul class='first-decision__variants-list if if-thanos'>
                <li>Search all and everywhere for the Tesseract</li>
                <li>Torture Thor</li>
                <li>Use Thor's tortures to frighten Loki and make him say what I need
                    <ul class='first-decision__sub-variants-list'>
                        <li>Leave Loki alive and take him as a guide on the Earth</li>
                        <li>Kill Loki</li>
                    </ul>
                </li>
                <li>Other variant <input class='input' type='text' placeholder='write your variant'></li>
            </ul>
            <h3 class='title-3 light centered if if-thor'>What is going on?</h3>
            <button class='btn'><h3 class='title-3 light'>Choose</h3></button>
        </div>
        <div class='video-result'>
            <video controls>
                <!-- Thanos - it's frightening - assume you have a preference-->
                <!-- <source src='@/media/lesson1/Lesson1.Thor-tortures.Part-1.mp4' type='video/mp4'> -->
                
                <!-- Loki - kill away -  the sun will shine on us again-->
                <source src='@/media/lesson1/Lesson1.Thor-tortures.Part-2.mp4' type='video/mp4'>
                <!-- <source src='@/media/lesson1/Lesson1.Hulk-fight.Full-version.mp4' type='video/mp4'> -->
                <!-- <source src='@/media/lesson1/Lesson1.Hulk-fight.Short-version.mp4' type='video/mp4'> --> -->
                <!-- <source src='@/media/lesson1/Lesson1.Thanos-killing-Loki.mp4' type='video/mp4'> -->
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