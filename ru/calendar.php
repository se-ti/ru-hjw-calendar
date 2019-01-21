<?php
/**
*
* @package hjw calendar Extension
* @copyright (c) 2019 hjw
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Russian translation made by Serge Titov https://github.com/se-ti/ru-hjw-calendar
*/

/**
* DO NOT CHANGE
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Bot settings

$lang = array_merge($lang, array(
	'BIRTHDAY'					=> 'День рождения',
	'CALENDAR'					=> 'Календарь',
	'CALENDAR_ASK'				=> 'Вы придете?',
	'CALENDAR_CANCELED'			=> 'Отменить событие',
	'CALENDAR_COMMENTS'			=> 'Комментарий',
	'CALENDAR_DATE'				=> 'Записался',
	'CALENDAR_DATE_FORM'		=> 'j M Y (D)',               		// fix main_listener line 875. See correct conversion at line 375
	'CALENDAR_ENTER'			=> 'Ответить', 
	'CALENDAR_ENTRY'			=> 'Событие', 
	'CALENDAR_EVENT'			=> 'Тип',
	'CALENDAR_EVENT_NAME'		=> 'Название',
	'CALENDAR_EVERY_WEEKDAY'	=> 'каждый',
	'CALENDAR_FROM'				=> 'С',
	'CALENDAR_GROUP'			=> 'Вас будет (1, если придете только вы)',
	'CALENDAR_MB'				=> 'Возможно',
	'CALENDAR_NO'				=> 'Нет',
	'CALENDAR_NO_ITEMS'			=> 'пока никто не зарегистрировался',
	'CALENDAR_NUMBER'			=> 'Нас будет',
	'CALENDAR_PART'				=> 'Придет',
	'CALENDAR_RESET'			=> 'Сбросить',
	'CALENDAR_REPEAT'			=> 'Повторять событие',
	'CALENDAR_REPEAT_DAYS_1'	=> 'Повторять каждый',
	'CALENDAR_REPEAT_DAYS_2'	=> ' день', 
	'CALENDAR_REPEAT_MONTH_1'	=> 'В тот же день, каждый',
	'CALENDAR_REPEAT_MONTH_2'	=> 'месяц',
	'CALENDAR_SEND'				=> 'Сохранить',
	'CALENDAR_TITLE'			=> 'Календарь',
	'CALENDAR_T_OFF'			=> 'Скрыть на сегодня ',
	'CALENDAR_T_ON'				=> 'Показать события',
	'CALENDAR_TO'				=> 'До',
	'CALENDAR_UPCOMING_DATES'	=> 'Ближайшие события', 
	'CALENDAR_USERS'			=> 'Имя',
	'CALENDAR_WEEKLY_OVERVIEW'	=> 'На этой неделе', 
	'CALENDAR_YES'				=> 'Да',
	'PARTICIPANTS_LIST'			=> 'Участники', 
	'VIEWING_CALENDAR'			=> 'Просматривает календарь',
));