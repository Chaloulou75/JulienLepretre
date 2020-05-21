@component('mail::message', ['header_url' => $header_url, 'header_title' => $header_title])

# Bonjour Julien

Tu as reçu une nouvelle demande de contact de la part de:

## **{{$apellidos}} {{$nombre}}**

-Né(e) le **{{ \Carbon\Carbon::parse($birthdate)->translatedFormat('j F Y') }}** .

-Taille: **{{$altura}}** cm.

-Poids: **{{$peso}}** kg.

-Niveau de forme: **{{$forma}}**/10

-Travaille en tant que: **{{$trabajo}}**

-Sport pratiqué: **{{$deportes}}**

Ses informations de contact:

-Adresse e-mail: **<{{$email}}>**

-Numéro de téléphone : **{{$phone}}**

-Ce qui la/le fait souffrir:
@component('mail::panel')
**{{ $msg}}**
@endcomponent

-Su problema:
@component('mail::panel')
**{{ $problema}}**
@endcomponent

-Movimiento que alivia:
@component('mail::panel')
**{{ $alivia}}**
@endcomponent

-Antecedentes:
@component('mail::panel')
**{{ $antecedentes}}**
@endcomponent

-L'objectif de **{{$apellidos}} {{$nombre}}**:
@component('mail::panel')
**{{ $objetivos}}**
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
