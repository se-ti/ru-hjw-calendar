<?php
/**
*
* @package hjw calendar Extension
* @copyright (c) 2019 hjw
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Russian translation made by Serge Titov https://github.com/se-ti/ru-hjw-calendar
*
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

// Common
$lang = array_merge($lang, array(
	'ACP_BIRTHDAY_ON_CALENDAR'				=> 'Показывать дни рождения пользователей ',
	'ACP_CALENDAR_ALL'						=> 'Всех',
	'ACP_CALENDAR_ALLOWED_0'				=> 'Отключено',
	'ACP_CALENDAR_ALLOWED_1'				=> 'Включено',
	'ACP_CALENDAR_ANNIVERSARY'				=> 'Годовщина',
	'ACP_CALENDAR_APPOINTMENT_CREATE'		=> 'Добавить встречу',
	'ACP_CALENDAR_APPOINTMENT_DESCRIPTION'	=> 'Описание',
	'ACP_CALENDAR_APPOINTMENT_LINK'			=> 'Ссылка',
	'ACP_CALENDAR_APPOINTMENT_LIST'			=> 'Список встреч',
	'ACP_CALENDAR_APPOINTMENT_LIST_TEXT'	=> 'Созданные события будут подкрашены в календаре соответствующим цветом.</p> 
												<p>Если у даты события указан год, то оно отобразится только в указанном году. 
												Если год не задан, событие будет показываться в каждом году.</p>
												<p>Если у ежегодного события взведена галочка "годовщина", то у события будет показано число лет, прошедших с его начала.',
	'ACP_CALENDAR_APPOINTMENT_NAME'			=> 'Название',
	'ACP_CALENDAR_BIG'						=> 'Полужирное начертание',
	'ACP_CALENDAR_CHANGE'					=> 'изменить',
	'ACP_CALENDAR_COLOR'					=> 'Цвет текста',
	'ACP_CALENDAR_COLOR_B'					=> 'Цвет фона',
	'ACP_CALENDAR_DATE'						=> 'Дата (Д.М.)',
	'ACP_CALENDAR_DATE_FROM'				=> 'С (Д.М.ГГГГ)',
	'ACP_CALENDAR_DATE_TO'					=> 'До (Д.М.ГГГГ)',
	'ACP_CALENDAR_DISPLAYOPTIONS'			=> 'Отображение',
	'ACP_CALENDAR_EASTER_DAYS'				=> 'Дней после Пасхи',
	'ACP_CALENDAR_ENTRIES'					=> 'Calendar Entries',		    // not used
	'ACP_CALENDAR_EVENT'					=> 'Тип событий',
//	'ACP_CALENDAR_EVENT_CONFIG'				=> 'Настройка типов событий',	// dupicate key
	'ACP_CALENDAR_EVENT_CREATE'				=> 'Добавить тип',              // used twice as title and button caption
	'ACP_CALENDAR_EVENT_SETTINGS'			=> 'Setting Events',		    // not used
	'ACP_CALENDAR_EVENT_SETTINGS_TEXT'		=> 'При создании события список типов будет отсортирован так же, как и на этой странице, 
												а в календаре события будут подкрашены в цвета, соответствующие их типам.',
	'ACP_CALENDAR_EVENTS'					=> 'Создание событий',
	'ACP_FOOTBALL_ON_CALENDAR'				=> 'Показывать футбольные матчи в календаре',
	'ACP_CALENDAR_ON_INDEX_OFF'				=> 'Разрешать пользователю скрывать сводку до конца дня', 
	'ACP_CALENDAR_FOR_GUESTS'				=> 'Показывать календарь гостям ',
	'ACP_CALENDAR_FORUM_SETTINGS'			=> 'Настройки форумов',
	'ACP_CALENDAR_FORUM_SETTINGS_TEXT'		=> 'События могут создаваться только в форумах, подкрашенных зеленым.',
	'ACP_CALENDAR_SETTINGS'					=> 'Настройки',
	'ACP_CALENDAR_INSTRUCTIONS'				=> 'Справка',
	'ACP_CALENDAR_INSTRUCTIONS_TEXT'		=> 'Сводка событий',
	'ACP_CALENDAR_INSTRUCTIONS_TEXT_0'		=> 'Показывать сводку',
	'ACP_CALENDAR_INSTRUCTIONS_TEXT_1'		=> 'События в календаре можно создавать несколькими способами.</p>
												<p>Если администратор добавил хотя бы один тип событий, и в соответствующем форуме включено создание событий, 
												то около формы ввода сообщений появятся необходимые поля.</p>

												<p>Название события показывается в календаре, и потому
												должно быть не слишком длинным. При наведении курсора на название, будет показана тема сообщения, в которой 
												можно указать больше подробностей. Клик в событие перенесет пользователя в соответствующую 
												ветку форума. Заполнение необязательного поля "дата до" дает возможность создавать многодневные события.</p>
												<p>Если тип события позволяет указывать участников, то при просмотре темы (viewtopic.php) пользователи смогут подтвержать или отменять свое присутствие.
												При этом список участников не будет виден ни ботам, ни гостям форума.</p>
												<p>В любом случае пользователь увидит события лишь из тех форумов, на которые у него есть право просмотра.</p>
												Другой способ создать событие – в панели администратора (ACP) добавить его в список праздников, или в список
												встреч – событий со ссылками на другие страницы.',
	'ACP_CALENDAR_LEGEND_DISPLAY'			=> 'Показывать легенду типов событий под календарем',
	'ACP_CALENDAR_NAME'						=> 'Название',
	'ACP_CALENDAR_NOTIFY'					=> 'Уведомлять пользователя о новых или изменившихся событиях',
	'ACP_CALENDAR_NOTIFY_PARTICIPATING'		=> 'Уведомлять пользователя об изменении числа участников',
	'ACP_CALENDAR_NUMBER_OF_WEEKS'			=> 'Число недель',
	'ACP_CALENDAR_NUMBER_PARTICIPATING'		=> 'Показывать в календаре число записавшихся участников',
	'ACP_CALENDAR_ONLY_PARTICIPANT'			=> 'Только участников',
	'ACP_CALENDAR_ONLY_AUTOR'				=> 'Только автора',
	'ACP_CALENDAR_SHOW'						=> 'Показывать в календаре',
	'ACP_CALENDAR_SPECIAL_DAYS'				=> 'Праздники',
	'ACP_CALENDAR_SPECIAL_DAY_CREATE'		=> 'Добавить праздник',
	'ACP_CALENDAR_SPECIAL_DAYS_TEXT'		=> 'Плавающие даты отсчитываются от католического(!) пасхального воскресенья.</p>
												<p>Для праздника перед Пасхой число дней должно быть отрицательным.',
	'ACP_CALENDAR_PARTICIPANT'				=> 'Регистрировать участников',
	'ACP_CALENDAR_PARTICIPANTS_NAME'		=> 'Показывать участников при наведении указателя мыши на событие',
	'ACP_CALENDAR_0'						=> 'Нет',
	'ACP_CALENDAR_1'						=> 'Да',
	'ACP_WEEKBLOCK_TEMPLATE_0'				=> 'Не показывать',
	'ACP_WEEKBLOCK_TEMPLATE_1'				=> 'Над заголовком',
	'ACP_WEEKBLOCK_TEMPLATE_2'				=> 'Над навигацией',
	'ACP_WEEKBLOCK_TEMPLATE_3'				=> 'Над подвалом',
	'ACP_WEEK_NEXT_1'						=> 'В ближайшую неделю',
	'ACP_WEEK_NEXT_2'						=> 'Будущие события',
	'ACP_WEEK_NEXT_3'						=> 'Обе',
	'ACP_CALENDAR_EVENT_CONFIG'				=> 'Типы событий',
	'ACP_CALENDAR_EVENT_LIST'				=> 'Встречи',
	'ACP_CALENDAR_FORUMS_CONFIG'			=> 'Настройка форумов',
	'ACP_CALENDAR_ONLY_FIRST_POST'			=> 'Добавлять события только в первом сообщении темы',
	'ACP_CALENDAR_RESET' 					=> 'Сбросить',
	'ACP_CALENDAR_SEND' 					=> 'Сохранить',
	'ACP_CALENDAR_SPECIAL_DAY'				=> 'Праздники',
	'ACP_CALENDAR_TAB_0'					=> 'Над сообщением',
	'ACP_CALENDAR_TAB_1'					=> 'В закладке под сообщением',
	'ACP_CALENDAR_TAB_TEXT'					=> 'Показывать поля календаря',
	'ACP_CALENDAR_TITLE'					=> 'Календарь',
	'ACP_CALENDAR_TO_DISPLAY'				=> 'показать',
	'ACP_CALENDAR_VERSION'					=> ' Версия ',
	'ACP_CALENDAR_WEEK_DISPLAY'				=> 'Показывать номер недели (корректно работает, только если первый день недели – понедельник)',
	'ACP_CALENDAR_WEEK_START'				=> 'Первый день недели',
));