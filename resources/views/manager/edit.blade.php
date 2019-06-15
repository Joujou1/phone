@extends('base') 

@section('content')
 <div>
    <a style="margin: 19px;" href="{{ route('managers.create')}}" class="btn btn-primary">Ajouter Nouveau Manager</a>
    </div>  
<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mise à jour Manager</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('managers.update', $manager->id) }}">
            @method('GET') 
            @csrf
            <div class="form-group">

                <label for="m_nom">Nom:</label>
                <input type="text" class="form-control" name="m_nom" value={{ $manager->m_nom }} />
            </div>

            <div class="form-group">
                <label for="m_prenom">Prenom:</label>
                <input type="text" class="form-control" name="m_prenom" value={{ $manager->m_prenom }} />
            </div>

            <div class="form-group">
                <label for="m_tel">Téléphone:</label>
                <input type="text" class="form-control" name="m_tel" value={{ $manager->m_tel }} />
            </div>
            <div class="form-group">
                <label for="m_adresse">Adresse:</label>
                <input type="text" class="form-control" name="m_adresse" value={{ $manager->m_adresse }} />
            </div>
            <div class="form-group">
                <label for="m_reglement">Reglement:</label>
                <input type="text" class="form-control" name="m_reglement" value={{ $manager->m_reglement }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection