<?php

/**
 * FormIt
 *
 * Copyright 2020 by Sterc <modx@sterc.nl>
 */

$_lang['prop_formit.hooks_desc']                                = 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма пройдёт проверку. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.';
$_lang['prop_formit.prehooks_desc']                             = 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма будет загружена. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Например: можно предварительно устанавливать значения полей формы с помощью $scriptProperties[`hook`]->fields[`fieldname`]. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.';
$_lang['prop_formit.submitvar_desc']                            = 'Если установлено значение, то обработка формы не начнётся пока POST параметр с этим именем не будет передан.';
$_lang['prop_formit.validate_desc']                             = 'Разделённый запятыми список полей для проверки, для каждого поля пишется имя:валидатор (т.е.: username:required,email:required). Валидаторы могут быть объединены через двоеточие, например email:email:required. Этот параметр может быть задан на нескольких строках.';
$_lang['prop_formit.errtpl_desc']                               = 'Шаблон сообщения об ошибке.';
$_lang['prop_formit.validationerrormessage_desc']               = 'Общее сообщение об ошибке для установки в качестве плейсхолдера в случае если валидация не прошла. Может содержать [[+errors]], если вы хотите отобразить список всех ошибок.';
$_lang['prop_formit.validationerrorbulktpl_desc']               = 'HTML шаблон (tpl), который используется для каждой отдельной ошибки в общем значении сообщения об ошибке при валидации.';
$_lang['prop_formit.customvalidators_desc']                     = 'Разделённый запятыми список имён пользовательских валидаторов (сниппетов), которые вы планируете использовать в этой форме. Пользовательские валидаторы должны быть обязательно указаны в этом параметре, иначе они не будут работать.';
$_lang['prop_formit.trimvaluesdeforevalidation_desc']           = 'Обрезать ли пробелы от начала и конца значения до начала валидации. По умолчанию true.';
$_lang['prop_formit.clearfieldsonsuccess_desc']                 = 'Если установлено значение true, то поля формы будут очищатся после успешной отправки формы без редиректа.';
$_lang['prop_formit.successmessage_desc']                       = 'Значение плейсхолдера для сообщения об успехе. Имя подстановщика устанавливается в параметре &successMessagePlaceholder, по умолчанию «fi.successMessage».';
$_lang['prop_formit.successmessageplaceholder_desc']            = 'Плейсхолдер для сообщения об успехе.';
$_lang['prop_formit.store_desc']                                = 'Если установлено true, данные переданные через форму будут сохранятcя в кэше, для дальнейшего их использования с помощью сниппета FormItRetriever.';
$_lang['prop_formit.storetime_desc']                            = 'Если для `store` задано значение true, то этот параметр указывает время (в секундах) для хранения данных из отправленной формы. По умолчанию пять минут.';
$_lang['prop_formit.storelocation_desc']                        = 'Если для `store` задано значение true, то этот параметр указывает местоположение кэша данных из форм. По умолчанию используется кэш MODX.';
$_lang['prop_formit.allowfiles_desc']                           = 'Если установлено значение 0, файлы не будут отправлены в форму.';
$_lang['prop_formit.placeholderprefix_desc']                    = 'Префикс который используется всеми плейсхолдерами установлеными FormIt для полей. По умолчанию «fi.»';
$_lang['prop_formit.redirectto_desc']                           = 'Хук «redirect». В этом параметре надо указать идентификатор ресурса на который будет происходить редирект после успешной отправки формы.';
$_lang['prop_formit.redirectparams_desc']                       = 'JSON-массив параметров для передачи в хук «redirect», который будет передаваться при редиректе.';
$_lang['prop_formit.recaptchajs_desc']                          = 'Хук «recaptcha». JSON объект который содержит в себе настройки для виджета reCAPTCHA.';
$_lang['prop_formit.recaptchaheight_desc']                      = 'Хук «recaptcha». Высота виджета reCAPTCHA.';
$_lang['prop_formit.recaptchatheme_desc']                       = 'Хук «recaptcha». Тема оформления для виджета reCAPTCHA.';
$_lang['prop_formit.recaptchawidth_desc']                       = 'Хук «recaptcha». Ширина виджета reCAPTCHA.';
$_lang['prop_formit.spamemailfields_desc']                      = 'Хук «spam». Разделённый запятыми список полей содержащих адреса электронной почты для проверки на причастность к спаму.';
$_lang['prop_formit.spamcheckip_desc']                          = 'Хук «spam». Если этот параметр установлен в true, то будет проверяться IP-адрес отправителя формы на причастность к спаму.';
$_lang['prop_formit.emailbcc_desc']                             = 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать скрытую копию письма (BCC).';
$_lang['prop_formit.emailbccname_desc']                         = 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».';
$_lang['prop_formit.emailcc_desc']                              = 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.';
$_lang['prop_formit.emailccname_desc']                          = 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».';
$_lang['prop_formit.emailto_desc']                              = 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать письмо.';
$_lang['prop_formit.emailtoname_desc']                          = 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailTo».';
$_lang['prop_formit.emailfrom_desc']                            = 'Хук «email». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы в поле с именем «email», если это поле не будет найдено, то будет использоваться адрес электронной почты из системной настройки «emailsender».';
$_lang['prop_formit.emailfromname_desc']                        = 'Хук «email». Необязательный параметр. Имя отправителя письма.';
$_lang['prop_formit.emailreplyto_desc']                         = 'Хук «email». Необязательный параметр. Адрес электронной почты для ответа на письмо.';
$_lang['prop_formit.emailreplytoname_desc']                     = 'Хук «email». Необязательный параметр. Имя владельца адреса электронной почты который используется для ответа на письмо.';
$_lang['prop_formit.emailreturnpath_desc']                      = 'Необязательный параметр. Если `email` установлен как хук и этот параметр включен, то будет указан Return-path: адрес для электронной почты. Если не установлен, будет принимать значение свойства `emailFrom`.';
$_lang['prop_formit.emailsubject_desc']                         = 'Хук «email». В этом параметре можно указать тему электронного письма.';
$_lang['prop_formit.emailusefieldforsubject_desc']              = 'Если поле «subject» используется в форме и этот параметр установлен в true, то содержимое этого поля будет использоваться как тема электронного письма.';
$_lang['prop_formit.emailhtml_desc']                            = 'Хук «email». Необязательный параметр. Этот параметр включает использование HTML разметки в электронном письме. По умолчанию включено.';
$_lang['prop_formit.emailconvertnewlines_desc']                 = 'Если true и emailHtml установлен в 1, то в письме перенос строки будет конвертирован в тег BR.';
$_lang['prop_formit.emailmultiseparator_desc']                  = 'Разделитель по умолчанию для списка значений, отправляемых через поля типа checkboxes/multi-selects. По умолчанию используется перенос строки.';
$_lang['prop_formit.emailmultiwrapper_desc']                    = 'Обернет каждое значение в списке полей отправленных из полей типа checkboxes/multi-selects. По умолчанию передаются только значения, без обертки.';

$_lang['prop_fiar.fiartpl_desc']                                = 'Хук «FormItAutoResponder». Обязательный параметр. Имя чанка который будет использоватся как шаблон письма для автоматического ответа.';
$_lang['prop_fiar.fiartofield_desc']                            = 'Хук «FormItAutoResponder». Поле формы которое будет использовано как адрес на который надо отправить автоматический ответ.';
$_lang['prop_fiar.fiarbcc_desc']                                = 'Хук «FormItAutoResponder». Разделённый запятыми список адресов электронной почты на которые надо послать скрытую копию письма (BCC).';
$_lang['prop_fiar.fiarbccname_desc']                            = 'Хук «FormItAutoResponder». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».';
$_lang['prop_fiar.fiarcc_desc']                                 = 'Хук «FormItAutoResponder». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.';
$_lang['prop_fiar.fiarccname_desc']                             = 'Хук «FormItAutoResponder». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».';
$_lang['prop_fiar.fiarfrom_desc']                               = 'Хук «FormItAutoResponder». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы в поле с именем «email», если это поле не будет найдено, то будет использоваться адрес электронной почты из системной настройки «emailsender».';
$_lang['prop_fiar.fiarfromname_desc']                           = 'Хук «FormItAutoResponder». Необязательный параметр. Имя отправителя письма.';
$_lang['prop_fiar.fiarreplyto_desc']                            = 'Хук «FormItAutoResponder». Необязательный параметр. Адрес электронной почты для ответа на письмо.';
$_lang['prop_fiar.fiarreplytoname_desc']                        = 'Хук «FormItAutoResponder». Необязательный параметр. Имя владельца адреса электронной почты которое используется для ответа на письмо.';
$_lang['prop_fiar.fiarsubject_desc']                            = 'Хук «FormItAutoResponder». Тема письма.';
$_lang['prop_fiar.fiarhtml_desc']                               = 'Хук «FormItAutoResponder». Необязательный параметр. Включает или выключает использование HTML разметки в электронном письме. По умолчанию включено.';

$_lang['prop_fir.placeholderprefix_desc']                       = 'Префикс который используется плейсхолдерами выводящими сохранённые данные формы.';
$_lang['prop_fir.redirecttoonnotfound_desc']                    = 'Идентификатор ресурса на который произойдёт редирект, если данные не найдены.';
$_lang['prop_fir.eraseonload_desc']                             = 'Если включено, сохранённые данные формы будут стираться при первой загрузке. Настоятельно рекомендуется оставить этот параметр выключенным. Включите его если вы хотите чтобы данные загружались только один раз.';
$_lang['prop_fir.storelocation_desc']                           = 'Если для `store` задано значение true, то это указывает местоположение кэша данных из форм. По умолчанию используется кэш MODX.';

$_lang['prop_math.mathminrange_desc']                           = 'Хук «math». Минимальный диапазон для каждого числа в уравнении.';
$_lang['prop_math.mathmaxrange_desc']                           = 'Хук «math». Максимальный диапазон для каждого числа в уравнении.';
$_lang['prop_math.mathfield_desc']                              = 'Хук «math». Имя поля ввода для ответа.';
$_lang['prop_math.mathop1field_desc']                           = 'Хук «math». Имя поля для первого числа в уравнении.';
$_lang['prop_math.mathop2field_desc']                           = 'Хук «math». Имя поля для второго числа в уравнении.';
$_lang['prop_math.mathoperatorfield_desc']                      = 'Хук «math». Имя поля для оператора в уравнении.';

$_lang['prop_fico.allgrouptext_desc']                           = 'Необязательный параметр. Если установлено и используется &prioritized, то будет использоваться метка (label) для всех других стран в группах опций.';
$_lang['prop_fico.optgrouptpl_desc']                            = 'Необязательный параметр. Если установлено и используется &prioritized, то это будет чанк tpl для разметки группы опций.';
$_lang['prop_fico.limited_desc']                                = 'Необязательный параметр. Разделенный запятыми список кодов ISO для выбранных стран, полный список которых будет ограничен.';
$_lang['prop_fico.prioritized_desc']                            = 'Необязательный параметр. Разделенный запятыми список кодов ISO для стран, которые будут перемещать их в приоритетную группу «Частых посетителей» в верхней части выпадающего списка. Это можно использовать для часто выбираемых стран.';
$_lang['prop_fico.prioritizedgrouptext_desc']                   = 'Необязательный параметр. Если установлено и используется &prioritized, то используется текстовая метка для группы параметров с приоритетом.';
$_lang['prop_fico.selected_desc']                               = 'Значение страны для выбора.';
$_lang['prop_fico.selectedattribute_desc']                      = 'Необязательный параметр. Атрибут HTML для добавления к  выбранной стране.';
$_lang['prop_fico.toplaceholder_desc']                          = 'Необязательный параметр. Используйте этот параметр, чтобы установить вывод в качестве плейсхоледра вместо непосредственного вывода на экран.';
$_lang['prop_fico.tpl_desc']                                    = 'Необязательный параметр. Чанк для вывода каждой страны в выпадающем списке.';
$_lang['prop_fico.useisocode_desc']                             = 'Если 1, будет использовать код страны ISO для значения. Если 0, будет использовать название страны.';
$_lang['prop_fico.country_desc']                                = 'Необязательный параметр. Установите для использования альтернативного файла со списком стран для загрузки в значение поля.';

$_lang['prop_fiso.country_desc']                                = 'Необязательный параметр. Установите для использования альтернативного файла со списком штатов для загрузки в значение поля.';
$_lang['prop_fiso.selected_desc']                               = 'Значение страны для выбора.';
$_lang['prop_fiso.selectedattribute_desc']                      = 'Необязательный параметр. Атрибут HTML для добавления к выбранной стране.';
$_lang['prop_fiso.toplaceholder_desc']                          = 'Необязательный параметр. Используйте этот параметр, чтобы установить вывод в качестве плейсхоледра вместо непосредственного вывода на экран.';
$_lang['prop_fiso.tpl_desc']                                    = 'Необязательный параметр. Чанк для вывода каждой страны в выпадающем списке.';
$_lang['prop_fiso.useabbr_desc']                                = 'Если 1, будет использоваться аббревиатура штата для значения. Если 0, будет использоваться полное название штата.';

$_lang['formit.opt_blackglass']                                 = 'Black Glass';
$_lang['formit.opt_clean']                                      = 'Clean';
$_lang['formit.opt_red']                                        = 'Red';
$_lang['formit.opt_white']                                      = 'White';
$_lang['formit.opt_cache']                                      = 'MODX Cache';
$_lang['formit.opt_session']                                    = 'Сессия';
$_lang['prop_formit.savetmpfiles_desc']                         = 'Если установлено значение 1, FormIt будет хранить отправленные файлы во временной папке.';
$_lang['prop_formit.attachfiles_desc']                          = 'Если true, FormIt добавит все поля файла как вложения в электронное письмо.';
