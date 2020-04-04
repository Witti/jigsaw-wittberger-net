@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Über</h1>

    <p>Mein name ist Daniel Wittberger, ich bin Backend-Webdeveloper aus Österreich.</p>

    <p>Für meine Arbeit nutze ich meist PHP und seit neuestem auch ein wenig Go(lang). Tagsüber arbeite ich in Linz 🏭 bei karriere.at. Des Nachts 🌙 beschäftige ich mich mit dem Zusammensetzen von kleinen Plastiksteinen 💎 oder ich bastle an privaten Software-Projekten.</p>

    <p>Privat verwende ich hauptsächlich Arch Linux 🐧 auf meinem Dell XPS 13”. In der Arbeit klimpere ich auf einem Macbook Pro. (das Modell bei dem die Tastaturen so schnell kaputt werden 😬)</p>
@endsection
