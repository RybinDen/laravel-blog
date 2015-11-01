@extends('layouts.app')
@section('title')
О сайте
@stop
@section('menu')
<li>{!!Request::is('about')? 'О сайте' : '<a href="/about">О сайте</a>'!!}</li>
<li>{!!Request::is('contacts')? 'Контакты' : '<a href="/contacts">Контакты</a>'!!}</li>
@stop
@section('content')
<h1>Добро пожаловать</h1>
<article>
Тифлофорум, это сайт, на котором вы можете  задать интересующий вас вопрос, написать статью. <br> 
Не зарегистрированные пользователи могут только просматривать статьи и вопросы. т.е. задавать вопросы,писать статьи, отвечать и комментировать, личные данные пользователей и другие действия, связанные с инзменением информации на сайте доступны только зарегистрированным, при попытки совершить действие, которое доступно только зарегистрированным их будет перенаправлять на страницу входа.<br>
На главной странице отображается список последних (новых) статей и вопросов с их кратким описанием.<br>
Зарегистрированные пользователи могут  задавать вопросы, писать статьи,  комментарии, отвечать на вопросы.
<p>в меню навигации четыре постоянных ссылок, точнее список из четырех пунктов, а ссылок будет три, так как ссылка, на которой вы находитесь не будет отображаться, в место нее будет только текст с названием страницы.<br>
 В зависимости где вы будете находиться ниже этих ссылок будут отображаться  дополнительные ссылки.<br>
Если вы перешли по ссылке "Главная", будут отображаться ссылки "О сайте" с общей информацией (сейчас вы на этой странице),  и страница "Контакты"  с формой отправки сообщения на электронную почту владельца сайта.<br>
На странице "Метки" будут отображаться метки с количеством статей и вопросов в каждой из них.<br>
Страница "Статьи" будет отображать список статей с кратким описанием и другими данными.<br>
Страница "Вопросы" открывает список вопросов и пополнительные ссылки для их сортировки.<br>
На главной странице вопросы и статьи отображаются независимо от меток, авторов, если вы хотите просмотреть  вопросы или статьи с определенной меткой  или определенного пользователя, то перейдите
по интересующей ссылке и там будут отсортированные вопросы или статьи.<br>

Для зарегистрированных пользователей будут доступны дополнительные ссылки, такие как- задать вопрос, ответить на вопрос, редактировать свои вопросы и ответы, писать статьи и комментарии к статьям.</p>

 Пользователь, задавший вопрос, будет автоматически получать на свою электронную почту уведомления о поступивших ответах, если ответ пользователя устраивает и помог ему решить проблему, то он может пометить данный ответ как "решение".<br>
Также другие пользователи, которых заинтересовал данный вопрос могут подписаться на него чтобы получить уведомления о ответах.<br>
Система учитывает  сколько пользователь задает вопросов, дает ответов, какие  из этих ответов являютя полезными.<br>
Вот вкратце о сайте.<br>


Сайт находится в стадии разработке, поэтому возможны ошибки, если вы их обнаружите то присылайте их <a href="/contacts">в форме обратной связи на странице контактов.</a>
Также принимаются предложения оформлении сайта и о сотрудничестве, особенно необходим web дизайнер, разбирающийся в html, css, javascript.<br>

 
</article>
@stop