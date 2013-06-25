<?php 
// афоризмы
$aforizm = array(
array("Достоин тот иметь, кто умеет мужественно... искать.", "Уильям Шекспир"),
array("Счастье можно найти в себе, но для этого нужно сначала найти себя!", "Анатолий Рахматов"),
array("Капля устала искать океан и решила, что его и вовсе нет.", "Би Дорси Орли"),
array("Если ты не будешь искать - другие найдут.", "Роберт Оппенгеймер"),
array("Гораздо легче найти ошибку, нежели истину.", "Гёте Иоганн Вольфганг"),
array("Верьте тем, кто ищет истину; не доверяйте тем, кто нашел ее.", "Жид Андре"),
array("В поисках наибольшего теряют и то, что имеют", "Демокрит"),
array("Найти смысл жизни — это счастье, найти счастье в жизни — это смысл.", "Колечицкий Владимир"),
array("Чем дальше ты заходишь в неизведанные уголки разума, тем труднее найти дорогу обратно.", "Тихонов Александр"),
array("Поиски прекрасного приводят нас к тому же выбору, что и поиски полезного.", "Пуанкаре Анри"),
array("В каждом положении отыщется что-нибудь утешительное, если хорошо поискать.", "Даниель Дефо"),
array("Не ищи приобретений, и все будешь иметь.", "Лао-Цзы"),
array("Ищите и найдете, стучите и отворят вам.", "Иисус Христос"),
array("Иной находит своё сердце не раньше, чем он теряет свою голову.", "Фридрих Ницше"),
array("Кто хочет найти самого себя, тому придётся долго считать себя потерянным.", "Фридрих Ницше"),
array("Иногда полезно отъехать подальше, чтобы разглядеть то, что постоянно находится у тебя перед глазами.", "Леонид Филатов"),
array("Ничто не бывает утеряно окончательно. Просто оно лежит не на своём месте.", "Сузан Меллер"),
array("Никогда не знаешь, где найдёшь, где потеряешь.", "Народная мудрость"),
array("Главное не то, что ты ищешь, а то что ты найдешь.", "Неизвестный автор"),
array("Желание действовать и достигать результата гораздо важнее, чем знание правильного ответа.", "Кеничи Омае"),
array("Страх перед возможностью ошибки не должен отвращать вас от поисков истины.", "Клод Адриан Гельвеций")

);

$a = $aforizm[rand(0, count($aforizm)-1)];
?>


<s>404</s><h1>Ой! Куда я попал?</h1>
<div style="clear:both">Страница, к которой вы обратились, не существует на нашем сайте. Давайте попробуем начать ваш поиск сначала, вернувшись на <a href="/">главную страницу</a>, ведь как говорил классик:</div>
<q><?php echo $a[0]; ?>
<div style="clear:both"></div>
<em>&nbsp;&mdash;&nbsp;<?php echo $a[1]; ?></em>
</q>