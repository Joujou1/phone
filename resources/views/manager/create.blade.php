@extends('base')

@section('content')
   
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter Manager</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('managers.store') }}">
          @csrf
          <div class="form-group">    
              <label for="m_nom">Nom:</label>
              <input type="text" class="form-control" name="m_nom"/>
          </div>

          <div class="form-group">
              <label for="m_prenom">Prenom:</label>
              <input type="text" class="form-control" name="m_prenom"/>
          </div>

          <div class="form-group">
              <label for="m_tel">Téléphone:</label>
              <input type="text" class="form-control" name="m_tel"/>
          </div>
          <div class="form-group">
              <label for="m_adresse">Adresse:</label>
              <input type="text" class="form-control" name="m_adresse"/>
          </div>
          <div class="form-group">
              <label for="m_reglement">Réglément:</label>
              <input type="text" class="form-control" name="m_reglement"/>
          </div>
                                  
          <button type="submit" class="btn btn-primary-outline">Ajouter Manager</button>
      </form>
  </div>
</div>
</div>
@endsection



