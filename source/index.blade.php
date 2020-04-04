@extends('_layouts.master')

@section('body')
    <div class="m-full mb-6 items-center">
        <img class="h-64 ml-auto mr-auto block" src="/assets/images/esel.svg" alt="esel">
    </div>

    <div class="m-full mb-10">
        <h2>Hi! 👋</h2>
        <p>
            Mein Name ist Daniel Wittberger, ich bin Backend-Webdeveloper aus Österreich.
        </p>
        <p>
            Für meine Arbeit nutze ich meist PHP und seit neuestem auch ein wenig Go(lang). Tagsüber arbeite ich in Linz 🏭 bei <a href="https://www.karriere.at" target="_blank">karriere.at</a>.
            Des Nachts 🌙 beschäftige ich mich mit dem Zusammensetzen von <a href="https://www.instagram.com/p/BsSjwxEhIC-/" target="_blank">kleinen Plastiksteinen</a> 💎 oder ich bastle an privaten Software-Projekten.
        </p>
        <p>
            Privat verwende ich hauptsächlich Arch Linux 🐧 auf meinem Dell XPS 13". In der Arbeit klimpere ich auf einem Macbook Pro. (das Modell bei dem die Tastaturen so schnell kaputt werden 😬)
        </p>
    </div>

    <div class="m-full grid grid-cols-2">
        <div>
            <h3>Aktuelle Posts ⌨</h3>
            <ul class="list-none">
                @foreach ($posts->take(5) as $post)
                    <li>
                        <a href="{{ $post->getUrl() }}" title="weiterlesen - {{ $post->title }}" class="text-gray-900 font-extrabold">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div>
            <h3>Aktuelle Projekte 🤖</h3>
            <p>Sorry, es wird noch etwas dauern bis ich mit der Aufbereitung meiner Projekte fertig bin. 😞</p>
        </div>
    </div>
@stop
