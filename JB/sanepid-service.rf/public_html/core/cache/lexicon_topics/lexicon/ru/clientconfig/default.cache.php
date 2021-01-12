<?php  return array (
  'clientconfig' => 'Конфигурация',
  'clientconfig.desc' => 'Установка и обновление конфигурации сайта.',
  'clientconfig.add_setting' => 'Добавить настройку',
  'clientconfig.update_setting' => 'Обновить настройку',
  'clientconfig.duplicate_setting' => 'Копировать настройку',
  'clientconfig.remove_setting' => 'Удалить настройку',
  'clientconfig.remove_setting.confirm' => 'Вы уверены, что хотите удалить эту настройку?',
  'clientconfig.add_group' => 'Добавить группу',
  'clientconfig.update_group' => 'Обновить группу',
  'clientconfig.remove_group' => 'Удалить группу',
  'clientconfig.remove_group.confirm' => 'Вы уверены, что хотите удалить эту группу? Все параметры из этой группы не будут видны для клиента, пока вы не добавите их в другую группу.',
  'clientconfig.admin' => 'Администрирование',
  'clientconfig.adminpanel' => 'Панель администрирования конфигурации',
  'clientconfig.cgsetting_err_ns_key' => 'Обязателен ключ для настройки.',
  'clientconfig.cgsetting_err_ae_key' => 'Такой ключ уже существует.',
  'clientconfig.description' => 'Описание',
  'clientconfig.default' => 'Значение по умолчанию',
  'clientconfig.error.noresults' => 'Элементы не найдены.',
  'clientconfig.filter_on_group' => 'Фильтр по группе',
  'clientconfig.id' => 'ID',
  'clientconfig.is_required' => 'Обязателен?',
  'clientconfig.is_required.long' => 'Настройка обязательна',
  'clientconfig.group' => 'Группа',
  'clientconfig.groups' => 'Группы',
  'clientconfig.key' => 'Ключ',
  'clientconfig.label' => 'Название',
  'clientconfig.no_configuration_yet' => 'Нет доступных конфигураций',
  'clientconfig.no_configuration_yet.desc' => 'Кажется, еще не созданы какие-либо конфигурации. Если вы являетесь администратором сайта, пожалуйста изучите <a href="http://rtfm.modx.com/display/ADDON/ClientConfig">официальную документацию</a> по настройке конфигурации для вашего клиента.',
  'clientconfig.options' => 'Параметры поля',
  'clientconfig.options.desc' => 'Для некоторых типов полей, таких как выпадающие списки, вы можете задать параметры. Разделите разные параметры двумя вертикальными чертами (||) и если вы хотите другое значение, чем то, что видит клиент, используйте "название==значение".',
  'clientconfig.save_config' => 'Сохранить конфигурацию',
  'clientconfig.sortorder' => 'Порядок сортировки',
  'clientconfig.settings' => 'Настройки',
  'clientconfig.settings_count' => 'Кол-во настроек',
  'clientconfig.value' => 'Значение',
  'clientconfig.xtype' => 'Тип поля',
  'clientconfig.xtype.textfield' => 'Текст',
  'clientconfig.xtype.textarea' => 'Текстовая область',
  'clientconfig.xtype.richtext' => 'Текстовый редактор',
  'clientconfig.xtype.numberfield' => 'Число',
  'clientconfig.xtype.colorpalette' => 'Выбор цвета',
  'clientconfig.xtype.xcheckbox' => 'Чекбокс',
  'clientconfig.xtype.datefield' => 'Дата',
  'clientconfig.xtype.timefield' => 'Время',
  'clientconfig.xtype.combobox' => 'Выпадающий список',
  'clientconfig.xtype.image' => 'Изображение',
  'clientconfig.xtype.googlefonts' => 'Список шрифтов Google',
  'clientconfig.to_client_view' => 'Показать клиенту',
  'clientconfig.saved' => 'Сохранено',
  'clientconfig.saved.text' => 'Настройки были сохранены.',
  'clientconfig.field_is_required' => 'Этот параметр не может быть пустым.',
  'clientconfig.create_groups_first' => 'Сначала создайте группу',
  'clientconfig.create_groups_first.desc' => 'Извините, но прежде чем вы сможете добавить настройку, вам необходима хотя бы одна группа. Без группы настройки не могут быть отображены клиенту.',
  'clientconfig.export_settings' => 'Экспортировать настройки',
  'clientconfig.export_settings.confirm' => 'Когда вы нажмете «Да», будет сгенерирован и скачан XML-файл, который содержит все настройки ClientConfig. Вы уверены что хотите продолжить?',
  'clientconfig.import_settings' => 'Импортировать настройки',
  'clientconfig.import_settings.desc' => 'Загрузив XML-файл и выбрав правильный режим импорта, вы можете импортировать настройки, экспортированные ранее или с другого сайта. <b>Примечание:</b> настройки содержат ссылки на группы по их ID; если вы импортируете настройки, вам потребуется также импортировать и группы.',
  'clientconfig.export_groups' => 'Экспортировать группы',
  'clientconfig.export_groups.confirm' => 'Когда вы нажмете «Да», будет сгенерирован и скачан XML-файл, который содержит все группы ClientConfig. Вы уверены что хотите продолжить?',
  'clientconfig.import_groups' => 'Импортировать группы',
  'clientconfig.import_groups.desc' => 'Загрузив XML-файл и выбрав правильный режим импорта, вы можете импортировать группы, экспортированные ранее или с другого сайта.',
  'clientconfig.import_file' => 'Файл для импорта',
  'clientconfig.import_mode' => 'Режим импорта',
  'clientconfig.import_mode.insert' => 'Вставить: оставить существующие [[+what]] и добавить импортированные данные',
  'clientconfig.import_mode.overwrite' => 'Перезаписать: оставить существующие [[+what]], но перезаписать их, если они имеют одинаковый ID',
  'clientconfig.import_mode.replace' => 'Заменить: сначала удалить все текущие [[+what]], а затем импортировать новые данные',
  'clientconfig.start_import' => 'Начать импорт',
  'clientconfig.error.xml_not_loaded' => 'Не загружен корректный XML-файл.',
  'clientconfig.error.not_an_export' => 'Загруженный файл не является корректным файлом экспорта для ClientConfig.',
  'clientconfig.error.importing_row' => 'Что-то пошло не так в процессе сохранения экспорта: ',
  'clientconfig.xtype.password' => 'Пароль',
  'clientconfig.xtype.file' => 'Файл',
  'clientconfig.source' => 'Источник файлов',
  'clientconfig.source.desc' => 'Источник файлов для диспетчера файлов.',
  'clientconfig.choose_context' => 'Выберите контекст',
  'clientconfig.global_values' => 'Глобальные',
  'clientconfig.config_for_context' => 'Конфигурация для [[+context]]',
  'clientconfig.categories' => 'Категории',
  'clientconfig.process_options' => 'Обрабатывать теги в параметрах',
);