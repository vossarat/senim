<?php
class model_phone extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_viewdata()
    {
        return $viewdata = "Оказание психологической помощи по вопросам, 
связанных с проблемами наркомании.";
    }
    
    public function info()
    {
        return $viewdata = "<p>На базе Центра работает  Единая Телефонная Консультативная  Служба доверия по вопросам наркомании и кризисным состояниям.
 <p>Первый шаг — это получение  консультации  по психоактивным веществам у специалистов, позвонив на номер телефона доверия . Телефон доверия для наркозависимых и  созависимых лиц работает анонимно и круглосуточно. Наша горячая линия по реабилитации наркозависимых— это способ анонимно получить ответы на вопросы и необходимую помощь.
Большинство людей  не знают, что делать, куда обращаться за помощью и с чего начинать.
<p>Лечение от наркотиков и способы избавления от наркомании разные. Одним помогает один способ, другим этого недостаточно и требуется последующая реабилитация и социальная адаптация. Наши консультанты помогут найти  способы лечение от наркотиков, к каждому абоненту индивидуальный подход.
<p>Единая Телефонная Консультативная  Служба доверия принимает анонимные звонки по информации незаконного сбыта наркотиков на территории РК. Звонки обрабатываются, информация передается в Комитет по борьбе с наркобизнесом.
";
    }
}
?>