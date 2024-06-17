$(document).ready(function() {
    // Проверяем, есть ли в localStorage информация об открытом меню
    var buttonListId = localStorage.getItem('openedMenu');
    if (buttonListId) {
        // Если есть, то показываем меню
        $('#' + buttonListId).removeClass('hidden');
    }

    $('a').click(function() {
        buttonListId = $(this).attr('id').replace('mainButton', 'buttonList');
        $('#' + buttonListId).toggleClass('hidden');

        // Сохраняем информацию об открытом меню в localStorage
        localStorage.setItem('openedMenu', buttonListId);
    });
});