<?php
/**
*
* @package Support Toolkit - Database Cleaner Russian language Pthelovod
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BOARD_DISABLE_REASON'			=> 'Конференция в настоящее время отключена в связи с профилактикой Базы Данных. Пожалуйста, попробуйте зайти попозже!',
	'BOARD_DISABLE_SUCCESS'			=> 'Конференция временно отключена!',

	'COLUMNS'						=> 'Поля',
	'CONFIG_SETTINGS'				=> 'Установки конфигурации',
	'CONFIG_UPDATE_SUCCESS'			=> 'Установки конфигурации успешно обновлены!',
	'CONTINUE'						=> 'Продолжить',

	'DATABASE_CLEANER'				=> 'Проверка изменений в Базе Данных',
	'DATABASE_CLEANER_EXTRA'		=> 'Обнаружены дополнительные элементы, добавленные при модификацях,  <strong>Все отвмеченные элементы будут удалены. Если вы уверены в необходимости их оставить - снимите метки с тех, которые необходимо оставить </strong>.',
	'DATABASE_CLEANER_MISSING'		=> 'Любые поля на красном фоне должны быть добавлены. Они должны быть в стандартной конфигурации форума и их отсутствие невозможно. Их необходимо восстановить. <strong>Если оставить или установить отметки в найденных полях на красной фоне, то выбранные поля будут добавлены</strong>.',
	'DATABASE_CLEANER_SUCCESS'		=> 'Инструмент Проверки Базы Данных успешно завершил работу!<br /><br />При возникших проблеммах в работе форума восстановитесь из резервной копии вашей Базы Данных.',
	'DATABASE_CLEANER_WARNING'		=> 'Этот инструмент поставляется БЕЗ ГАРАНТИЙ! Пользователь инструмента должен быть уверен, что имеет резервную копию всей базы данных для возможности восстановления в случае сбоя!<br /><br />Перед продолжением убедитесь в наличии резервной копии базы данных! Внимание! Дополнительные таблицы и поля в Базе Данных от установленных вами модов при неаккуратном и невнимательном использовании данного инструмента могут быть уничтожены!',
	'DATABASE_CLEANER_WELCOME'		=> 'Добро пожаловать в инструмент Проверки Базы Данных!<br /><br />Этот инструмент разработан для проверки дополнительных полей, записей и таблиц, не включённых в стандартную установку phpBB3, а так-же для добавления или восстановления повреждённых элементов базы данных при необходимости.<br /><br />Когда будете готовы, нажмите кнопку Продолжить для старта инструмента Проверки Базы Данных (учтите, что конференция будет недоступна до окончания работы инструмента).',
	'DATABASE_COLUMNS_SUCCESS'		=> 'Поля базы данных успешно обновлены!',
	'DATABASE_TABLES'				=> 'Таблицы базы данных',
	'DATABASE_TABLES_SUCCESS'		=> 'Таблицы базы данных успешно обновлены!',
	'DATABASE_ROLE_DATA_SUCCESS'	=> 'Возвращение стандартных настроек ролей phpBB успешно!',
	'DATABASE_ROLES_SUCCESS'		=> 'Настройки ролей обновлены!',
	'DATAFILE_NOT_FOUND'			=> 'Инструмент не нашёл приемлемой Базы Данных для вашей конференции phpBB!',

	'EMPTY_PREFIX'					=> 'Не корректный префикс',
	'EMPTY_PREFIX_CONFIRM'			=> 'Инструмент Проверки Базы Данных собирается вносить изменения в таблицы Базы Данных, но использование пустого (неправильного) префикса не нарушит таблицы. Продолжить?',
	'EMPTY_PREFIX_EXPLAIN'			=> 'Инструмент Проверки Базы Данных обнаружила что у Вас несколько префиксов в Базе Данных. В связи с этим будут проверяться все таблицы Базы Данных. Будьте осторожны по окончании проверки и при выборе некорректных таблиц на удаление. Несоблюдение этого правила может привести к повреждению необходимых таблиц. Просмотреть информацию о работе данного инструмента можно на <a href="http://www.phpbb.com/community/viewforum.php?f=46">phpBB Support Forums</a>.',
	'ERROR'							=> 'Ошибка',
	'EXTRA'							=> 'Экстра',
	'EXTENSION_GROUPS_SUCCESS'		=> 'Настройки группы были успешно восстановлены до уровня "По умолчанию"',
	'EXTENSIONS_SUCCESS'			=> 'Настройки успешно восстановлены',

	'FINAL_STEP'					=> 'Это финальный шаг.<br /><br />Сейчас необходимо перейти на вашу конференцию и очистить кеш.',

	'INSTRUCTIONS'					=> 'Инструкции',

	'MISSING'						=> 'Повреждено',
	'MODULE_UPDATE_SUCCESS'			=> 'Модули успешно обновлены!',

	'NO_BOT_GROUP'					=> 'Боты не переустановлены, повреждена группа Ботов.',

	'PERMISSION_SETTINGS'			=> 'Опции прав доступа',
	'PERMISSION_UPDATE_SUCCESS'		=> 'Установки прав доступа успешно обновлены!',
	'PHPBB_VERSION_NOT_SUPPORTED'	=> 'Ваша версия phpBB3 не поддерживается (или повреждены некоторые файлы Инструментария поддержки).<br />Поддерживаются только версии phpBB 3.0.0 и выше, но возможно некоторое время назад была зарелизена более новая версия phpBB3 и инструментарий должен быть обновлен для корректной работы с новейшей версией.',

	'QUIT'							=> 'Закончить.',

	'RESET_BOTS'					=> 'Переустановка Ботов',
	'RESET_BOTS_EXPLAIN'			=> 'Вы хотите заменить список ботов на список по умолчанию? Все существующие боты будут удалены и установлены боты из списка ботов стандартной установки.',
	'RESET_BOTS_SKIP'				=> 'Переустановка бота пропущена',
	'RESET_BOT_SUCCESS'				=> 'Боты переустановлены успешно!',
	'RESET_MODULES'					=> 'Переустановка модулей',
	'RESET_MODULES_EXPLAIN'			=> 'Вы хотите переустановить модули по умолчанию для phpBB3? Все существующие модули будут удалены и установлены модули по умолчанию из стандартной установки.',
	'RESET_MODULES_SKIP'			=> 'Переустановка модуля пропущена',
	'RESET_MODULE_SUCCESS'			=> 'Модули переустановлены успешно!',
	'RESET_REPORT_REASONS'			=> 'Очистка журналов',
	'RESET_REPORT_REASONS_EXPLAIN'	=> 'Хотите очистить журналы форума все одновременно? Это очистит все журналы без возможности восстановления!',
	'RESET_REPORT_REASONS_SKIP'		=> 'Журналы форума очищены',
	'RESET_REPORT_REASONS_SUCCESS'	=> 'В журнале действий все записи удалены!',
	'RESET_ROLE_DATA'				=> 'Сброс изменений в настройках ролей',
	'RESET_ROLE_DATA_EXPLAIN'		=> 'Эта опция вернет настройки ролей phpBB форума в первоначальное состояние. Рекомендуется, если вы делали изменения в стандартных ролях прав на форуме.',
	'ROLE_SETTINGS'					=> 'Настройки ролей',
	'ROWS'							=> 'Записи',

	'SECTION_NOT_CHANGED_TITLE'		=> array(
		'tables'					=> 'Изменения таблиц',
		'columns'					=> 'Изменения столбцов',
		'config'					=> 'Изменения конфигурации',
		'extension_groups'			=> 'Изменения прав групп',
		'extensions'				=> 'Изменения общих прав',
		'permissions'				=> 'Изменения прав доступа',
		'groups'					=> 'Изменения групп',
		'roles'						=> 'Изменение ролей',
		'final_step'				=> 'Заключительный этап',
	),
	'SECTION_NOT_CHANGED_EXPLAIN'	=> array(
		'tables'					=> 'Таблицы в Базе данных без изменеий',
		'columns'					=> 'Поля в Базе Данных без изменений',
		'config'					=> 'Конфигурации в Базе Данных без изменений',
		'extension_groups'			=> 'Конфигурация прав групп без изменений',
		'extensions'				=> 'Конфигурация общих  прав без изменений',
		'permissions'				=> 'Конфигурация допусков без изменений',
		'groups'					=> 'Конфигурация стандартных групп без изменений',
		'roles'						=> 'Конфигурация ролей без изменений',
		'final_step'				=> 'После этого эттапа нужно очистить кеш и можно запустить проверку еще раз.',
	),
	'SUCCESS'						=> 'Успешно',
	'SYSTEM_GROUP_UPDATE_SUCCESS'	=> 'Системные группы переустановлены успешно',
	'TYPE'							=> 'Тип',
	'UNSTABLE_DEBUG_ONLY'			=> 'Очистка базы данных на не стабильных версиях phpBB (dev, a, b, RC), может выполняться только когда доступна опция "DEBUG" в файле конфигурации.',
));
