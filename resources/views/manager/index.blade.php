@extends('base')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3"> Les Managers</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Téléphone</td>
          <td>Adresse</td>
          <td>Reglement</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($managers as $manager)
        <tr>
            <td>{{$manager->id}}</td>
            <td>{{$manager->m_nom}}</td>
            <td> {{$manager->m_prenom}}</td>
            <td>{{$manager->m_tel}}</td>
            <td>{{$manager->m_adresse}}</td>
            <td>{{$manager->m_reglement}}</td>
            
            <td>
                <a href="{{ route('managers.edit', $manager->id) }}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('managers.destroy', $manager->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success col-sm-6">
      {{ session()->get('success') }}  
    </div>
  @endif
  <div class="col-sm-6">
    <a style="margin: 19px;" href="{{ route('managers.create')}}" class="btn btn-primary">Ajputer nouveau Manager</a>
    </div>  
<div class="col-sm-12">
</div>

@endsection