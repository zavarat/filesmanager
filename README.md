# filesmanager
Система для обработки и раздачи картинок,видео и др. файлов

# Идея
Основная идея заключается в том, чтобы система легко поднималась для любого проекта и обеспечивала бы локальый процессинг и раздачу файлов.
Процессинг файлов очень гибок, т.к. может делаться внутренними способами php, сторонники утилитами или даже любым докер-контейнером.
Цепочки процессинга определяются в конфигурационных файлах.

Technology stack:
- nginx
- php7
- docker


# Раздача файлов
Раздачей занимается nginx. Сначала проверяется наличие файла в кеше nginx, если файла нет, то он запрашивается у php-обработчика.

# CDN
Перед сервером раздачи можно легко подключить любой CDN и таким образом ускорить загрузку файлов, разгрузить сервер и сэкономить на трафике.
