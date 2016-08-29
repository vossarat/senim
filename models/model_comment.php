<script>
function tick(){
	$('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
	}
	setInterval(function(){ tick () }, 3000);
</script>

<?php
class model_comment extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {

        return $viewdata = array(
            '<b>Бардина Татьяна Борисовна (мама пациента)   г.Караганда</b>
            Выражаю большую благодарность и признательность МВД РК за создание реабилитационного центра «Сеным». Мой сын 16 лет употребляет наркотики. Сколько пролито слез, сколько потрачено нервов, было отчаяние и боль от безысходности, пока мы не обратились в центр «Сеным». Я рада видеть изменения в сыне, впервые за долгие годы мучений у него появился смысл жизни, появились цели, наладились наши отношения.
            Благодарю от чистого сердца работников этого центра, в одиночку мы бы не справились  с этим недугом.',

            '<b>Асанова Назды Абдыбаевна (сестра пациента) г.Актобе</b>
            Хочу выразить огромную благодарность МВД РК за центр социально-психологической реабилитации наркозависимых лиц «Сеным». Мой брат много лет находился в зависимости от наркотиков. Сейчас ему 39 лет, за спиной тюрьма, боль и страдание, потерянное здоровье. Мы искали выход и помощи от любого источника, страшно смотреть, как твой родной человек убивает сам себя.  Нам посоветовали обратиться в центр «Сеным» под Кокшетау. Год реабилитации изменил брата, он стал физически более здоров, поменялось мышление, появилась вера в себя. Спасибо работникам центра за доброту и профессионализм. Спасибо, что вернули брата к жизни.',

            '<b>Чекушин Виктор Анатольевич (отец пациента)</b>
            Выражаю благодарность МВД РК за создание РГУ ЦСПРНЛ «Сеным», где оказали  помощь моему сыну и всей нашей семье.
            Сын наркозависимый с большим стажем. Много раз проходил лечение в разных местах и клиниках. Деньги текли рекой в эти центры и заведения. По совету нарколога обратились в центр «Сеным», в котором лечение бесплатное. Квалифицированная команда психологов с многолетним стажем помогла моему сыну вернуться к полноценной и счастливой жизни. Огромное спасибо за возможность начать жизнь с чистого листа.',

            '<b>Афонина Ирина Владимировна</b>
            Я хочу поблагодарить всех, кто создал центр социально-психологической помощи для наркозависимых лиц «Сеным», который вернул моего сына к нормальной жизни. Сколько мы пытались вытащить его из плена наркотиков самостоятельно, но только профессиональная помощь психологов этого центра, их грамотная программа реабилитации позволили ему найти путь к трезвой, здоровой жизни. А ведь я  почти потеряла надежду. Теперь я верю, что все будет хорошо. Спасибо всем специалистам за вашу работу и за сына.',
            
            '<b>Мы, пациенты реабилитационного центра социально-психологической помощи наркозависимых лиц «Сеным», хотим поблагодарить МВД Республики Казахстан за возможность пройти бесплатно курс лечения  от наркомании.</b>
            Выражаем благодарность руководству центра за помощь, поддержку,  человеческое отношение.
            Как мы жили до реабилитации? Трудно передать словами всю боль, страдание, отчаяние, одиночество, страх и беспомощность, которые долгие годы были нашими попутчиками. Наркотики были единственной нашей ценностью. Жизнь превратилась в ад, а мы словно зомби  шли  на зов смерти. Мы оказались за бортом, и никто не хотел протянуть нам руку помощи. Мы медленно убивали себя.
            И только благодаря программе центра «Сеным», направленной на выздоровление, консультациям специалистов  появилась надежда  на излечение. Проходя бесплатный курс реабилитации, появилась возможность трезво смотреть на мир, постепенно восстанавливаются качества личности, меняется мировоззрение и ценности. Возвращается вера в себя , да, просто хочется ЖИТЬ, ЛЮБИТЬ, РАДОВАТЬСЯ!
            Тренинги групповой психотерапии помогают выявить причины нашей болезни и поменять свой внутренний мир. Занятие спортом восстанавливают физическое состояние. Проведение досуговых  мероприятий учат жить трезво и преодолевать комплексы.
            Все сферы нашей жизни задействованы в изучении и восстановлении. Персонал центра работает с нами круглосуточно и индивидуально. Мы видим результаты работы на примере выпускников центра, которые живут полноценной жизнью .
            Отдельное спасибо УБН г.Кокшетау за тесное сотрудничество. Выездные совместные сессии по профилактике здорового образа жизни дают нам возможность помочь новому поколению не повторять наших ошибок. Рассказывая о своем горьком опыте, мы сами закрепляемся в решении жить трезво.
            Огромное спасибо  за наши спасенные души, в одиночку  войну с наркотиками мы бы не выиграли. Центр  вырвал нас из рук смерти и подарил второе рождение.
            Всем кто принимал участие в создании центра «Сеным» есть чем гордиться потому, как плодом их работы является  ЖИЗНЬ!

            С Уважением пациенты РГУ «ЦСПРНЛ» «СЕНЫМ»',
            
            '<b>Уважаемая Сулушаш Капесовна
            и весь  и коллектив реабилитационного центра «Сеним».</b>
            От всей души благодарим Вас за терпение и уважение, оказываемое нашим детям в течение реабилитации. После многократных обращений в разные реабилитационные центры, мы узнали о существовании ГУ ЦСПРН «Сеним», в котором нас приняли и оказали высококвалифицированную помощь и психологическую поддержку, в которой мы так нуждались на тот момент. Благодаря реабилитационной программе в Центре, наш сын вернулся к жизни, у нас появилась надежда на будущее и новые цели. Он смог восстановить утерянные  навыки и личностные качества, приобрел новые цели и жизненные ценности. Научился более ответственно относиться к своей жизни и жизни родных и близких. Вернулся к здравомыслию и нормальной жизни, здорового человека не только телом, но и душой.
            Еще раз от чистого сердца хотим поблагодарить весь коллектив Центра за колоссальный труд и неоценимый вклад в сохранение здорового общества и отдельно взятых людей. Примите искреннюю признательность за неравнодушное отношение к проблемам наших детей.
            Добрые дела не остаются незамеченными, они как маяки светят тем, кто ждет помощи. Пусть Ваши доброта и щедрость вернутся к Вам сторицей. Желаем вам всяческих благ, здоровья, процветания и побольше тепла на Вашем жизненном пути.
            Родители Чекушина Владимира
            Чекушин Виктор Анатольевич
            Чекушина Татьяна Вениаминовна'
        );
    }
    
    function show($param1)
    {
    	$comment = $this->get_viewdata();
		return $comment[$param1];
	}
}
?>