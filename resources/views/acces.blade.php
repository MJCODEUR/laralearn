<html>
    

            @if ($nom =="papa")
                 <p>bienvenue {{$nom}}</p>
                 @isset($age)
                        @empty($age)
                              la valeur est vide
                        @endempty
                        @while ($age <= 18)
                              <p>vous ete mineur revenez apre </p>
                              {{$age++}}
                        @endwhile
                        @switch($age)
                              @case($age < 18)
                                    vous avez {{$age}} ; ans c'est un mineur
                                    @break
                              @case($age == 35)
                              vous avez {{$age}} ; ans c'est un mageur
                                    @break
                              @default
                              <p>desole je comprend rien</p>
                        @endswitch

                        @for($i=13; $i < $age; $i++)
                               <p> {{$i}} ans revenez a partir de {{$age}} ans !!!</p>
                        @endfor

                        @forelse ($nums as $num)
                            <p>voici le numéro <b>{{$num}}</b></p>
                            @empty
                                    <b>plus de numéro</b>

                        @endforelse
                 @endisset
            @else
                vous n'etes pas autorisé sorry !!!
            @endif




</html>
