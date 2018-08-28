-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 21 2018 г., 21:46
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `foodmap`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Структура таблицы `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` int(11) UNSIGNED DEFAULT NULL,
  `count` int(11) UNSIGNED DEFAULT NULL,
  `max_count` int(11) UNSIGNED DEFAULT NULL,
  `catering_id` int(11) UNSIGNED DEFAULT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `video` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `adverts`
--

INSERT INTO `adverts` (`id`, `type`, `count`, `max_count`, `catering_id`, `users_id`, `video`) VALUES
(1, 1, 0, 150, 70, 4, NULL),
(2, 2, 1, 100, 67, 5, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `catering`
--

CREATE TABLE `catering` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avarage_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worktime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` tinyint(1) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `catering`
--

INSERT INTO `catering` (`id`, `name`, `type`, `cost`, `lat`, `lng`, `description`, `image`, `avarage_cost`, `address`, `phone`, `worktime`, `count`) VALUES
(67, 'Троица. Гриль&Бар', '6', '2', '53.896856', '27.550687', 'Гриль-бар «Троица» - уникальное место в центре Минска, где у вас есть шанс попробовать традиционные еврейские, самобытные татарские и белорусские блюда. Главная идея заведения основана на толерантности и желании объединить людей разных культур и народов. Отсюда – говорящее название и логотип с тремя людьми, сидящими за одним столом. При этом интерьер в «Троице» универсальный, с отсылкой к современной классике. В нем нет каких-либо отличительных особенностей, которые бы идентифицировали отдельную культуру: дизайнеры ориентировались на традиционную роскошь и уют.  Зато в меню вы найдете блюда из разных кухонь, приготовленные на основе классических и авторских рецептов, которые пользовались популярностью у жителей города в 19-20 веках.\r\n\r\nИнтерьер\r\n\r\nНесмотря на то, что заведение позиционирует себя как ресторан «местечковой» кухни, в его оформлении отсутствуют какие-либо намеки на «народность». В интерьере «Троицы» лаконично сочетается простота и комфорт. Современная и удобная мебель, декоративные золотые элементы, сдержанная цветовая гамма – все это настраивает гостей не только на вкусный обед или завтрак, но и на вечерний отдых.\r\n\r\nМеню\r\n\r\nОсобенность меню – в уникальных рецептах. В гриль-баре «Троица» вы сможете попробовать блюда из татарской, белорусской и еврейской кухонь: лагман, форшмак, классические драники и еврейский цимес. Прежде чем попасть в меню, каждая позиция тщательно прорабатывалась квалифицированными поварами и руководством ресторана. В него вошли традиционные и авторские блюда, которые были позаимствованы у местных жителей. Оригинальные названия подскажут вам, рецепт какой кухни лег в основу того или иного блюда.\r\n\r\nЕсли вы любитель ароматных мясных блюд, обязательно оцените мясо, приготовленное на настоящих углях поварами разных национальностей, а также аппетитные колбаски собственного производства. Из напитков попробуйте клюквенную настойку, кальвадос на кураге, апельсиновую с розмарином и хреном, знаменитую крамбамбулю или свеклу с апельсином и тимьяном на джине.\r\n\r\nРазвлечения и организация мероприятий\r\n\r\nДнем в гриль-баре «Троица» можно вкусно позавтракать и пообедать, а вечером в будний или выходной день послушать живую музыку или развлечь себя караоке. Если вы хотите организовать незабываемое торжество, здесь для вас предусмотрен отдельный банкетный зал, который может вместить в себя до 40 гостей.\r\n\r\nВ ближайшее время в гриль-баре откроется удобная и современная летняя терраса.', 'troyza.png', '25', 'г. Минск, проспект Независимости, 11к2', '375 29 670-83-70', '10:00 — 00:00', NULL),
(68, 'Терраса', '6', '2', '53.904689', '27.582155', 'Ресторан «Терраса» расположен в сердце Минска, недалеко от площади Победы. Именно здесь, на самой живописной террасе столицы, гостям будет оказан теплый прием. Профессионалы помогут организовать любое мероприятие, будь то торжество в кругу семьи, веселый корпоративный праздник или свадьба.\r\n\r\nАтмосфера\r\n\r\nПространство ресторана с комфортом вмещает в себя основной и Vip залырассчитанные на 80 и 15 гостей) со сценой и танцполом. Гордостью является уютная летняя террасарассчитанная на 60 гостей). Стильное оформление с оригинальными элементами декора в сочетании с уютной домашней атмосферой, дополненной старинными картинами, создает ощущение теплоты, легкости и свободы, которой так не хватает жителям большого города.\r\n\r\nКухня\r\n\r\nОсобенность ресторана «Терраса» - разнообразное гриль-меню. Именно здесь круглый год можно насладиться не только шашлыком, но и деликатесами приготовленными на открытом огне.\r\n\r\nВ меню ресторана «Терраса» собраны самые вкусные блюда, приготовленные по рецептам разных стран мира и созданные с любовью из свежих натуральных продуктов. Гости непременно оценят широкий выбор блюд белорусской кухни, в том числе драников, среди которых есть драники с тыквенными семечками и белыми грибами.', 'terrasa.PNG', '30', 'Минск, ул. Захарова, 31', '375 29 177-77-55', '12:00—00:00', NULL),
(70, 'Falcone (Фальконе)', '3', '1', '53.902003', '27.542634', '10 лет назад ресторан итальянской кухни Falcone распахнул свои двери для всех, кто ценит гармонию вкуса и красоту изысканных блюд. Слово falcone переводится с итальянского языка как «сокол» — птица, которая поражает своим изяществом и благородством. Эксклюзивная итальянская кухня, оригинальный интерьер и неповторимый стиль нашего ресторана призваны дарить посетителям такие же незабываемые впечатления, какие дарит завораживающий полет сокола.\r\n\r\nВсе эти годы для вас готовили профессионалы кулинарного искусства, которые оттачивали свое мастерство как в родной Италии, так и в разных уголках Европы. В свой первый юбилей мы решили удивить вас авторским подходом к приготовлению классических блюд и необычными идеями нашего шеф-повара, которые нашли отражение в новом меню. Не каждый итальянский ресторан в Минске готов предложить вам необыкновенный арбузно-томатный сорбет или черные равиоли с муссом из лобстера!\r\n\r\nТакже ресторан Falcone представляет вам свою философию здорового питания в Healthy Menu, которое наш шеф-повар разработал для приверженцев здорового образа жизни. Правильное сочетание всех ингредиентов и сохранение их питательных и вкусовых свойств делает блюда и напитки не только полезными, но и необычайно вкусными.\r\n\r\nМы выбираем самые качественные продукты и превращаем их в настоящие произведения искусства. Насладитесь их вкусом в лучшем ресторане Минска!\r\n', 'falcone.jpg', '150', 'Минск, ул. Короля, 9', '375 29 377-77-76', '12:00—00:00', NULL),
(71, 'Местечко', '3', '2', '53.846243', '27.511627', 'Если вы любите размеренный отдых в комфортном месте с достойной вкусной кухней, уютное кафе «Местечко» в традиционном альпийском стиле вас приятно удивит и порадует. Расположенное в 15 минутах от шумного центра по адресу Казинца, 81 в горнолыжном центре «Солнечная долина», «Местечко» – идеальный выбор, если вы хотите отвлечься и остановиться в потоке дел и забот.\r\n\r\nИнтерьер\r\n\r\nПростор, домашняя обстановка, расположение в зеленой зоне вблизи водохранилища – одна из ключевых особенностей кафе «Местечко. В распоряжении гостей 3 этажа, каминный зал (вместимостью 45 человек), охотничий зал (75 человек), а также летняя терраса. Для уединенного отдыха оборудован vip-зал (вместимостью 30 человек) с отдельным входом – прекрасный вариант для празднования небольшого торжества.\r\n\r\nИнтерьер кафе «Местечко напоминает уютный домик в горах, оформленный в альпийском стиле. Ничего лишнего, только натуральное светлое дерево, характерный декор, теплые оттенки и камин для создания домашней атмосферы.', 'mestechko.jpg', '20', 'г. Минск, ул. Казинца, 81', '375 29 311-14-14', '11:00 — 23:00', NULL),
(72, 'Plan B', '4', '2', '53.924483', '27.596264', 'Оригинальное, атмосферное и не пафосное заведение другого формата для тех, кому наскучили классические бары, — это бар Plan B.\r\n\r\nЗдесь уютный и нетривиальный интерьер в лофт-стиле, темные тона и приглушенный свет. Бар Plan B — не тусовочное место, а атмосферный бар для приятного и качественного отдыха. Plan B вмещает от 100 человек и разделен на функциональные зоны:\r\n\r\n    Кафе;\r\n    Основной зал с барной стойкой;\r\n    Lounge-room.\r\n    Террасатеплая и отапливаемая)\r\n\r\nУ нас комфортно разместится любая компания: есть столики на двоих, четверых и шестерых человек, окруженные мягкими стульями или диванами, и уединенная Lounge-комната до 15 человек, СВЕТЛАЯ И УЮТНАЯ ТЕРРАСА.\r\n\r\nВ Plan B всегда рады вам, в чем можно убедиться, пообщавшись с командой: барменами и персоналом бара, владеющим английским языком.\r\n\r\nВ баре Вам предложат европейскую, белорусскую и авторскую кухню, к разработке которой был приложен максимум усилий и тотальный заряд положительных эмоций.\r\n\r\nРазумеется, Plan B предлагает и большую коктейльную карту: широкое разнообразие алкогольных напитков, шотов и коктейлей, среди которых присутствует классика и креативные авторские позиции. В холодное время здесь можно согреться нашими вариантами глинтвейнов, грога и тодди.', 'planb.PNG', '35', 'г. Минск, ул. Б. Хмельницкого, 10а', '375 29 109-40-40', '12:00 — 05:00', NULL),
(73, 'Butler (Батлер)', '4', '2', '53.904950', '27.558096', 'Там, где традиции пересекаются с современностью.\r\n\r\nРесторан «Староместный пивовар» живет духом прошлого, бережно оберегая культуру потребления и обычаи подачи пива, дошедшие к нам из глубин веков. Заведение расположилось на одной из пешеходных улиц Старого города в здании с двухвековой историей.\r\n\r\nДля каждого гостя – свой уют\r\n\r\n«Староместный пивовар» предлагает своим посетителям площадь в два этажа, где каждый найдет себе место по душе. Первый этаж предусмотрен для размещения небольших компаний, которые заходят немного перекусить и попробовать по бокалу пенного напитка. Второй этаж оценят любители шумных застолий, которые собираются, чтобы провести время за длинными веселыми разговорами. Здесь стоят столы на 8-12 персон. Однако насладиться здешней атмосферой можно и в обществе двух-четырех человек.\r\n\r\nМеню\r\n\r\nКухня в ресторане «Староместный пивовар» представлена традиционными пивными блюдами. В нашем меню есть и исконно белорусские яства, приготовленные по классическим рецептам предков, и легкие закуски.\r\n\r\nБлюда к пиву\r\n\r\nНаши повара делают акцент на мясных деликатесах. Причем мы предлагаем как порционные, так и блюда для больших компаний.\r\n\r\nРесторан также готов порадовать посетителей разнообразием легких овощных и мясных салатов, изысканный вкус которых дополняют ароматные заправки.', 'butler.PNG', '20', 'г. Минск, ул. Герцена', '375 29 396-96-67', '12:00 — 00:00', NULL),
(74, 'Пицца Лисицца', '2', '2', '53.862265', '27.459667', 'Разнообразное меню, быстрая доставка, бесплатная пицца — это и многое другое возможно со службой доставки «Пицца Лисицца».\r\n\r\nАссортимент\r\n\r\nЕсли Вам захотелось настоящей американской пиццы, которая отличается от стандартных пицц не только размером, но и наполнением, то доставка «Пицца Лисицца» сможет Вам помочь.\r\n\r\nНа сайте из 24 видов пиццы Вы сможете найти свой вариант. Здесь можно попробовать и вегетарианскую, и острую, и фирменную пиццу. Стоит отметить, что тесто для пиццы формуется вручную, а все ингредиенты используются только самые свежие.\r\n\r\nПомимо пицц можно заказать еще закуски, десерты и различные напитки. Выбор закусок  очень разнообразен: от картофеля по-деревенски до  вкуснейшего мохентохена.\r\n\r\nПостоянным бонусом является и то, что к каждой пицце прилагается бесплатный порционный соус Heinz на выбор.\r\n\r\n', 'lisica.jpg', '20', 'просп. Любимова 26/1, Минск', '375 29 755-66-55', 'круглосуточно', NULL),
(75, 'Domino’s Pizza', '2', '2', '53.883438', '27.448711', '\r\n\r\nDomino\'s Pizza – крупнейшая сеть доставки пиццы во всем мире. Сегодня сеть насчитывает более 12 000 пиццерий в 85 странах.\r\n\r\nГлавное преимущество Домино\'с Пицца – это скорость доставки. Каждый Клиент может быть уверен, что он получит свой заказ в течение 30 минут после его приема сотрудникам пиццерии.\r\n\r\nСекрет популярности нашей пиццы строится на следующих принципах:\r\n\r\n    Мы используем специальный рецепт для приготовления пиццы. Правильное тесто это гарантия совершенного вкуса.\r\n    Пицца выпекается определенное количество времени при одинаковой температуре 250 градусов. Именно такая температура необходима для наилучшего и равномерного пропекания пиццы.\r\n    Мы используем фирменный соус Domino\'s, разработанный специально для нашей пиццы. Это соус никого не оставит равнодушным.\r\n    Всегда свежие и отборные ингредиенты.\r\n    Каждый поставщик тщательно проверяется и каждый Клиент, может быть уверен, что получит пиццу только со свежими продуктами.\r\n    Профессионализм нашей команды. Каждый член братства Domino\'s Pizza любит свое дело, своих коллег, своих клиентов и свои продукты.\r\n\r\nКаждая из этих важных составляющих, собранные вместе, делают службу доставки пиццы Domino\'s уникальной и неповторимой.\r\n\r\nТак чего мы ждем? Вы готовы сделать заказ?\r\n', 'dominos.PNG', '25', 'Минск, ул. Шаранговича, 25', '7717', '11:00—23:00', NULL),
(76, 'Столовая № 104', '5', '3', '53.873303', '27.620334', 'Обычно здесь проводят 20–45 мин', 'stolov104.PNG', '9', 'улица Народная 26/2', '8 017 295-31-57', '	9:00–16:00', NULL),
(77, 'Mcdonalds', '1', '3', '53.864953', '27.484598', '\r\nОтветственность за ежедневное обслуживание тысяч людей делает качество основным приоритетом для МакДональдс. Основу нашего меню составляет все то, что вы используете дома: овощи, куриное мясо, говядина, свинина, картофель, рыба, яйца, хлеб и молочные изделия.\r\n\r\nНаш отдел контроля и гарантии качества регулярно проверяет производство поставщиков, контролируя выполнение требований МакДональдс. Ингредиенты, используемые в ресторанах МакДональдс, соответствуют стандартам качества и безопасности Европейского Союза и Республики Беларусь, а в некоторых случаях наши стандарты превышают официально установленные.\r\n\r\nПоставщики МакДональдс уделяют большое внимание кормам и семенам. Разработана и внедряется программа по улучшению содержания животных в откормочных комплексах.\r\n\r\nДоставка продуктов в рестораны производится специализированным транспортом, где установлены устройства считывания температуры во время перевозки. Также на месте производится замер внутренней температуры продукта. Мы принимаем только те продукты, которые транспортировались в идеальных условиях! \r\n\r\nВ нашем распределительном центре cвежесть продуктов в любых условиях обеспечивает независимый дизельный генератор, который в чрезвычайной ситуации может непрерывно снабжать складские помещения электроэнергией до устранения аварии во внешних электросетях.\r\n', 'mcdonalds.jpg', '10', 'проспект Дзержинского 96, Минск', '8 017 211-90-00', '7:00–0:00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `cost`
--

CREATE TABLE `cost` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cost`
--

INSERT INTO `cost` (`id`, `name`) VALUES
(1, 'Высокая цена'),
(2, 'Умеренная цена'),
(3, 'Доступная цена');

-- --------------------------------------------------------

--
-- Структура таблицы `favorite`
--

CREATE TABLE `favorite` (
  `id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `catering_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `favorite`
--

INSERT INTO `favorite` (`id`, `users_id`, `catering_id`) VALUES
(9, 4, 67),
(10, 4, 68),
(11, 4, 70),
(12, 5, 67);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(11) UNSIGNED NOT NULL,
  `users_id` int(11) UNSIGNED DEFAULT NULL,
  `catering_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `users_id`, `catering_id`) VALUES
(16, 4, 67),
(17, 4, 68),
(18, 4, 70),
(19, 5, 67);

-- --------------------------------------------------------

--
-- Структура таблицы `types`
--

CREATE TABLE `types` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Фастфуд'),
(2, 'Пиццерия'),
(3, 'Ресторан'),
(4, 'Бар'),
(5, 'Столовая'),
(6, 'Кафе');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repeat_pass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `repeat_pass`, `email`, `name`, `phone`) VALUES
(4, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user1', 'user1@mail.ru', 'user', 375445552211),
(5, 'user2', '7e58d63b60197ceb55a1c487989a3720', 'user2', 'user2@mail.ru', 'user2', 375448889977);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_adverts_catering` (`catering_id`),
  ADD KEY `index_foreignkey_adverts_users` (`users_id`);

--
-- Индексы таблицы `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_favorite_users` (`users_id`),
  ADD KEY `index_foreignkey_favorite_catering` (`catering_id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_foreignkey_likes_users` (`users_id`),
  ADD KEY `index_foreignkey_likes_catering` (`catering_id`);

--
-- Индексы таблицы `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT для таблицы `cost`
--
ALTER TABLE `cost`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `adverts`
--
ALTER TABLE `adverts`
  ADD CONSTRAINT `c_fk_adverts_catering_id` FOREIGN KEY (`catering_id`) REFERENCES `catering` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_adverts_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `c_fk_favorite_catering_id` FOREIGN KEY (`catering_id`) REFERENCES `catering` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_favorite_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `c_fk_likes_catering_id` FOREIGN KEY (`catering_id`) REFERENCES `catering` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `c_fk_likes_users_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;