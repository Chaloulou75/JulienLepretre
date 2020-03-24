@component('mail::message')

# Bonjour Julien

Tu as reçu une nouvelle demande de contact de la part de:

## **{{$apellidos}} {{$nombre}}**

-Né(e) le **{{$birthdate}}** .

-Taille: **{{$altura}}** cm.

-Poids: **{{$peso}}** kg.

-Les objectifs de **{{$apellidos}} {{$nombre}}** sont: 

@for( $i=0; $i<count($objetivos); $i++)
-**{{ $objetivos[$i] }}**  
@endfor

-Niveau de forme: **{{$forma}}**

-Travaille en tant que: **{{$trabajo}}**

-Sport pratiqué: **{{$deportes}}**

Ses informations de contact:

-Adresse e-mail: **<{{$email}}>**

-Numéro de téléphone : **{{$phone}}**

-Ce qui la/le fait souffrir:
@component('mail::panel')
**{{ $msg}}**
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
