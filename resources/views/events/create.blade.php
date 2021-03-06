@extends('layouts.app')

@section('menu')
<div onclick="javascript:location.href='/events'" aria-expanded="false" role="button" tabindex="0"
     class="mdl-layout__drawer-button">
    <i class="material-icons">close</i>
</div>
@endsection

@section('title', 'Новое событие')

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone text-center">
        <form method="POST" action="{{ action('EventController@store') }}">
            {{ csrf_field() }}

            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="name" name="name">
                <label class="mdl-textfield__label" for="name">Название</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="place" name="place">
                <label class="mdl-textfield__label" for="place">Место</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <textarea class="mdl-textfield__input" type="text" rows="5" id="description"
                          name="description"></textarea>
                <label class="mdl-textfield__label" for="description">Описание</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="image" name="image">
                <label class="mdl-textfield__label" for="image">Ссылка на изображение (пока что)</label>
            </div>
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                        Создать
                    </button>
                </div>
            </div>

            @include('layouts.errors')
        </form>
    </div>
</div>
@endsection
